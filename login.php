<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "clientinfo";

$conn = new mysqli($servername, $username, $password, $database);

if(isset($_POST['submit'])){

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $usern = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$usern', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup Successful";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
}
$conn->close();
?>
