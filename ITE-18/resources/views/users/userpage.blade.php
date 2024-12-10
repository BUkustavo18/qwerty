<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Weighbridge Station</title>
    @vite(['resources/css/dashboard.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar Navigation -->
        <nav class="sidebar">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Weighbridge Logo">
            </div>
            <ul class="sidebar-menu">
                <li><a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="#"><i class="fas fa-calendar-day"></i> Daily Log</a></li>
                <li><a href="#"><i class="fas fa-exclamation-triangle"></i> Violation Tracking</a></li>
                <li><a href="#"><i class="fas fa-chart-line"></i> Summary Report</a></li>
                <li><a href="#"><i class="fas fa-user"></i> User</a></li>
            </ul>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i> Log Out
                </button>
            </form>
        </nav>

        <!-- user Content Area -->
        <div class="user-content">
            <header>
                <h1>User Profile</h1>
                <p>View your profile information.</p>
            </header>

            <section class="user-overview">
                <div class="profile-card">
                    <h2>Profile Details</h2>
                    <div class="profile-info">
                        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Role:</strong> Admin</p> <!-- Change dynamically if roles are implemented -->
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
