<?php
$title = 'FORGOT PASSWORD | TICKETS BUCKET';

include("../Pages/configg.php");
include("../Pages/scripts.php");
session_start();
if(isset($_POST['sendmail'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $emailquery = " SELECT * FROM registration WHERE email= '$email' ";
    $query =mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($query);
 
    if($emailcount){
         $userdata = mysqli_fetch_assoc($query);
         $usename = $userdata['full_name'];
         $code = $userdata['code'];

        $subject = "Password Reset";
        $body = "Hi, $usename. Click here too reset your password
        http://localhost/ticketBuckets/website/Pages/reset_password.php?code='$code'";

        $sender_email = "From: ticketsbucket135@gmail.com";
        if(mail($email, $subject, $body, $sender_email)){
            $_SESSION['message'] = "Check your mail to reset your password $email";

            header('location:../UserLogin.php');
        }else{
            echo "<script>alert('Email Sending failed...!')</script>";
        }
    }else{
        echo "<script>alert('No email found!')</script>";
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
                         <h2 class="card-title text-center">Forgot Password?</h2>
                         <p class="small mt-3">Enter your email address to receive a reset link</p>
						 <div style="font-size:16px; color:#cc0000; margin-top:10px">
                          <?php           
                            if(isset($error)){
                               echo $error;
                            }  
                          ?>					   
						  </div>
                       <div class="card-body align-center pt-4">
                       
						    <div class="login-content mt-1">
		    	               <form action="forgotpass.php" method="post" autocomplete="off">
		    	                     <!-- <h2 class="title mb-4">SIGN IN</h2> -->
               	                    <div class="input-div one">
               	                       <div class="i">
                                          <i class="fa-solid fa-envelope fa-beat"></i>               	                       
                                        </div>
               	                       <div class="div">
               	                       		<h5>Email Address</h5>
               	                       		<input type="email" class="input" name="email" value="<?php if(isset($error)){
                                         echo $email ;
                                        } ?>">
               	                       </div>
               	                    </div>
                                    <button class="btn btn-primary text-white ms-5 mt-4" 
                                    type="submit" name="sendmail">CONTINUE</button>
								    <p class="text-center mt-4">
                                          Don't have an account?
                                          <a href="../UserRegister.php" name="register">Click here to register</a>
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