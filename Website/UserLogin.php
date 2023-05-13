
<?php
$title = 'LOGIN FORM | TICKETS BUCKET';

session_start();
ob_start();
include("./Pages/configg.php");
include("./Pages/scripts.php");

if(isset($_POST['userlogin'])){
if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$UserEmail = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($UserEmail)) {
		header("Location: UserLogin.php?error=*Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: UserLogin.php?error=*Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM registration WHERE email='$UserEmail' and Apassword='$pass'" ;

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $UserEmail && $row['Apassword'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['login_user'] = $row['full_name'];
            	// $_SESSION['id'] = $row['id'];
				$_SESSION['picture'] = $row['picture'];
				echo "<script>window.location.href='./Pages/index.php';</script>";
		        exit();
            }else{
				header("Location: UserLogin.php?error=Incorect User email or password");
		        exit();
			}
		}else{
			header("Location: UserLogin.php?error=Incorect User email or password");
	        exit();
		}
	}
	
}else{
	echo "<script>window.location.href='UserLogin.php';</script>";

	exit();
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./Assets/css/style.css">
	<link rel="icon" type="images/x-icon" href="./Assets/images/icon/logo (3).png" />
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
					  <img src="./Assets/images/logo1 (2).jpeg" class="" alt="" style="justify-content:middle;" width="70%" height="100px">
                         <h2 class="card-title text-center">SIGN IN</h2>
						   <p class="bg-success text-white text-center px-1 py-1" style="font-size: 13px;">
								<?php 
								  if(isset($_SESSION['message'])){
									echo $_SESSION['message']; 
								  }else{
									echo $_SESSION['message'] = "You Already Logged Out..Please Login Again.";
								  }
								   
								?>
							</p>
                       <div class="card-body align-center ">
					     <div style="font-size:16px; color:#cc0000;">
						   <?php if (isset($_GET['error'])) { ?>
     		                <p class="error"><?php echo $_GET['error']; ?></p>
     	                        <?php } ?>					   
						  </div>
						  
						    <div class="login-content ">
		    	               <form action="UserLogin.php" method="post" autocomplete="off">
		    	                     <!-- <h2 class="title mb-4">SIGN IN</h2> -->
               	                    <div class="input-div one">
               	                       <div class="i">
										  <i class="fa-solid fa-envelope fa-beat"></i>               	                       
										</div>
               	                       <div class="div">
               	                       		<h5>Email Address</h5>
               	                       		<input type="email" class="input" name="email" >
               	                       </div>
               	                    </div>
               	                    <div class="input-div pass">
               	                       <div class="i"> 
										  <i class="fa-solid fa-lock fa-shake"></i>               	                       
										</div>
               	                       <div class="div">
               	                        	<h5>Password</h5>
               	                        	<input type="password" class="input" name="password" >
                                       </div>
                                    </div>
									<a href="./Pages/forgotpass.php" class="fpass">Forgot Password?</a>
                                    <button class="btn btn-primary text-white ms-5 mt-2" type="submit" name="userlogin">LOGIN</button>
								    <p class="text-center mt-2">
                                          Don't have an account?
                                          <a href="./UserRegister.php" name="register">Click here to register</a>
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

    <script type="text/javascript" src="./Assets/js/main.js"></script>
</body>
</html>
