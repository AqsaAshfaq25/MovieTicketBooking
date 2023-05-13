<?php
session_start();
// include(".sidenav.php");
include("scripts.php");
include("Config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ticketBuckets.com</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/instyle.css">
    </head>
    <body id="body-pd">
        <!-- sidenavbar starts -->
        
        <header class="header d-flex" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            
            
            <div class="d-flex" >
                <p class="pt-2"> <?php echo $_SESSION['full_name'];?> </p>&nbsp; &nbsp; 
                <div class="header_img ms-auto mx-4"> <img class="img-fluid" src="../assets/images/uploads/<?php echo $_SESSION['picture'] ;?> "  
                style="width:40px;height:40px;border:1px solid black;border-radius:50px;"  alt="logo"> </div>    
                
               <!-- <button class="btn btn-info"styyle="margin:0;" >logout</button>    -->
             </div>
            
        
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                 <a href="#" class="nav_logo"> <img src="../assets/images/adminlogo.svg" alt="">  <span class="nav_logo-name">Admin &nbsp;Panel </span> </a>
                <div class="nav_list"> 
                    <a href="./index.php" class="nav_link active "> <i class="fa-solid fa-gauge"></i>
                        <span class="nav_name">Dashboard</span>
                     </a> 
                     <a href="../Pages/Users.php" class="nav_link "> <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name ">Users</span> </a>
                     <a href="../Pages/booking.php" class="nav_link " > <i class="fa-solid fa-ticket"></i> <span class="nav_name">bookings</span> </a> 
                     <a href="../Pages/reviews.php" class="nav_link"> <i class="fa-solid fa-star"></i><span class="nav_name">reviews</span> </a> 
                     <a href="../Pages/Movies.php" class="nav_link"> <i class="fa-solid fa-video"></i> <span class="nav_name">movies</span> </a> 
                     <a href="../Pages/Theaters.php" class="nav_link"><i class="fa-solid fa-masks-theater"></i> <span class="nav_name">theatre</span> </a>
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

    <div class="heading d-flex">
        <h1 class="mb-3">Add New Data</h1>
        <!-- goback button  -->
        <a href="Movies.php" class="btn btn-danger  ms-auto mb-3 w-22 text-center">
          <i class="fa-solid fa-arrow-left"></i> back</a>
      </div>
     
       <!-- insert movie data form -->
       <form action="insert.php" method="POST" enctype="multipart/form-data">
       <div class="row mb-4">
           <div class="col-12 col-md-6 col-xl-6 ">
               
                        <div class="form-outline">
                        <input type="text" id="form6Example1" name="movieTitle" class="form-control" />
                            <label class="form-label" for="form6Example1" >Movie title</label>
                        </div>
                    </div>
                        <!-- Text input -->
                     <div class="col-12 col-md-6 col-xl-6 ">
                        <div class="form-outline mb-4">
                            <input type="text"  class="form-control" name="genre_type"   />
                            <label class="form-label" >genre</label>
                        </div>
                    </div>
                    <!-- Text input -->
                                
                    <div class="col-12 col-md-6 col-xl-6 ">
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example4" class="form-control" name="year" />
                        <label class="form-label" for="form6Example4">year</label>
                    </div>
                    </div>
                                <!-- Email input -->
                    <div class="col-12 col-md-6 col-xl-6 ">
                        <div class="form-outline mb-4">
                                                
                        <input type="text" id="form6Example5" class="form-control" name="duration"  />
                        <label class="form-label" for="form6Example5">duration</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 ">
                        <div class="form-outline mb-4">
                                                
                        <input type="text" id="form6Example5" class="form-control" name="trailers"  />
                        <label class="form-label" for="form6Example5">movie trailers</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 ">
                        <div class="form-outline mb-4">
                                                
                        <input type="file" id="form6Example5" class="form-control" name="movie-image"  />
                        <br><label class="form-label" for="form6Example5">upload image</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 ">
                        <div class="form-outline mb-4">
                                                
                        <input type="text" id="form6Example5" class="form-control" name="description"  />
                        <label class="form-label" for="form6Example5">description</label>
                        </div>
                    </div>
                    </div>
                    
                            <!-- Submit button -->
                    <button type="submit" class="btn btn-dark btn-block mb-4 w-25" name="insert" >insert</button>

            </div>
            
      </form>

<!-- insert movie data form ends-->
<br><br><br>
<div class="heading d-flex">
        <h1 class="mb-3">Add theatre Data</h1>
        <!-- goback button  -->
        <a href="Theaters.php" class="btn btn-danger  ms-auto mb-3 w-22 text-center">
          <i class="fa-solid fa-arrow-left"></i> back</a>
      </div>

       <!-- insert theatre data form -->
       <form action="insert.php" method="POST" id="theatre" >
       <div class="row mb-4">
           <div class="col-12 col-md-6 col-xl-6 ">
               
                        <div class="form-outline">
                        <input type="text" id="form6Example1" name="theater-title" class="form-control" />
                            <label class="form-label" for="form6Example1" >theater title</label>
                        </div>
                    </div>
                        <!-- Text input -->
                     <div class="col-12 col-md-6 col-xl-6 ">
                        <div class="form-outline mb-4">
                            <input type="text"  class="form-control" name="country"   />
                            <label class="form-label" >country</label>
                        </div>
                    </div>
                    <!-- Text input -->
                                
                    
                                <!-- Email input -->
                    <div class="col-12 col-md-6 col-xl-6 ">
                        <div class="form-outline mb-4">
                                                
                        <input type="text" id="form6Example5" class="form-control" name="showdate"  />
                        <label class="form-label" for="form6Example5">show date</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 ">
                        <div class="form-outline mb-4">
                                                
                        <input type="text" id="form6Example5" class="form-control" name="showtime"  />
                        <label class="form-label" for="form6Example5">show time</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 ">
                        <div class="form-outline mb-4">
                                                
                        <input type="text" id="form6Example5" class="form-control" name="movieTitle"  />
                        <br><label class="form-label" for="form6Example5">movieTitle</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 ">
                        <div class="form-outline mb-4">
                        
                        <input type="file"  class="form-control" name="movieimage"  />
                        <br><label class="form-label" >movie image</label>
                        </div>
                    </div>
                            <div class="col-12 col-md-6 col-xl-6 ">
                                <div class="form-outline mb-4">
                                                        
                                <input type="text" id="form6Example5" class="form-control" name="description"  />
                                <br><label class="form-label" for="form6Example5">description</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-xl-6 ">
                                <div class="form-outline mb-4">                          
                                <input type="text" id="form6Example5" class="form-control" name="capacity"  />
                                <br><label class="form-label" for="form6Example5">capacity</label>
                                </div>
                            </div>
                            
                        <div class="col-12 col-md-6 col-xl-6 ">
                            <div class="form-outline mb-4">
                                                    
                            <input type="text" id="form6Example5" class="form-control" name="Location"  />
                            <label class="form-label" for="form6Example5">Location</label>
                            </div>
                        </div>
                    </div>
                    
                            <!-- Submit button -->
                    <button type="submit" class="btn btn-dark btn-block mb-4 w-25" name="th_insert" >insert</button>

            </div>
            
      </form>



    </div>
    

    