<?php
$title = 'THEATER | TICKET BUCKET';
include('scripts.php');
include('configg.php');

include('header.php');





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>theatre.php</title>
    <link rel="stylesheet" href="../Assets/css/movies.css">

    <link rel="stylesheet" href="../Assets/css/theatre.css">    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <!-- font link -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Averia+Serif+Libre:ital,wght@0,300;1,300;1,700&family=DM+Serif+Display:ital@1&family=Petit+Formal+Script&family=Tilt+Prism&display=swap" rel="stylesheet">
</head>
<body>
<br><br><br><br>
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
<!-- </div>    -->
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown pt-3" style="font-weight: 400;"><b>welcome to our cinema</b> </h1>
            <p class="text-white" style="font-weight: 500;">book Your Favourite Movie from your comfoortzone.</p>
            <nav aria-label="breadcrumb animated slideInDown" >
                <ol class="breadcrumb justify-content-center mb-0" style="background: none;">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">More</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page" ><a class="text-white" style="border-bottom:2px solid #d40e0e;" href="theatre.php">Theatre</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End --> 
    <br><br>

        
        <div class="user-l text-center mt-3">
        <h2 class="text-center mt-5"><b>AVAILABLE MOVIES </b><i class="fa-solid fa-projector fa-beat"></i></h2>
               
   </div>
<hr>
<form action="theatre.php" method="POST">
        <div class="row justify-content-center">
            <?php
            // $select1="SELECT release ,description, "
            $movie_data= "SELECT * from theatre";
            
            
            $data = mysqli_query($conn, $movie_data);
            
            while($movie_data= mysqli_fetch_assoc($data)){
    
                
            // $data = mysqli_query($conn,"SELECT * from theatre");
                    
            // while ($data){





            ?>
 <div class="container py-3">
  <!-- Card Start -->
  <div class="card">
      <div class="row ">
        <div class="col-md-5">
          <div id="CarouselTest" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block" src="../Assets/images/moviecard/<?php echo $movie_data['movie-pic'] ?>"style="height:100%;width:100%" alt="">
              </div>
              
    
            </div>
          </div>
        </div>
        <!-- End of carousel -->

      <div class="col-md-7 px-3">
        <div class="card-block px-6">
          <h2 class="card-title text-dark" style="font-family: 'Alkatra', cursive;"><?php echo $movie_data['movieTitle'] ?> </h2>
          <h5 class="card-text text-large text-muted" style="font-family: 'Alkatra', cursive;">
          <?php echo $movie_data['description'] ?>
          <input type="hidden" value=" <?php echo $movie_data['theater_id'] ?> " >
          <h5 class="card-text">
            <h6>Country:</h6>
             <b class="text-success"> <?php echo $movie_data['country'] ?> </b><br>
             <h6>Location:</h6>
             <large class="text-info"><?php echo $movie_data['Location'] ?></large><br>
             <h6>theatre Name:</h6>
             <b class="text-primary "><?php echo $movie_data['theater-title'] ?></b><br><br>
             <h6>Show Date:</h6>
             <small class="text-danger"><?php echo $movie_data['showdate'] ?> </small><br>
             <h6>Show Day:</h6>
             <small class="text-danger"><?php echo $movie_data['showtime'] ?> </small><br>
          <br>
          <a  href="bookingForm.php?id=<?php echo $movie_data['theater_id'] ?> "  class="text-white">
          <button type="submit" name="booknow" class="mt-auto btn btn-danger">
            Book Now
            </a>
          </button>
        </div>
      </div>
      <!-- Carousel start -->
    </div>
  </div>
  <!-- End of card -->

</div>

</form>
<?php }?>

<section>
<?php
include('footer.php');

?>
</section>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
