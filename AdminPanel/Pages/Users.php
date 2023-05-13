<?php
session_start();
include("scripts.php");
include("Config.php");
$page_per_record=03;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}else{
    $page=1;
}
// $page=1;
$start_from=($page - 1) * $page_per_record;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/movie.css">
    <link rel="stylesheet" href="../assets/css/instyle.css">

</head>
  
<body id="body-pd" >
  <!-- sidenavbar starts -->
      
    <header class="header " id="header">
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
                     <a href="../Pages/Users.php" class="nav_link active"> <i class='bx bx-user nav_icon'></i> 
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
     
<div class="height-100 bg-light main-container ">
<div class="user-l d-flex " >
<a href="#" class="user-head"> <i class="fa-solid fa-users"></i> <span class="nav_name">Users Detail</span> </a>     
</div>
  <hr>


  
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
                                
                                
                                <th>ID</th>
                                <th>Name</th>
                               <th>Email</th>
                               <th>Role</th>
                               <th>User_Pic</th> 
                                <th colspan=2 >status</th>

                        </tr>
                      </thead>
                      <tbody class="table table-dark table-striped">
                      <?php
                      
                $data = mysqli_query($conn,"SELECT * from registration");

                while ($users_data = mysqli_fetch_array($data)){
                      
                      ?>
                      
                        <tr>
                         
                          
                          <td><?php echo $users_data["register_id"] ?></td>
                          <td><?php echo $users_data["full_name"] ?></td>
                          <td><?php echo $users_data["email"] ?></td>
                          <td><?php echo $users_data["Urole"] ?></td>
                          <td class="py-1" ><img width="66px" height="66px" style="border-radius: 50px;" src="../assets/images/uploads/<?php echo $users_data["picture"] ?>" alt=""></td> 
                           <td>
                            <a href="" class="btn btn-info bg-info" ><?Php echo $users_data["status"] ?></a>
                           </td>
                           <!-- <td>
                            <a href="" class="btn btn-success">accept</a>
                           </td>  -->
                         
                         </tr>
                        <?php  } ?>      
                      </tbody>
                    </form>
                    </table> 
      
  <!-- user data cards end -->
      

</div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>






<!-- pagination js  -->

  <!-- pagination js ends -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="../assets/js/index.js"></script>
</body>
</html>

