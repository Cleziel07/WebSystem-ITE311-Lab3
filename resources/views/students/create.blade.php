@extends('layouts.app')

@section('title', 'Register Student')

@section('content')

<div class="card">

    <h2>Register Student</h2>

    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="student_number">Student Number</label>

            <input
                type="text"
                id="student_number"
                name="student_number"
                value="{{ old('student_number') }}"
            >

            @error('student_number')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="first_name">First Name</label>

            <input
                type="text"
                id="first_name"
                name="first_name"
                value="{{ old('first_name') }}"
            >

            @error('first_name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>

            <input
                type="text"
                id="last_name"
                name="last_name"
                value="{{ old('last_name') }}"
            >

            @error('last_name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="program">Program</label>

            <input
                type="text"
                id="program"
                name="program"
                value="{{ old('program') }}"
            >

            @error('program')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="year_level">Year Level</label>

            <select id="year_level" name="year_level">

                <option value="">Select Year Level</option>

                <option value="1" {{ old('year_level') == 1 ? 'selected' : '' }}>
                    1st Year
                </option>

                <option value="2" {{ old('year_level') == 2 ? 'selected' : '' }}>
                    2nd Year
                </option>

                <option value="3" {{ old('year_level') == 3 ? 'selected' : '' }}>
                    3rd Year
                </option>

                <option value="4" {{ old('year_level') == 4 ? 'selected' : '' }}>
                    4th Year
                </option>

            </select>

            @error('year_level')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
            >

            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn">
            Register Student
        </button>

        <a
            href="{{ route('students.index') }}"
            class="btn btn-secondary"
        >
            Cancel
        </a>

    </form>

</div>

@endsection