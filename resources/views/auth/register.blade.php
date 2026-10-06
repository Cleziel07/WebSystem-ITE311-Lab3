<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2>User Registration</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/register" method="POST">

        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password"
                   name="password"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password"
                   name="password_confirmation"
                   class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            Register
        </button>

        <a href="/login" class="btn btn-link">
            Already have an account?
        </a>

    </form>

</div>

</body>
</html>