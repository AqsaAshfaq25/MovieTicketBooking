<?php
include("configg.php");
include("scripts.php");
session_start();
ob_start();
// $user_check=$_SESSION['login_user'];

// $query=mysqli_query($conn,"SELECT full_name FROM registration WHERE full_name='$user_check' ");
// $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
// $login_session=$row['full_name'];
// if(!isset($login_session))
// {
//  header("Location: ../UserLogin.php");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
    <link rel="stylesheet" href="../Assets/css/mode.css">
    <link rel="stylesheet" href="../Assets/css/header.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>  </title>
</head>
<body>
<!-- Navigation -->
<div class="fixed-top">
  <header class="topbar">
      <div class="container">
        <div class="row"> 
          <!-- social icon-->
          <div class="col-sm-12">
            <ul class="social-network">
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
  </header>
  <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear mb-5">
    <div class="container">
      <a class="navbar-brand" rel="nofollow" target="_blank"  href="#" style="text-transform: uppercase;">
      <img src="../Assets/images/mylogo (2).png" alt="" width="150%" height="60px" class="img-responsive d-block align-text-top">
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="../Pages/index.php">HOME
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link active" href="../Pages/movies.php">MOVIES</a>
          </li>

         <li class="nav-item">
            <a class="nav-link active" href="../Pages/theatre.php">THEATER</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="../Pages/ContactUs.php">CONTACT</a>
          </li>

          <li class="nav-item dropdown ">
            <a class="nav-link active dropdown-togler" href="../Pages/contact.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ACCOUNT
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item Ditem" href="../UserLogin.php"><i class="fa-sharp fa-solid fa-right-to-bracket" style="color: #9b0303;"></i>&nbsp; Log In</a>
                <a class="dropdown-item Ditem" href="../UserRegister.php"><i class="fa-solid fa-user-plus" style="color: #9e1405;"></i>&nbsp; Register</a>
            </div>
          </li>

          

          
         </ul>&nbsp;&nbsp;&nbsp;
        <div class="justify-content-center align-items-center pt-2">
            <div class="one-quarter" id="switch">
              <input type="checkbox" class="checkbox" id="chk" />
              <label class="label Modelab" for="chk">
                 <i class="fas fa-sun"></i>
                  <i class="fas fa-moon"></i>
                  <div class="ball"></div>
              </label>
            </div>
        </div>
      </div>
       
     
    </div>
    <?php
      if(isset($_SESSION['picture'])){
               
    ?>
    <li class="nav-item dropdown d-flex">
      <a class="nav-link active dropdown-togler" href="../Pages/contact.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
        <div class="header_img ms-auto mx-4"> 
          <img class="img-fluid" src="../Assets/images/useruploads<?php echo $_SESSION['picture'] ?>"  
          style="width:40px;height:40px;border:1px solid black;border-radius:50px;"  alt=""> </div>    
          <?php } ?>
      </a>
      <div class="dropdown-menu">
          <?php
           if(isset($_SESSION['login_user'], $_SESSION['email'])){
            
           ?>
          <a class="dropdown-item disabled" href="../UserLogin.php"><?php echo $_SESSION['login_user'] ;?><br>
          <small style="font-size: 8.4px;"><?php echo $_SESSION['email'] ;?></small>
          </a>
          <?php } ?>
          <form action="logout.php" method="POST">
          <a class="dropdown-item" href="#">
          <button class="btn btn-transparent text- m-0 p-0" style="font-size: 14px;" type="submit" name="logout">
            Sign Out
          </button>
          </a>
          </form>
          
      </div>
    </li>
  </nav>
</div>
<script src="../Assets/js/mode.js"></script>
</body>
</html> 