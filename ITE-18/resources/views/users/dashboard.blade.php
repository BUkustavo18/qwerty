<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Weighbridge Station</title>
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
                <ul class="sidebar-menu">
                    <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-calendar-day"></i> Daily Log</a></li>
                    <li><a href="#"><i class="fas fa-exclamation-triangle"></i> Violation Tracking</a></li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> Summary Report</a></li>
                    <li><a href="{{route('userpage')}}" class="active"><i class="fas fa-user"></i> User</a></li>
                </ul>
                
            </ul>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i> Log Out
                </button>
            </form>
        </nav>

        <!-- Main Content Area -->
        <div class="main-content">
            <header>
                <h1>Welcome, Admin</h1>
                <p>Manage the weighbridge station operations efficiently.</p>
            </header>

            <section class="dashboard-overview">
                <div class="dashboard-card">
                    <h2>Daily Log</h2>
                    <p>Access the daily log records for trucks weighed.</p>
                    <a href="dailylog.html" class="card-link">View Log</a>
                </div>

                <div class="dashboard-card">
                    <h2>Violation Tracking</h2>
                    <p>Track and manage all violations recorded at the station.</p>
                    <a href="tracker.html" class="card-link">Track Violations</a>
                </div>

                <div class="dashboard-card">
                    <h2>Summary Report</h2>
                    <p>Generate detailed summary reports for daily, monthly, and annual activity.</p>
                    <a href="report.html" class="card-link">Generate Report</a>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
