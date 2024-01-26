<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'St Andrews Smis v2.0')
        {{-- adding an icon to the page title --}}
    </title>
    <link rel="icon" href="{{ asset('css/standrews-logo.ico') }}" type="image/png">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Students
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Teachers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Enrollment
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Account
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <header class="navbar-brand">
                <h1 class="h2">@yield('page-title', 'STUDENT MANAGEMENT SYSTEM')</h1>
            </header>

            <!-- Content Section -->
            @yield('content')
        </main>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<!-- Footer -->
<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted"> <p>&copy; Hopmak 2024 All rights reserved.</p>
</footer>
<script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</script>
</body>
</html>
