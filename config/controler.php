<?php
session_start();
include_once('../config/database.php');


//login
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM `tbl_user` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if (empty($_POST['username']) && empty($_POST['password'])) {
        echo "<script>alert('Please Fill Username and Password');</script>";
        exit;
    } elseif (empty($_POST['password'])) {
        echo "<script>alert('Please Fill Password');</script>";
        exit;
    } elseif (empty($_POST['username'])) {
        echo "<script>alert('Please Fill Username);</script>";
        exit;
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $name = $row['name'];
            $username = $row['username'];
            $password = $row['password'];


            if ($username == $username && $password == $password) {
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header('location:../welcome.php');
            }
        } else {
            echo "<script>alert('Invalid Username or Password');</script>";
            exit;
        }
    }

}
 

// register 
if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $pass=md5($_POST['password']);

    $sql   ="INSERT INTO `tbl_user`(`name`, `username`, `password`) VALUES ('$name','$username','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    header('location:../login/login.php');
    echo"<script>alert('New User Register Success');</script>";   
    }else{
        die(mysqli_error($conn)) ;
    }
   
}

