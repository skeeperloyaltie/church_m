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

	<section>
		<div id="container_demo">
			<a class="hiddenanchor" id="toregister"></a>
			<a class="hiddenanchor" id="tologin"></a>
			<div id="wrapper">
				<!-- Homepage content goes here -->
				<div id="home" class="animate form">


					<!-- <img src="images/bg.jpg" height="1080px" width="1920px"> -->

				</div>

				<!-- Login form -->


				<div id="login" class="form">
					<form action="login.php" method="POST" autocomplete="on">
						<h1>Log in</h1>
						<p>
							<label for="username" class="uname" data-icon="u"> Username </label>
							<input id="username" name="username" required="required" type="text" placeholder="Mobile Number" />
						</p>
						<p>
							<label for="password" class="youpasswd" data-icon="p"> Your password </label>
							<input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
						</p>
						<p class="keeplogin">
							<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
							<label for="loginkeeping">Keep me logged in</label>
						</p>
						<p class="login button">
							<input type="submit" value="Login" name="login" />
						</p>
						<p class="change_link">
							Not a member yet ?
							<a href="reg.php" class="to_register">Join us</a>
						</p>
					</form>
				</div>




	</section>




	<?php
$host = "localhost";
$uname = "root";
$pas = "";
$db_name = "cman";
$tbl_name = "members";

$conn = mysqli_connect("$host", "$uname", "$pas") or die("cannot connect");
mysqli_select_db($conn, "$db_name") or die("cannot select db");
?>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login_query = mysqli_query($conn, "SELECT id, password FROM members WHERE username='$username'");
    $row = mysqli_fetch_assoc($login_query);

    if ($row) {
        $hashedPasswordFromDatabase = $row['password'];

        // Verify the password using password_verify
        if (password_verify($password, $hashedPasswordFromDatabase)) {
            session_start();
            $_SESSION['id'] = $row['id'];
            header('location:members/dashboard.php');
        } else {
            echo "Sorry, the provided password is incorrect.";
            header('location:index.php');
        }
    } else {
        echo "Sorry, this user cannot be found! Contact the administrator.";
        header('location:index.php');
    }
}
?>
