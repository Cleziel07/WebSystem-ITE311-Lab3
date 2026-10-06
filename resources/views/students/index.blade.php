@extends('layouts.app')

@section('title', 'Student Directory')

@section('content')

<div class="card">

    <h2>Student Directory</h2>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div style="margin-bottom: 20px;">
        <strong>Total Students:</strong>
        {{ $totalStudents }}
    </div>

    <form action="{{ route('students.index') }}" method="GET">

        <div class="search-grid">

            <div>
                <label for="search">Search Student</label>

                <input
                    type="text"
                    id="search"
                    name="search"
                    placeholder="Search by first or last name"
                    value="{{ $search }}"
                >
            </div>

            <div>
                <label for="program">Program</label>

                <select name="program" id="program">
                    <option value="">All Programs</option>

                    @foreach($programs as $programOption)
                        <option
                            value="{{ $programOption }}"
                            {{ $program == $programOption ? 'selected' : '' }}
                        >
                            {{ $programOption }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div>
                <button type="submit" class="btn">
                    Search
                </button>

                <a
                    href="{{ route('students.index') }}"
                    class="btn btn-secondary"
                >
                    Reset
                </a>
            </div>

        </div>

    </form>

    <div class="table-wrapper">

        <table>

            <thead>
                <tr>
                    <th>#</th>
                    <th>Student Number</th>
                    <th>Name</th>
                    <th>Program</th>
                    <th>Year Level</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>

                @forelse($students as $student)

                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $student->student_number }}</td>

                        <td>
                            {{ $student->first_name }}
                            {{ $student->last_name }}
                        </td>

                        <td>{{ $student->program }}</td>

                        <td>{{ $student->year_level }}</td>

                        <td>{{ $student->email }}</td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="6">
                            No students found.
                       </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection