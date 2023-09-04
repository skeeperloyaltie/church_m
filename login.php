<?php
$host = "localhost";
$uname = "root";
$pas = "";
$db_name = "cman";
$tbl_name = "members";

// Create a database connection
$conn = mysqli_connect($host, $uname, $pas) or die("Cannot connect");
mysqli_select_db($conn, $db_name) or die("Cannot select db");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

	echo "Username: " . $username . "<br>";
	echo "Password: " . $password . "<br>";

    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($conn, "SELECT id FROM members WHERE mobile = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
	echo "Rows found: " . mysqli_stmt_num_rows($stmt) . "<br>";

    if (mysqli_stmt_num_rows($stmt) > 0) {
        session_start();
        $row = mysqli_fetch_assoc($stmt);
        $_SESSION['id'] = $row['id'];
        header('location: members/dashboard.php');
    } else {
        // header('location: index.php');
		echo "Username: " . $username . "<br>";
		echo "Password: " . $password . "<br>";    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>
