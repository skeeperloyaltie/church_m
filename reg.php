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
