<?php
session_start();

// set timezone to Asia/Dhaka
date_default_timezone_set('Asia/Dhaka');

// validate form inputs
if (!isset($_POST['name']) || empty($_POST['name']) ||
    !isset($_POST['email']) || empty($_POST['email']) ||
    !isset($_POST['password']) || empty($_POST['password']) ||
    !isset($_FILES['profile-pic']) || empty($_FILES['profile-pic']['name'])) {
  die("All fields are required");
}

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if (!$email) {
  die("Invalid email format");
}


// save profile picture to server
$uploadsDir = 'uploads/';
$filename = date('Y-m-d_h:ia').'_'.uniqid().'.'.pathinfo($_FILES['profile-pic']['name'], PATHINFO_EXTENSION);
$destination = $uploadsDir . $filename;

if (!move_uploaded_file($_FILES['profile-pic']['tmp_name'], $destination)) {
  die("Failed to upload profile picture");
}

// save user data to CSV file
$userData = array(
  $_POST['name'],
  $_POST['email'],
  $filename
);

$file = fopen('users.csv', 'a');
fputcsv($file, $userData);
fclose($file);

// set session and cookie
$_SESSION['name'] = $_POST['name'];
setcookie('name', $_POST['name'], time()+3600);

header("Location: display.php");
exit;
?>
