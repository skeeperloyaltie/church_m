<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <title>CHURCH MANAGER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <meta name="author" content="" />
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/">Admin</a>
                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!DOCTYPE html>

    <div class="container mt-5">
        <form action="reg.php" method="POST" autocomplete="on">
            <h1 class="mb-4">Sign up</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" required placeholder="John">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="sname" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="sname" name="sname" required placeholder="Doe">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" required placeholder="John">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="Select Gender">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" min="1900-01-02" max="2023-12-31">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="residence" class="form-label">Residence</label>
                        <input type="text" class="form-control" id="residence" name="residence" required placeholder="Huruma">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="pob" class="form-label">Place of Birth</label>
                        <input type="text" class="form-control" id="pob" name="pob" required placeholder="Kirinyaga">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="ministry" class="form-label">Ministry</label>
                        <select class="form-select" id="ministry" name="ministry" required>
                            <option value="None">None</option>
                            <option value="Praise and Worship">Praise and Worship</option>
                            <option value="Ushering">Ushering</option>
                            <option value="Hostessing">Hostessing</option>
                            <option value="Media and IT">Media and IT</option>
                            <option value="Sunday School">Sunday School</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="mysupermail@mail.com">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile Number</label>
                        <input type="tel" class="form-control" id="mobile" name="mobile" required placeholder="eg. 0700000000" pattern="[0-9]{10}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required placeholder="eg. debbie">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="eg. X8df!90EO">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Sign up" name="submit" />
            </div>
            <p class="change_link">
                Already a member? <a href="login.php" class="to_register">Go and log in</a>
            </p>
        </form>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>





    <?php
    error_reporting(0);

    // Database connection
    $conn = @mysqli_connect('localhost', 'root', '', 'cman');

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $residence = $_POST['residence'];
        $pob = $_POST['pob'];
        $ministry = $_POST['ministry'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $username = $_POST['username'];

        $password = $_POST['password'];

        // Hash the password
        $pass = password_hash($password, PASSWORD_BCRYPT);

        // Check if the username already exists
        $check_query = mysqli_query($conn, "SELECT * FROM members WHERE username = '$username'");
        $count = mysqli_num_rows($check_query);

        if ($count > 0) {
            echo "<script>alert('This Member Already Exists');</script>";
            // echo "<script>window.location = 'index.php';</script>";
        } else {
            // Insert new member with hashed password
            $insert_query = "INSERT INTO members (fname, sname, lname, Gender, birthday, residence, pob, ministry, mobile, email, thumbnail, username, password, id)
                     VALUES ('$fname', '$sname', '$lname', '$gender', '$birthday', '$residence', '$pob', '$ministry', '$mobile', '$email', 'uploads/none.png', '$username', '$pass', '$mobile')";
            if (mysqli_query($conn, $insert_query)) {
                // Insert into activity_log
                $admin_username = ""; // Replace with the actual admin username
                $activity_query = "INSERT INTO activity_log (date, username, action) VALUES (NOW(), '$admin_username', 'Added member $username')";
                mysqli_query($conn, $activity_query);

                // echo "<script>window.location = 'index.php';</script>";
                echo "<script>$.jGrowl('Member Successfully added', { header: 'Member add' });</script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }

    // Close the database connection
    mysqli_close($conn);
    ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add('was-validated');
      }, false);
    });
}, false);
</script>
