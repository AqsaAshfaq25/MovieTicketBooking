<?php
$title = 'MOVIE | TICKET BUCKET';
include('configg.php');
include('scripts.php');
include('header.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- header link -->
  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
  <!-- header link end -->
  <title></title>
  <link rel="stylesheet" href="../Assets/css/movies.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
</head>

<body>
  <br><br><br><br>
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
<!-- </div>    -->
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown pt-3" style="font-weight: 400;"><b>Movies</b> </h1>
            <p class="text-white" style="font-weight: 500;">Watch Your Favourite Movie Trailers And Booked Your Ticket Anytime, Anywhere.</p>
            <nav aria-label="breadcrumb animated slideInDown" >
                <ol class="breadcrumb justify-content-center mb-0" style="background: none;">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">More</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page" ><a class="text-white" style="border-bottom:2px solid #d40e0e;" href="movies.php">Movies</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<div class="container-fluid moviecont">
  <div class="container">
    <form action="" method="post">
    <h2 class="text-center mb-4"><b>MOVIES COLLECTION</b></h2>
    <div class="row justify-content-center">
    
      <?php
        
        
        $movie_data= "SELECT * from movie";
        $data = mysqli_query($conn, $movie_data);
        
        while($movie_data= mysqli_fetch_assoc($data)){

          $trailers = $movie_data['Movie_Trailers'];
           $show = str_replace('watch?v=', 'embed/', $trailers);
                        
      ?>
      <div class="col-md-4 col-md-4">
        <div class="card movie_card">
          <img src="../Assets/images/moviecard/<?php echo $movie_data['movie_pic']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
          <a href="movies.php?id=<?php echo $movie_data['movie_id'] ?>" name="trailers"  data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $movie_data['movie_id'] ?>">
          <i class="fas fa-play play_button " data-toggle="tooltip" data-placement="bottom" title="Play Trailer">
          </i></a>
          <!-- MODAL -->
        
           <div class="modal fade" id="exampleModal<?php echo $movie_data['movie_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><?php echo $movie_data['movieTitle']; ?></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <iframe width="100%" height="400" src="<?php echo $show ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
         
              <!-- MODALEND -->
            <h5 class="card-title text-dark"><?php echo $movie_data['movieTitle']; ?></h5>
            <span class="movie_info"><?php echo $movie_data['genre_type']; ?> /</span>  
            <span class="movie_info"><?php echo $movie_data['release']; ?></span>
            <span class="movie_info float-right"><i class="fas fa-star fa-beat" style="color: #fad905;"></i> 9 / 10</span>
            
        </div>
      </div>
    
    </div>
    <!-- </form> -->
    <?php } ?>
    <div class="row justify-content-center">
    
  <?php
     
     
     $movie= "SELECT * from popularmovies";
     $data = mysqli_query($conn, $movie);
     
     while($movie= mysqli_fetch_assoc($data)){

       $trailers = $movie['MovieTrailers'];
        $Watch = str_replace('watch?v=', 'embed/', $trailers);
                     
  ?>
  <div class="col-md-4 col-md-4">
    <div class="card movie_card">
      <img src="../Assets/images/moviecard/<?php echo $movie['MoviePic']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="movies.php?id=<?php echo $movie['MovieId'] ?>" name="trailers"  data-bs-toggle="modal" data-bs-target="#popular<?php echo $movie['MovieId'] ?>">
      <i class="fas fa-play play_button " data-toggle="tooltip" data-placement="bottom" title="Play Trailer">
      </i></a>
      <!-- MODAL -->
    
       <div class="modal fade" id="popular<?php echo $movie['MovieId'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><?php echo $movie['MovieName']; ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <iframe width="100%" height="400" src="<?php echo $Watch ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      
           <!-- MODALEND -->
         <h5 class="card-title text-dark"><?php echo $movie['MovieName']; ?></h5>
         <span class="movie_info"><?php echo $movie['MovieGenre']; ?> /</span>  
         <span class="movie_info"><?php echo $movie['Release']; ?></span>
         <span class="movie_info float-right"><i class="fas fa-star fa-beat" style="color: #fad905;"></i> 9 / 10</span>
         
    </div>
  </div>
 </div>
 </form>
 <?php } ?>
</div> 

</div>    


</div>
</div><br><br><br><br>

<?php
include("footer.php");
?>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
<!-- <script src="../Assets/js/popup.js"></script> -->

<!-- <script>
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<!-- <script src="../Assets/js/mode.js"></script> -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button> -->

<!-- Modal -->
<!-- <script src="https://kit.fontawesome.com/a81368914c.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>
</html>
