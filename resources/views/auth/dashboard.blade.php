```blade
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body>
    @include('templates.header')

    <div class="container mt-5">
        <h2>Dashboard</h2>

        <p>Welcome, {{ $user->name }}</p>
        <p>
            Role:
            <span class="badge bg-dark">
                {{ ucfirst($role) }}
            </span>
        </p>

        @switch($role)

            @case('admin')
                <div class="card mt-3">
                    <div class="card-header bg-danger text-white">
                        Admin Dashboard
                    </div>
                    <div class="card-body">
                        <p>
                            Manage users, courses, system settings,
                            and reports.
                        </p>
                        <button class="btn btn-danger" disabled>
                            Manage Users
                        </button>
                        <button class="btn btn-secondary" disabled>
                            System Reports
                        </button>
                        <p class="text-muted mt-2 mb-0">
                            These features are not yet implemented.
                        </p>
                    </div>
                </div>
                @break

            @case('teacher')
                <div class="card mt-3">
                    <div class="card-header bg-primary text-white">
                        Teacher Dashboard
                    </div>
                    <div class="card-body">
                        <p>
                            Create lessons, manage student submissions,
                            and update grades.
                        </p>
                        <button class="btn btn-primary" disabled>
                            Manage Lessons
                        </button>
                        <button class="btn btn-secondary" disabled>
                            View Grades
                        </button>
                        <p class="text-muted mt-2 mb-0">
                            These features are not yet implemented.
                        </p>
                    </div>
                </div>
                @break

            @case('student')
                <div class="card mt-3">
                    <div class="card-header bg-success text-white">
                        Student Dashboard
                    </div>
                    <div class="card-body">
                        <p>
                            View enrolled courses, submit activities,
                            and check grades.
                        </p>
                        <button class="btn btn-success" disabled>
                            My Courses
                        </button>
                        <button class="btn btn-secondary" disabled>
                            My Grades
                        </button>
                        <p class="text-muted mt-2 mb-0">
                            These features are not yet implemented.
                        </p>
                    </div>
                </div>
                @break

            @default
                <div class="alert alert-warning mt-3">
                    No valid role assigned to this account.
                </div>

        @endswitch
    </div>
</body>
</html>
```