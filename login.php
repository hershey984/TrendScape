<?php
session_start();



if(isset($_POST['username'], $_POST['passw'])) {
    $username = $_POST['username'];
    $passw = $_POST['passw'];

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $database = "clientinfo";

    $conn = new mysqli($servername, $db_username, $db_password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM login WHERE username = '$username'";
    $result = $conn->query($sql);

    if($result && $result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if(password_verify($passw, $row['passw'])) {
            $_SESSION["username"] = $username;
            header("Location: home.html");
            exit();
        } else {
            $error = "Incorrect password";
        }
    } else {
        $error = "User not found";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="logstyle.css">
</head>
<body>
<?php if(isset($error)) echo "<p>$error</p>"; ?>
<div class="centercontainer">
        <div class="frost">
            <h2 style="color:white">REGISTER HERE</h2>
            <div class="loginbox">
            <br>
            <br>
            <form id="signupForm" method="post" class="formtext">
            <label for="username">Username:</label>
                <input type="text" id="username"  name="username" required>
                <br>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="passw" name="passw" required>
                <br>
                <br>
                <button type="submit" value="login">Login</button>
            </form>
            <p>New User -><a href="reg.php">Click Here</a></p>
        </div>
    </div>
</div>
</body>
</html>
