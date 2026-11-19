<?php
if(!isset($_SESSION)){session_start();}
$errors=array();
$db=mysqli_connect('localhost','root','','ia-sec');
if(isset($_POST['register'])) {
    $username=mysqli_real_escape_string($db,$_POST['un']);
    $email=mysqli_real_escape_string($db,$_POST['em']);
    $password1=mysqli_real_escape_string($db,$_POST['psw1']);
    $password2=mysqli_real_escape_string($db,$_POST['psw2']);

    if (empty($username)){
        array_push($errors,"User name is required");
    }

    if (empty($email)){
        array_push($errors,"Email is required");
    }

    if (empty($password1)){
        array_push($errors,"password is required");
    }

    if (empty($password2)){
        array_push($errors,"Confirm password is required");
    }

    if ($password1 != $password2){
        array_push($errors,"Passwords do not match");
    }

    if(count($errors) == 0){
        $sql="INSERT INTO user (Name,email,password) Values ('$username','$email','$password1')";
        mysqli_query($db,$sql);
        $_SESSION['username'] = $username;
    $_SESSION['success'] = "Registration successful";
    header('location: home.php');
    }
}

if(isset($_POST['login'])){
    $username=mysqli_real_escape_string($db,$_POST['un']);
    $password=mysqli_real_escape_string($db,$_POST['psw1']);
    if(empty($username)){
        array_push($errors,'Username is required');}

    if(empty($password)){
        array_push($errors,'Password is required');}
    
    if(count($errors) == 0){
        $query="SELECT * FROM user WHERE Name= '$username' AND password='$password'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['username']=$username;
            $_SESSION['success']="Welcome you are logged in";
            header('location:home.php');
        }
    }
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}
?>