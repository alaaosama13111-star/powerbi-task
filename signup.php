<?php
include('server1.php');
?>

<!DOCTYPE html>
<html>
    <head><title> Sign Up </title>  <link rel="stylesheet" href="styling.css"></head>
    <body> <h2> Sign Up</h2>
    <form action="login.php" method="post">
        <div><label for="name">Name</label>
        <input type ="text" id="name" name="un" required></div>

        <div> <label for="email">Email</label>
        <input type ="email" id="email" name="em" required></div>

        <div> <label for="pass"> password </label>
        <input type="password" id="password" name="psw1" required></div>

        <div><label for="pass-confirmation"> Repeat Password</label>
        <input type="password" id="password-confirmation" name="psw2" required></div>
        <input type="submit" name="register">
</form>
</body>
</html>
