<?php
$zahl = intval($_POST['zahl']);


session_start();
if (!(isset($_SESSION['x']))) {
    $_SESSION['x'] = rand(1, 100);
}
$x=$_SESSION['x'];
if ($zahl < intval($x)) {

    $_SESSION['message'] =  "<p>Die Zahl ist grösser</p>";
} 
if ($zahl >intval($x)) {
    $_SESSION['message'] =  "<p>Die Zahl ist kleiner</p>";
}
if ($zahl==intval($x)){
    $_SESSION['message'] = "<p>Du hast meine Zahl erraten</p>";
    $_SESSION['x'] = rand(1, 100);
}

header("Location: home.php");
