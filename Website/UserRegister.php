
<?php
$title = 'REGISTER FORM | TICKETS BUCKET';

include("./Pages/configg.php");
include("./Pages/scripts.php");
session_start();

if(isset($_POST["register"])){
    $name= $_FILES['picture']; 
    $imageName=$_FILES['picture']['name'];
    $tempName=$_FILES['picture']['tmp_name'];
    $destination="./Assets/images/useruploads/".$imageName;
    move_uploaded_file($tempName,$destination);
    $UserName=mysqli_real_escape_string($conn,$_POST['Uname']);
    $UserEmail=mysqli_real_escape_string($conn,$_POST['Uemail']);
    $UserPassword=mysqli_real_escape_string($conn,$_POST['Upassword']);
    $confirmPassword=mysqli_real_escape_string($conn,$_POST['confirmPass']);
    $role=$_POST['Role'];

    $code = bin2hex(random_bytes(15));
    $status= "inactive"; 
    
     $emailquery = "SELECT * FROM registration WHERE email ='$UserEmail' AND full_name= '$UserName'";
     $query = mysqli_query($conn, $emailquery);

     $emailcount = mysqli_num_rows($query);
     if($emailcount>0){
        $error="Email Already Exists";
    }else{ 
        if(empty($UserName)){
            $error="* Name field is required";
        }
        elseif(empty($UserEmail)){
            $error="* Email field is required";
        }
        elseif(empty($UserPassword)){
            $error= "* password  is required";
        }elseif($UserPassword != $confirmPassword){
            $error="*  password  does not match";
        }elseif(strlen($UserName) < 5 || strlen($UserName) > 30){
            $error="name must be between 5 to 30 charachters ";
        }elseif(strlen($UserPassword ) < 6 || strlen($UserPassword ) > 18){
            $error="your password must be atleast 6  to 18 charachters ";
        }elseif(empty($imageName)){
            $error="* set your profile ";
        }else{
            
            $insert = "INSERT INTO registration (`full_name`, `email`, `Apassword`, `picture`, `Urole`, `code`, `status`) 
            VALUES ( '$UserName' , '$UserEmail','$UserPassword','$imageName','$role', '$code', '$status')";

            $loginquery= mysqli_query($conn, $insert);

            if($loginquery){
                $to = $UserEmail;
                $subject = "Email Activation";
                $body = "Hi, $UserName. Click here too activate your account
                http://localhost/ticketBuckets/website/pages/activate.php?code=$code";
                
                $sender_email = "From: ticketsbucket135@gmail.com";
                 if (mail($to, $subject, $body, $sender_email )) {
                    $_SESSION['message'] = "Check your mail to activate your account $UserEmail";
                    echo "<script>alert('You have successfully Register')</script>";
                    echo "<script>window.location.href = 'UserLogin.php';</script>";
                 }else{
                    echo "<script>alert('Registration failed..!')</script> ";
                    // $_SESSION['message'];
                 }
            }else{
                echo "<script>window.location.href = 'UserRegister.php';</script>"; 
            }
        }
    }
    
   
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./Assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="./Assets/images/icon/background3.png">
	<div class="container-fluid" height="200vh">
		<div class="container mt-5">
		    <div class="card mt-1" style="max-width: 540%;background:transparent;border:none;">
                <div class="row g-0">
                    <div class="col-md-6" >
				         <div class="img">
		    	            <img class="img-fluid" src="./Assets/images/icon/bg.png">
		                 </div>
                    </div>
                    <div class="col-md-6 text-center" >
					  <img src="./Assets/images/logo1 (2).jpeg" class="ms-" alt="" style="justify-content:middle;" width="70%" height="100px">
                         <h2 class="card-title text-center">SIGN UP</h2>
                         
						 <!-- <div style="font-size:14px; color:#330549;"> -->
                         <!-- </div> -->
                       <div class="card-body align-center pt-4">
                         <p style="color:red;font-size:small;" class="text-bold"  >
                          <?php           
                               if(isset($error)){
                                  echo $error;
                               }           
                          
                          ?>
                          </p>
						    <div class="login-content mt-1">
							   
                                <form class="mt-1 my-login-form" action="UserRegister.php" method="post" enctype="multipart/form-data">
                                   <div class="row">
                                   <div class="col mt-2">
                                       <label for=""  class="form-label"><i class="fa-solid fa-user fa-bounce"></i>&nbsp; Name:</label>        
                                       <input type="text" 
                                            class="form-control form-control-sm" 
                                        name="Uname" placeholder="enter your full name" value="<?php if(isset($error)){
                                         echo $UserName;
                                        } ?>">
                                   </div>

                                   <div class="col mt-2">
                                   <label for=""  class="form-label"> <i class="fa-solid fa-envelope fa-beat"></i>&nbsp; Email:</label>    
                                   <input type="email" 
                                            class="form-control form-control-sm" 
                                        name="Uemail"    placeholder="Email Address"  value="<?php if(isset($error)){
                                         echo $UserEmail ;
                                        } ?>">
                                    </div>
                                   </div>
                                   <div class="row">
                                   <div class="col mt-3">
                                   
                                   <label for=""  class="form-label"><i class="fa-solid fa-lock fa-shake"></i>&nbsp; Password:</label>    
                                   <input type="password" 
                                           class="form-control form-control-sm" 
                                         name="Upassword"   placeholder="Password"
                                         value="<?php if(isset($error)){
                                         echo $UserPassword ;
                                        } ?>">
                                         
                                   </div>
                                   <div class="col mt-3">
                                   <label for=""  class="form-label"><i class="fa-solid fa-lock fa-shake"></i>&nbsp; Confirm Password:</label>    
                                   <input type="password" 
                                           class="form-control form-control-sm" 
                                         name="confirmPass"   placeholder="Password"  value="<?php if(isset($error)){
                                         echo $confirmPassword;
                                        } ?>">
                                         
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4 mt-3">
                                       <label for=""  class="form-label"><i class="fa-solid fa-user-tie fa-bounce"></i>&nbsp; Role:</label>
                                   <select class="form-select" name="Role"   aria-label="Default select example">
                                       <option value="user" selected>User</option>
                                       <!-- <option  value="admin">Admin</option> -->
                                   </select>
                                   </div>
                                   <div class="col-8 mt-3">
                                   <label for=""  class="form-label"><i class="fa-solid fa-image fa-beat-fade"></i>&nbsp; Profile:</label>
                                   <input class="form-control" style="height:px;" name="picture" type="file" value="<?php if(isset($error)){
                                         echo $imageName;
                                        } ?>">
                                   <!-- <input class="btn btn-success" type="submit" value="upload" name="upload_btn" >  -->
                                   </div>
                                   </div>

                                   <div class="mt-4 m-auto">
                                       <button name="register" type="submit" class="btn text-white btn-sm btn-danger col  ">
                                           Register
                                       </button>
                                   </div>
                                   </div>
                                </form>
                            </div>
                       </div>
                  </div>
                </div>
            </div>
		</div>
		
		
		
    </div>
    <script type="text/javascript" src="./Assets/js/main.js"></script>
</body>
</html>
