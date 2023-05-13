<?php
session_start();
include('Pages/Config.php');
include('Pages/scripts.php');

if(isset($_POST['adminLogin'])){
    $adminEmail=mysqli_real_escape_string($conn,$_POST['email']);
    $adminPassword=mysqli_real_escape_string($conn,$_POST['Apassword']);

      $login="SELECT * FROM registration WHERE email='$adminEmail' AND Apassword = '$adminPassword'";
      $login_query_run=mysqli_query($conn,$login);
      $loginData=mysqli_num_rows($login_query_run);
      if($loginData)
      {
        $email_pass=mysqli_fetch_assoc($login_query_run);
        $db_pass=$email_pass['Apassword'];
        
        $_SESSION['full_name']=$email_pass['full_name'];
        $_SESSION['picture']=$email_pass['picture'];
        if($db_pass){
            echo "<script>window.location.href='./index.php';</script>";
        }else{
            echo "<script>window.location.href='./adminlogin.php';</script>";
        }
        //  $_SESSION['auth']= true;
        //  $adminData=mysqli_fetch_array($login_query_run);
        //  $adminName=$adminData['full_name'];
        //  $adminEmail=$adminData['email'];
        //  $_SESSION['auth-name']=[
        //     'full_name' => $adminName,
        //     'email' => $adminEmail,
        //  ];
        //  $_SESSION['message']="logged in successfully";
        //  echo "<script>window.location.href='./index.php'</script>"; 

      }
      else{
        $_SESSION['message']="invalid Credentials";
        echo "<script>window.location.href='./adminlogin.php'</script>";
      }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/instyle.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  

</head>
<body >
    <div class="container admin-container">
        <div class="row">
    <div class="col-12 col-md-12 col-lg-6 col-xl-6 m-auto " >

   <!-- <div class="login-card-light p-3 shadow-lg rounded"> -->
            <div class="pt-3">
                <h2 class="text-danger text-center">Admin | logIn </h2>
            </div>
            <?php
            if(isset($_SESSION['message'])){
                ?>
            <div class="alert alert-warning" role="alert">
               <strong><?php $_SESSION['message'];?></strong>
        </div>
        <?php
        unset($_SESSION['message']);
     } 
     ?>  
            
           
            <form class="mt-5 my-login-form" action="adminlogin.php" method="POST">
                <div class="form-group">
                    <input type="email" 
                         class="form-control form-control-sm"
                     name="email"  placeholder="Email Id">
                 </div>

                <div class="form-group">
                    <input type="password" 
                        class="form-control form-control-sm" 
                      name="Apassword"  placeholder="Password">
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="rememberCheckBox">
                    <label class="form-check-label text-dark"  for="rememberCheckBox">Remember me?</label>
                </div>

                <div class="mt-5">
                    <button  type="submit" name="adminLogin" class="btn btn-sm btn-danger col  ">
                        Login
                    </button>
  
  
                </div>

                <div class="text-center mt-2 f-password">
                    <a href="#">Forgot Password?</a>
                </div>
                
                <div class="mt-5">
                    <p class="text-center f-password">
                        Don't have an account?
                        <a href="./Pages/adminregister.php" name="register">Click here to register</a>
                    </p>
                </div>
            </form>
        <!-- </div> -->
        </div>
        </div>
    </div>


        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
</body>
</html>