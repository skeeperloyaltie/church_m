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
    <link rel="icon" type="icon" href="admin/images/logo.png">
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
                        <a class="nav-link" href="admin/">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reg.php">Register</a>
                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/john-cafazza-AeABkasP-24-unsplash.jpg" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item">
      <img src="images/patrick-fore-b_SHPU5M3nk-unsplash.jpg" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item">
      <img src="images/sam-balye-WNVnnHHcBeM-unsplash.jpg" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
  </div>
</div>
<!-- Carousel wrapper -->
    <div class="container mt-5">
        <h1>Welcome to Our Church</h1>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/aaron-burden-5c5VcFshOds-unsplash.jpg" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Sunday Worship</h5>
                        <p class="card-text">Join us every Sunday for a powerful worship service.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/akira-hojo-_86u_Y0oAaM-unsplash.jpg" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Community Outreach</h5>
                        <p class="card-text">Get involved in our community outreach programs and make a difference.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/bg.jpg" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Bible Study</h5>
                        <p class="card-text">Join our weekly Bible study sessions to deepen your faith.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Grid Layout -->
        <div class="row mt-4">
            <!-- Column 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/sam-balye-WNVnnHHcBeM-unsplash.jpg" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Worship </h5>
                        <p class="card-text">Join us for an exciting worship session. One near God.</p>
                        <a href="index.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/patrick-fore-b_SHPU5M3nk-unsplash.jpg" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Bible study</h5>
                        <p class="card-text">Lets Commemorate and make it worth of Event 2.</p>
                        <a href="login.php" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/john-cafazza-AeABkasP-24-unsplash.jpg" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Hillside Prayer</h5>
                        <p class="card-text">Achieve that direct talk with God today!</p>
                        <a href="reg.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js" integrity="sha384-f3zPqp3lUjSgCB0+VqDc5OxI7F5f4LBO+w2fFv5w5QvC1O5x27kRPQcc6zDv02jzD" crossorigin="anonymous"></script>
            <script>
                import { Carousel } from 'mdb-ui-kit';
                const myCarousel = document.querySelector('#myCarousel');
const carousel = new mdb.Carousel(myCarousel);
</script>

</body>

</html>