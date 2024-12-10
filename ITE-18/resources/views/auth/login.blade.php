<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Weighbridge Record Management System</title>
    @vite(['resources/css/register.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Section -->
    <header>
        <h1>Weighbridge Management</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('register') }}">Register</a>
        </nav>
    </header>

    <!-- Main Container -->
    <div class="container">
        <h2>Login</h2>
        <p>Sign in to access and manage weighbridge records efficiently.</p>

        <form action="{{ route('login') }}" method="POST">
            @csrf

            {{-- Email --}}
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
            @error('email')
                <p class="error" style="color: red;">{{ $message }}</p>
            @enderror

            {{-- Password --}}
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required>
            @error('password')
                <p class="error" style="color: red;">{{ $message }}</p>
            @enderror

            {{-- Remember Me Checkbox --}}
            <div class="form-group">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>

            @error('failed')
            <p class="error" style="color: red;">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn">Login</button>
        </form>

        <div class="login-link">
            Don't have an account? <a href="{{ route('register') }}">Register</a>
        </div>
    </div>
</body>

</html>
