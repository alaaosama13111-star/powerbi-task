<?php
include('server1.php');
?>
<!DOCTYPE html>
<html> 
    <head> 
        <title> LOGIN </title>
</head>
<body> 
    <header><h1>Login</h1></header>
    <form method="post" action="login.php">
    <div class ="inp"> <label>Username</label>
    <input type="text" name="un" required></div>

    <div class="inp"><label>Password</label>
    <input type="password" name="psw1" required></div>

    <div class="inp">
        <button type="submit" name="login" class="btn">Sign in</button></div>
<p> Not yet a member?<a href="signup.php">Sign up</a> </p>
</form>
</body>
</html>
