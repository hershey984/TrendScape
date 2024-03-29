<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "clientinfo";

// Establish a connection to the MySQL database
$connection = mysqli_connect($servername, $username, $password, $database);

// Check if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Query to retrieve email addresses from the database table
$query = "SELECT email FROM login";
$result = mysqli_query($connection, $query);

// Check if the query execution was successful
if (!$result) {
    echo "Error fetching email addresses: " . mysqli_error($connection);
    exit();
}

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'jdjdjdkrjduseirk@gmail.com';
$mail->Password = 'fwlrugufpxbqaqvy';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

// Set sender email address
$mail->setFrom('jdjdjdkrjduseirk@gmail.com');

// Add recipients using BCC
while ($row = mysqli_fetch_assoc($result)) {
    $mail->addBCC($row['email']);
}

// Email content
$mail->isHTML(true);
$mail->Subject= $_POST["subject"];
$mail->Body = $_POST["message"];

try {
    // Send email
    $mail->send();
    echo "<script>alert('Email sent successfully');</script>";
} catch (Exception $e) {
    // Display error message
    echo "<script>alert('Error sending email. Error message: {$mail->ErrorInfo}');</script>";
}

// Close the database connection
mysqli_close($connection);
?>
