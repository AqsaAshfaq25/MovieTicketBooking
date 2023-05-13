<?php
session_start();
include('configg.php');

if(isset($_GET['code'])){
    $code = $_GET['code'];
    $status = 'active';
    $updatequery = "UPDATE registration SET `status`='$status' WHERE code= '$code' ";

    $query = mysqli_query($conn, $updatequery);

    if($query){
        if(isset($_SESSION['message'])){
            $_SESSION['message'] = "Account Updated Successfully";
            header('location:../UserLogin.php');
        }else{
            $_SESSION['message'] = "You are logged out.";
            header('location:../UserLogin.php');
        }
    }else{
        $_SESSION['message'] = "Account Not Updated";
        header('location:../UserRegister.php');
    }
}
?>