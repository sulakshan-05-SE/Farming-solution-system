<?php
session_start();

@mysql_connect("localhost", "root", "") or die ("Cannot connect to the database");
@mysql_select_db('harvest_Hub') or die ("Cannot select the database");

$username = mysql_real_escape_string($_POST["username"]);
$password = mysql_real_escape_string($_POST["password"]);

$staff_match = "SELECT loginid FROM login WHERE username = '$username' AND password = '$password'";
$staff_qry = mysql_query($staff_match);
$staff_num_rows = mysql_num_rows($staff_qry);

$regular_match = "SELECT stid FROM signup WHERE susername = '$username' AND spassword = '$password'";
$regular_qry = mysql_query($regular_match);
$regular_num_rows = mysql_num_rows($regular_qry);

$third_match = "SELECT usid FROM usignup WHERE uusername = '$username' AND upassword = '$password'";
$third_qry = mysql_query($third_match);
$third_num_rows = mysql_num_rows($third_qry);

if ($staff_num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: orderview.php");
    exit();
} elseif ($regular_num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: staffview2.php");
    exit();
} elseif ($third_num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: order.html");
    exit();
} else {
    $_SESSION['username'] = $username;
    echo "Sorry, the username or password is incorrect. Please try again.";
}

// Close the database connection
mysql_close();
?>
