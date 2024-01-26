<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St Andrews smis v2.0</title>
    <link rel="icon" href="bootstrap-5.3.2-dist/standrews-logo.ico" type="image/png">
  <link href="bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="bootstrap-5.3.2-dist/css/style.css" rel="stylesheet">

</head>
<body>
<div class="container=fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <header>
                  <h1 class="navbar-brand">
                    <img src="bootstrap-5.3.2-dist/logo3.png" alt="Logo">
                    STUDENT MANAGEMENT SYSTEM
                  </h1>
                  </header>

                </div>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="sidebar">
                        <a href="#">Home</a>
                        <a href="#">Student</a>
                        <a href="#">Teacher</a>
                        <a href="#">Courses</a>
                        <a href="#">Enrollment</a>
                        <a href="#">Accounts</a>
                    </div>
                </div>
            </div>



        </div>

    </div>
    <div class="main">
        @yield('content')
    </div>
    <div class="footer">
        <p>&copy; Hopmak 2024 All rights reserved.</p>
    </div>
</div>

<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>

</body>
</html>
