<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <title>CHURCH MANAGER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        /* Add your CSS for the homepage design here */

        /* Homepage content */
        #home {
            flex: 1;
            padding: 20px;
        }

        /* Login and Registration forms */
        #login,
        #register {
            flex: 1;
            padding: 20px;
            display: none;
        }

        /* Show the selected form */
        .active-form {
            display: block;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Church Manager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin</a>
                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container-lg my-3">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            </ol>

            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/aaron-burden-5c5VcFshOds-unsplash.jpg" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block">
                        <p>
                            <a href="#" onclick="showLogin();">Login</a> or
                            <a href="#" onclick="showRegister();">Register</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/akira-hojo-_86u_Y0oAaM-unsplash.jpg" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <p>
                            <a href="#" onclick="showLogin();">Login</a> or
                            <a href="#" onclick="showRegister();">Register</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/bg.jpg" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption d-none d-md-block">
                        <p>
                            <a href="#" onclick="showLogin();">Login</a> or
                            <a href="#" onclick="showRegister();">Register</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
       
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js" integrity="sha384-f3zPqp3lUjSgCB0+VqDc5OxI7F5f4LBO+w2fFv5w5QvC1O5x27kRPQcc6zDv02jzD" crossorigin="anonymous"></script>

</body>

</html>