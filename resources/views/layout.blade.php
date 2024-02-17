<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Custom styles for navbar */
    .navbar-nav .nav-link {
      font-size: 24px;
    }
    .nav-flex{
        display: flex;
    }
    
    

    .logo-small {
      height: 3rem;
      width: 3rem;
      border-radius: 50%;
      padding: 0.25rem;
      overflow: hidden;
      object-fit: cover;
    }

    /* .increased-margin-top {
    margin-top: 168px; 
    } */

    .col-white{
        color: #777;
    }

    .col-white:hover{
        color: white;
    }


    
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item nav-flex">
          <img src="https://source.unsplash.com/1400x800/?school" alt="Logo" class="logo-small">
          <a class="nav-link active" aria-current="page" href="#" style="color: white;">Student Management System</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Sidebar -->
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark increased-margin-top">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-5 d-none d-sm-inline text-white">Student Management System</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="active">
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle" style="color: white;">
                            <i class="fs-4 bi-speedometer2"></i> 
                            <span class="fs-3 ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/students') }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> 
                            <span class="fs-3 ms-1 d-none d-sm-inline col-white">Student</span>
                        </a>
                    </li>



                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="fs-3 ms-1 d-none d-sm-inline col-white">Teacher</span></a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="fs-3 ms-1 d-none d-sm-inline col-white">Courses</span></a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="fs-3 ms-1 d-none d-sm-inline col-white">Enrollment</span></a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="fs-3 ms-1 d-none d-sm-inline col-white">Payment</span></a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://source.unsplash.com/1400x800/?student" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">My Profile</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
               @yield('content')
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


</body>
</html>
