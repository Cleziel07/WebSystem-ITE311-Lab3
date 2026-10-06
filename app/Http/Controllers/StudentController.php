<?php

// CLEZIEL T. BARUEL

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;
    $program = $request->program;

    $query = Student::query();

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('first_name', 'like', '%' . $search . '%')
              ->orWhere('last_name', 'like', '%' . $search . '%');
        });
    }

    if ($program) {
        $query->where('program', $program);
    }

    $students = $query->orderBy('last_name')->get();

    $programs = Student::select('program')
        ->distinct()
        ->orderBy('program')
        ->pluck('program');

    $totalStudents = Student::count();

    return view('students.index', compact(
        'students',
        'programs',
        'totalStudents',
        'search',
        'program'
    ));
}

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_number' => 'required|unique:students,student_number',
            'first_name' => 'required',
            'last_name' => 'required',
            'program' => 'required',
            'year_level' => 'required|integer|between:1,4',
            'email' => 'required|email|unique:students,email',
        ]);

        Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student successfully registered!');
    }
}