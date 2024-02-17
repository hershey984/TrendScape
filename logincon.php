<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "clientinfo";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['username']) && isset($_POST['passw'])) {
    $usern = $_POST['username'];
    $pass = $_POST['passw'];

    $hashedpass = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO login (username, passw) VALUES ('$usern', '$hashedpass')";

    if($conn->query($sql) === TRUE) {
        echo "Your registration was successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>