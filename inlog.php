<?php
session_start();
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naam = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];

    $sql = "SELECT * FROM user WHERE naam = '$naam' AND wachtwoord = '$wachtwoord'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['naam'] = $naam;
        header("Location: admin.php");
    } else {
        header("Location: login.html?error=1");
    }
}
$conn->close();
?>
