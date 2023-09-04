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
        

          


            
                            <div id="register" class="form">
                                <form action="reg.php" method="POST" autocomplete="on">
                                    <h1> Sign up </h1>
                                    <p>
                                        <label for="usernamesignup" class="uname" data-icon="u">First Name</label>
                                        <input id="usernamesignup" name="fname" required="required" type="text" placeholder="John" />
                                    </p>
                                    <p>
                                        <label for="usernamesignup" class="uname" data-icon="u"> Middle Name</label>
                                        <input id="usernamesignup" name="sname" required="required" type="text" placeholder="Doe" />
                                    </p>
                                    <p>
                                        <label for="usernamesignup" class="uname" data-icon="u">Last Name</label>
                                        <input id="usernamesignup" name="lname" required="required" type="text" placeholder="John" />
                                    </p>
                                    <p>
                                        <label for="usernamesignup" class="uname" data-icon="u">Gender</label>

                                        <select name="gender" id="usernamesignup" required="required" type="text">
                                            <option value="Select Gender">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>

                                        </select>
                                    </p>
                                    <p>
                                        <label for="usernamesignup" class="uname" data-icon="u">Date Of Birth</label>
                                        <input id="usernamesignup" type="date" name="birthday" min="1900-01-02" />
                                    </p>
                                    <p>
                                        <label for="usernamesignup" class="uname" data-icon="u">Residence</label>
                                        <input id="usernamesignup" name="residence" required="required" type="text" placeholder="Huruma" />
                                    </p>
                                    <p>
                                        <label for="usernamesignup" class="uname" data-icon="u">Place of Birth</label>
                                        <input id="usernamesignup" name="pob" required="required" type="text" placeholder="Kirinyaga" />
                                    </p>
                                    <p>
                                        <label for="usernamesignup" class="uname" data-icon="u">Ministry</label>
                                        <select name="ministry" id="usernamesignup" required="required" type="text">
                                            <option value="None">None</option>
                                            <option value="Praise and Worship">Praise and Worship</option>
                                            <option value="Ushering">Ushering</option>
                                            <option value="Hostessing">Hostessing</option>
                                            <option value="Media and IT">Media and IT</option>
                                            <option value="Sunday School">Sunday School</option>
                                        </select>
                                    </p>
                                    <p>
                                        <label for="emailsignup" class="youmail" data-icon="e"> Your email</label>
                                        <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com" />
                                    </p>
                                    <p>
                                        <label for="passwordsignup" class="youpasswd" data-icon="p">Mobile Number </label>
                                        <input id="passwordsignup" name="mobile" required="required" type="text" placeholder="eg.0700000000" />
                                    </p>
                                    <p>
                                        <label for="username" class="username" data-icon="p">Username </label>
                                        <input id="username" name="username" required="required" type="username" placeholder="eg. debbie" />

                                    </p>
                                    <p>
                                        <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Password </label>
                                        <input id="passwordsignup_confirm" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                                    </p>
                                    <p class="signin button">
                                        <input type="submit" value="Sign up" name="submit" />
                                    </p>
                                    <p class="change_link">
                                        Already a member ?
                                        <a href="#tologin" class="to_register"> Go and log in </a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




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

        // Check if the username already exists
        $check_query = mysqli_query($conn, "SELECT * FROM members WHERE username = '$username'");
        $count = mysqli_num_rows($check_query);

        if ($count > 0) {
            echo "<script>alert('This Member Already Exists');</script>";
            echo "<script>window.location = 'index.php';</script>";
        } else {
            // Insert new member
            $insert_query = "INSERT INTO members (fname, sname, lname, Gender, birthday, residence, pob, ministry, mobile, email, thumbnail, username, password, id)
                         VALUES ('$fname', '$sname', '$lname', '$gender', '$birthday', '$residence', '$pob', '$ministry', '$mobile', '$email', 'uploads/none.png', '$username', '$password', '$mobile')";
            if (mysqli_query($conn, $insert_query)) {
                // Insert into activity_log
                $admin_username = ""; // Replace with the actual admin username
                $activity_query = "INSERT INTO activity_log (date, username, action) VALUES (NOW(), '$admin_username', 'Added member $username')";
                mysqli_query($conn, $activity_query);

                echo "<script>window.location = 'index.php';</script>";
                echo "<script>$.jGrowl('Member Successfully added', { header: 'Member add' });</script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }

    // Close the database connection
    mysqli_close($conn);
    ?>