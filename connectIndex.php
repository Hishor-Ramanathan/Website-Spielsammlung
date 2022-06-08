<?php
$email = $_POST['email'];
$password = $_POST['password'];

session_start();
$conn = new mysqli('localhost', 'root', '', 'logindata');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT *  FROM registration WHERE email = ?");
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt_result = $stmt->get_result();
if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if (($data['password']===$password)) {
        header("Location: Home.php");
        die();     
    }  
}
$_SESSION['message'] = "Falsche E-Mail oder Passwort eingeben";
header("Location: Index.php");



