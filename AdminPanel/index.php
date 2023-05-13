<?php
session_start();
include("./Pages/scripts.php");
include("./Pages/Config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ticketBuckets.com</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/instyle.css">
    </head>
    <body id="body-pd">
        <!-- sidenavbar starts -->
        
        <header class="header d-flex" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            
            
            <div class="d-flex" >
                <p class="pt-2"> <?php echo $_SESSION['full_name'];?> </p>&nbsp; &nbsp; 
                <div class="header_img ms-auto mx-4"> <img class="img-fluid" src="./assets/images/uploads/<?php echo $_SESSION['picture'] ;?> "  
                style="width:40px;height:40px;border:1px solid black;border-radius:50px;"  alt="logo"> </div>    
                
               <!-- <button class="btn btn-info"styyle="margin:0;" >logout</button>    -->
             </div>
            
        
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                 <a href="#" class="nav_logo"> <img src="./assets/images/adminlogo.svg" alt="">  <span class="nav_logo-name">Admin &nbsp;Panel </span> </a>
                <div class="nav_list"> 
                    <a href="./index.php" class="nav_link active "> <i class="fa-solid fa-gauge"></i>
                        <span class="nav_name">Dashboard</span>
                     </a> 
                     <a href="./Pages/Users.php" class="nav_link "> <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name ">Users</span> </a>
                     <a href="./Pages/booking.php" class="nav_link " > <i class="fa-solid fa-ticket"></i> <span class="nav_name">bookings</span> </a> 
                     <a href="./Pages/reviews.php" class="nav_link"> <i class="fa-solid fa-star"></i><span class="nav_name">reviews</span> </a> 
                     <a href="./Pages/Movies.php" class="nav_link"> <i class="fa-solid fa-video"></i> <span class="nav_name">movies</span> </a> 
                     <a href="./Pages/Theaters.php" class="nav_link"><i class="fa-solid fa-masks-theater"></i> <span class="nav_name">theatre</span> </a>
                     <!-- <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name"></span> </a> -->
 
                    </div>
            </div>
            
            <!-- signout button action   -->
                <a href="#" class="nav_link"> 
                <form action="./Pages/logout.php" method="POST">
                <button class="btn btn-transparent m-0 p-0" type="submit" name="Signout">
                    <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span>
                 </a>
                </button>
                </form>
                <!-- signout button ends   -->
        </nav>
    </div>
<!-- sidenavbar ends -->
    <!--Container Main start-->
    <div class="height-100 bg-light main-container">
     
 <div class="container">
   <div class="col-md-10 ">
    <div class="row ">
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">total bookings </h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                            <?php
                                  $dash_bookings="SELECT * FROM booking";
                                  $dash_bookings_query=mysqli_query($conn,$dash_bookings);
                                  if($toatal_bookings=mysqli_num_rows($dash_bookings_query)){
                                    echo $toatal_bookings;
                                  }
                                
                                ?>
                            </h2>
                        </div>
                        <!-- <div class="col-4 text-right">
                            <span>12.5% <i class="fa fa-arrow-up"></i></span>
                        </div> -->
                    </div>
                    <!-- <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">users registered</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                            <?php
                                  $dash_users="SELECT * FROM registration";
                                  $dash_users_query=mysqli_query($conn,$dash_users);
                                  if($toatal_users=mysqli_num_rows($dash_users_query)){
                                    echo $toatal_users;
                                  }
                                
                                ?>
                            </h2>
                        </div>
                        <!-- <div class="col-4 text-right">
                            <span>9.23% <i class="fa fa-arrow-up"></i></span>
                        </div> -->
                    </div>
                    <!-- <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 colxl">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fa-sharp fa-solid fa-film fas"></i> </div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">movie collection</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <?php
                                  $dash_movie="SELECT * FROM movie";
                                  $dash_movie_query=mysqli_query($conn,$dash_movie);
                                  if($toatal_movies=mysqli_num_rows($dash_movie_query)){
                                    echo $toatal_movies;
                                  }
                                
                                ?>
                            </h2>
                        </div>
                        <!-- <div class="col-4 text-right">
                            <span>10% <i class="fa fa-arrow-up"></i></span>
                        </div> -->
                    </div>
                    <!-- <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Revenue Today</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $11.61k
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>2.5% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <!-- <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
      
</div>   
      
      
      
      
      
      
      </div>
    <!--Container Main end-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./assets/js/index2.js"></script>
</body>
</html>