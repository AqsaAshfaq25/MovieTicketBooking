<?php
$title = 'RESET PASSWORD | TICKETS BUCKET';

include("configg.php");
include("scripts.php");
session_start();
ob_start();

if(isset($_POST["UpdatePass"])){
    if (isset($_GET['code'])) {
        $code = $_GET['code'];
    
       $NewPassword=mysqli_real_escape_string($conn,$_POST['Upassword']);
       $confirmPassword=mysqli_real_escape_string($conn,$_POST['confirmPass']);

       if($NewPassword === $confirmPassword){
        
           $update = "UPDATE `registration` SET `Apassword`='[$NewPassword]' WHERE `code`='[$code]'";

           $query = mysqli_query($conn, $update);
   
           if($query){
               $_SESSION['message'] = "Your password has been updated";
               header("location:../UserLogin.php");
           }else{
               $_SESSION['passmsg'] = "Your password is not updated..!";
               header("location:reset_password.php");
           }
       }else{
        $_SESSION['passmsg'] = "Your password is not matching..!";
       }
    }else{
        $_SESSION['passmsg'] = "Please Try Again Later.";
        echo "<script>alert('Code not found!')</script>";
     
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="../Assets/images/icon/background3.png">
	<div class="container-fluid" height="200vh">
		<div class="container mt-5">
		    <div class="card mt-1" style="max-width: 540%;background:transparent;border:none;">
                <div class="row g-0">
                    <div class="col-md-6" >
				         <div class="img">
		    	            <img class="img-fluid" src="../Assets/images/icon/bg.png">
		                 </div>
                    </div>
                    <div class="col-md-6 text-center" >
					  <img src="../Assets/images/logo1 (2).jpeg" class="ms-" alt="" style="justify-content:middle;" width="70%" height="100px">
                         <h2 class="card-title text-center">Reset Your Password</h2>
                         <p class="small mt-3">Please Enter Your New Password</p>

                         <p class="bg-danger text-dark">
                            <?php
                             if (isset($_SESSION['passmsg'])) {
                                echo $_SESSION['passmsg'];
                             }else{
                                echo $_SESSION['passmsg'] = "" ;
                             }
                            ?>
                         </p>
						 <p style="color:red;font-size:small;" class="text-bold"  >
                          <?php           
                               if(isset($error)){
                                  echo $error;
                               }           
                          
                          ?>
                          </p>
                       <div class="card-body align-center pt-4">
						    <div class="login-content mt-1">
		    	               <form action="reset_password.php" method="post" autocomplete="off">
		    	                     <!-- <h2 class="title mb-4">SIGN IN</h2> -->
               	                    <div class="input-div one">
               	                       <div class="i">
                                          <i class="fa-solid fa-lock fa-beat"></i>               	                       
                                        </div>
               	                       <div class="div">
               	                       		<h5>New Password</h5>
               	                       		<input type="password" class="input" name="Upassword" value="<?php if(isset($error)){
                                         echo $NewPassword ;
                                        } ?>">
               	                       </div>
               	                    </div>
                                    <div class="input-div one">
               	                       <div class="i">
                                          <i class="fa-solid fa-lock fa-beat"></i>               	                       
                                        </div>
               	                       <div class="div">
               	                       		<h5>Confirm Password</h5>
               	                       		<input type="password" class="input" name="confirmPass" value="<?php if(isset($error)){
                                         echo $confirmPassword ;
                                        } ?>">
               	                       </div>
               	                    </div>
                                    <button class="btn btn-primary text-white ms-5 mt-4" type="submit" name="UpdatePass">
                                        Update Password</button>
								    <p class="text-center mt-2">
                                          Already have an account?
                                          <a href="../UserLogin.php" name="register">Click here to Login</a>
                                    </p>
									<!-- <div class="mt"> -->
                                      
                                    <!-- </div> -->
								</form>
                            </div>
                       </div>
                  </div>
                </div>
            </div>
		</div>
    </div>

    <script type="text/javascript" src="../Assets/js/main.js"></script>
</body>
</html>