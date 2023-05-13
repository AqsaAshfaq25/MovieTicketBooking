<?php
include("scripts.php");
include("Config.php");
if(isset($_POST["register"])){
    $name= $_FILES['picture']; 
    $imageName=$_FILES['picture']['name'];
    $tempName=$_FILES['picture']['tmp_name'];
    $destination="../assets/images/uploads/".$imageName;
    move_uploaded_file($tempName,$destination);
    $adminName=mysqli_real_escape_string($conn,$_POST['Aname']);
    $adminEmail=mysqli_real_escape_string($conn,$_POST['Aemail']);
    $adminPassword=mysqli_real_escape_string($conn,$_POST['Apassword']);
    $confirmPassword=mysqli_real_escape_string($conn,$_POST['confirmPass']);
    $role=mysqli_real_escape_string($conn,$_POST['Role']);
    if(empty($adminName)){
        $error="* Name field is required";
    }
    elseif(empty($adminEmail)){
        $error="* Email field is required";
    }
    elseif(empty($adminPassword)){
        $error= "* password  is required";
    }elseif($adminPassword != $confirmPassword){
        $error="*  password  does not match";
    }elseif(strlen($adminName) < 5 || strlen($adminName) > 30){
        $error="name must be between 5 to 30 charachters ";
    }elseif(strlen($adminPassword ) < 6 || strlen($adminPassword ) > 18){
        $error="your password must be atleast 6  to 18 charachters ";
    }else{
        
        $insert = "INSERT INTO registration (`full_name`, `email`, `Apassword`, `picture`, `Urole`) 
        VALUES ( '$adminName' , '$adminEmail','$adminPassword','$imageName','$role')";
        $loginquery= mysqli_query($conn, $insert);
        if($loginquery){

            echo "<script>alert('you have successfully signin ')</script>";
            // echo "<script>alert('please login your account')</script>";
           
            echo "<script>window.location.href = '../adminlogin.php';</script>"; 
        }else{

            echo "<script>window.location.href = 'adminregister.php';</script>"; 
            echo "singup failed !";
        }
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
    <link rel="stylesheet" href="../assets/css/instyle.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"> -->

</head>
<body>
<div class="container admin-container">
        <div class="row">
    <div class="col-12 col-md-12 col-lg-6 col-xl-6 m-auto " >
   <div class="login-card-light p-3 shadow-lg rounded">
            <div class="pt-3 bg-dark">
                <h2 class="text-danger text-center">Admin | Sign UP </h2>
            </div>
            
     

            <p style="color:red;" class="text-bold" >
            <?php           
                 if(isset($error)){
                    echo $error;
                 }           
            
            ?>
            </p>
            
            <form class="mt-5 my-login-form" action="adminregister.php" method="post" enctype="multipart/form-data">
           
                <div class="form-group mt-2">
                    <label for=""  class="form-label"> Name:</label>        
                    <input type="text" 
                         class="form-control form-control-sm" 
                     name="Aname" placeholder="enter your full name" value="<?php if(isset($error)){
                      echo $adminName;
                     } ?>">
                </div>

                <div class="form-group mt-3">
                <label for=""  class="form-label">Email:</label>    
                <input type="email" 
                         class="form-control form-control-sm" 
                     name="Aemail"    placeholder="Email Id"  value="<?php if(isset($error)){
                      echo $adminEmail ;
                     } ?>">
                 </div>

                <div class="form-group mt-3">
                <label for=""  class="form-label">Password:</label>    
                <input type="password" 
                        class="form-control form-control-sm" 
                      name="Apassword"   placeholder="Password"
                      value="<?php if(isset($error)){
                      echo $adminPassword ;
                     } ?>">
                      
                </div>
                <div class="form-group mt-3">
                <label for=""  class="form-label">Confirm Password:</label>    
                <input type="password" 
                        class="form-control form-control-sm" 
                      name="confirmPass"   placeholder="Password"  value="<?php if(isset($error)){
                      echo $confirmPassword;
                     } ?>">
                      
                </div>
                <div class="form-group mt-3">
                    <label for=""  class="form-label">role:</label>
                <select class="form-select" name="Role"   aria-label="Default select example">
                    <option value="null" selected></option>
                    <option  value="admin">Admin</option>
                </select>
                </div>
                <div class="form-group mt-3 d-flex">
                <label for=""  class="form-label">profile:</label>
                <input class="form-control " name="picture" type="file" >
                <!-- <input class="btn btn-success" type="submit" value="upload" name="upload_btn" >  -->
                </div>
                

                <!-- <div class="form-group form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="rememberCheckBox">
                    <label class="form-check-label text-dark"  for="rememberCheckBox">Remember me?</label>
                </div> -->

                <div class="mt-5 m-auto">
                    <a href="adminlogin.php?value=<?php echo $role="admin"?>"> <button name="register" type="submit" class="btn btn-sm btn-danger col  ">
                        Login
                    </button></a>
  
  
                </div>

                <!-- <div class="text-center mt-2 f-password">
                    <a href="#">Forgot Password?</a>
                </div> -->
                
                <!-- <div class="mt-5">
                    <p class="text-center f-password">
                        Don't have an account?
                        <a href="./Pages/adminregister.php" name="register">Click here to register</a>
                    </p>
                </div> -->
            </form>
        </div>
        </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>