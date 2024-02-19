<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "clientinfo";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['username']) && isset($_POST['passw']) && isset($_POST['email']) && isset($_POST['contact'])) {
    $usern = $_POST['username'];
    $pass = $_POST['passw'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $hashedpass = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO login (username, passw, email, contact) VALUES ('$usern', '$hashedpass', '$email', '$contact')";

    if($conn->query($sql) === TRUE) {
        $_SESSION["username"] = $usern;
        echo "<script>
                    document.getElementById('signupForm').style.display = 'none';
                    document.getElementById('success').style.display = 'block';
              </script>";
           
        header("Location: home.html");      
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>