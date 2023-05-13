<?php
session_start();
include("scripts.php");
include("Config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/instyle.css">

</head>
<!-- sidenavbar starts -->
  
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="d-flex" >
                <p class="pt-2"> <?php echo $_SESSION['full_name'];?> </p>&nbsp;&nbsp;&nbsp;     
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
                    <a href="../index.php" class="nav_link  "> <i class="fa-solid fa-gauge"></i>
                        <span class="nav_name">Dashboard</span>
                     </a> 
                     <a href="../Pages/Users.php" class="nav_link "> <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name ">Users</span> </a>
                     <a href="../Pages/booking.php" class="nav_link active " > <i class="fa-solid fa-ticket"></i> <span class="nav_name">bookings</span> </a> 
                     <a href="../Pages/reviews.php" class="nav_link"> <i class="fa-solid fa-star"></i><span class="nav_name">reviews</span> </a> 
                     <a href="../Pages/Movies.php" class="nav_link"> <i class="fa-solid fa-video"></i> <span class="nav_name">movies</span> </a> 
                     <a href="../Pages/Theaters.php" class="nav_link"><i class="fa-solid fa-masks-theater"></i> <span class="nav_name">theatre</span> </a>
                     <!-- <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name"></span> </a> -->
 
                    </div>
            </div> 
                     <!-- signout button action   -->
                     <a href="#" class="nav_link"> 
                <form action="logout.php" method="POST">
                <button class="btn btn-transparent m-0 p-0" type="submit" name="Signout">
                    <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span>
                 </a>
                </button>
                </form>
                <!-- signout button ends   -->
        </nav>
    </div>
<!-- sidenavbar ends -->


    <div class=" d-flex">
        
             <div class="user-l  mt-3">
                <a
                 href="#" class="user-head"><i class="fa-sharp fa-solid fa-film"></i> <span class="nav_name">booking list</span> </a> 
                <!-- action buttons -->

            
             </div>
                    
        </div>
<hr>

<!-- booking data  -->
<div class="page-content page-container"  id="page-content">
            <div class="padding">
              <div class="row container d-flex justify-content-center">
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card ">
                    <div class="card-body">
                      
                      <div class="table-responsive">
                        <form action="" method="post" id="user_del_form"  >
                          <table class="table table-striped table-hover align-middle text-center">
                            <thead>
                              <tr>
                                
                                <!-- <th>booking ID</th> -->
                                <th>Customer Name</th>
                                <th >email</th> 
                               <th>Movie</th>
                               <th>Theatre Name </th> 
                               <th>Ticket type </th>
                                <th>adultsSeat </th>
                               <th>childsSeats</th>
                               <th>Show time</th>
                               <th >Show Date</th>
                               <th colspan=2 >status</th>
                               
 

                        </tr>
                      </thead>
                      <tbody class="table table-dark table-striped">
                      <?php
                      
                $data = mysqli_query($conn,"SELECT * from booking WHERE `status` = 'pending'");

                while ($users_data = mysqli_fetch_array($data)){
                      
                      ?>
                      
                        <tr>
                         
                          <!-- <td><?php echo $users_data["booking_id"] ?></td> -->
                          <td><?php echo $users_data["customer-name"] ?></td>
                          <td><?php echo $users_data["movieTitle"] ?></td>
                          <td><?php echo $users_data["theater-name"] ?></td>
                          <td><?php echo $users_data["ticket-type"] ?></td>
                          <td><?php echo $users_data["seat-type"] ?></td>
                          <td><?php echo $users_data["Total-seat"] ?></td>
                          <td><?php echo $users_data["show-time"] ?></td>
                          <td><?php echo $users_data["show-date"] ?></td>
                          <form action="adminAccept.php" method="post">
                          <td>
                            <input  type="hidden" name="bookid" value=<?php echo $users_data["booking_id"] ?>>
                            <input class="btn btn-success" type="submit" name="book" value="book">
                          </td>
                          <td>
                            <input  type="hidden" name="bookid" value=<?php echo $users_data["booking_id"] ?>>
                            <input class="btn btn-info" type="submit" name="cancel" value="cancel" >
 
                          </form>                          

                          </td>

                         
                         </tr>
                        <?php  } ?>      
                      </tbody>
                    </form>
                    </table> 
      
  <!-- user data cards end -->
  <?php
  // if(isset($_POST['book'])){
  //   $id=$_POST['bokid'];
  //   $select="SELECT * FROM "
  // }
  
  
  
  
  
  
  ?>    

</div>
</div>
</div>
</div>
</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>