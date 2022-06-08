<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$age = $_POST['age'];
if (empty($_POST['gender'])) {
	$gender = "empty";
} else {
	$gender = $_POST['gender'];
}

/*
session_start();
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
	$_SESSION['message'] = "Geben Sie einen Richtigen Namen ein";
	header("Location: Registrierung.php");
	die();
  }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("Location: Registrierung.php");
	die();
}
*/
$conn = new mysqli('localhost', 'root', '', 'logindata');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
}
$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number,age) values(?, ?, ?, ?, ?, ?,?)");
$stmt->bind_param("ssssssi", $firstName, $lastName, $gender, $email, $password, $number, $age);
$execval = $stmt->execute();
if (!($execval == 1)) {
	echo $execval;
} else {
	header("Location: Home.php");
	die();
}


