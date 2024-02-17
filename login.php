<?php
    include("logincon.php");   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-UP</title>
    <link rel="stylesheet" href="logstyle.css">
    <script src="logscript.js" defer></script>
    <meta name="google-signin-client_id" content="752569437279-m81gn5ppqdrv112iaap5p5ufl0rdh6ii.apps.googleusercontent.com">
</head>
<body>
    <div class="centercontainer">
        <div class="frost">
            <h2 style="color:white">REGISTER HERE</h2>
            <div class="loginbox">
            <br>
            <br>
            <form id="signupForm" method="post" class="formtext">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="passw" name="passw" required>
                <br>
                <br>
                <button type="submit" onclick="login()" value="login">Login</button>
            </form>
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
            </div> 
        </div>
    </div>
    <script src="logscript.js" defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>