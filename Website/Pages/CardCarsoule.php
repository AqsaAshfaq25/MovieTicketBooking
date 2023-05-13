<?php
include('configg.php');
// include('scripts.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/CardCarousel.css">
    <title></title>
</head>
<body>

    <!-- <div class="container-fluid"> -->
       
<div class="container cardcont">
  <div class="hs__wrapper">
    <div class="hs__header">
      <h2 class="hs__headline">TOP RATED &nbsp;<i class="fa-sharp fa-solid fa-star fa-beat" style="color: #ffb81f;"></i>
      </h2>
      <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
    </div>
    <ul class="hs">
      <?php
        $movie_data= "SELECT * from movie";
        $data = mysqli_query($conn, $movie_data);
        
        while($movie_data= mysqli_fetch_assoc($data)){
      ?>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper">
          <img class="hs__item__image" src="../Assets/images/moviecard/<?php echo $movie_data['movie_pic']; ?>" alt=""/>
        </div>
        <div class="hs__item__description"><span class="hs__item__title"><?php echo $movie_data['movieTitle']; ?>
        </span><span class="hs__item__subtitle"><?php echo $movie_data['genre_type']; ?></span>
        <i class="fa-sharp fa-solid fa-star fa-2xs" style="color: #fad905;"></i>
        <i class="fa-sharp fa-solid fa-star fa-2xs" style="color: #fad905;"></i>
        <i class="fa-sharp fa-solid fa-star fa-2xs" style="color: #fad905;"></i>
        <i class="fa-sharp fa-solid fa-star fa-2xs" style="color: #fad905;"></i>
        <i class="fa-sharp fa-solid fa-star-half-stroke fa-2xs" style="color: #fad905;"></i>&nbsp;
        <small style="color: #aaa;">4.5</small>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
  <div class="hs__wrapper">
    <div class="hs__header">
      <h2 class="hs__headline">POPULAR &nbsp;<i class="fa-solid fa-fire-flame-curved fa-beat" style="color: #ff7a05;"></i>
      </h2>
      <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
    </div>
    <ul class="hs">
      <?php
        $movie_data= "SELECT * from popularmovies";
        $data = mysqli_query($conn, $movie_data);
        
        while($movie_data= mysqli_fetch_assoc($data)){
      ?>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper">
          <img class="hs__item__image" src="../Assets/images/moviecard/<?php echo $movie_data['MoviePic']; ?>" alt=""/>
        </div>
        <div class="hs__item__description"><span class="hs__item__title"><?php echo $movie_data['MovieName']; ?>&nbsp; <i class="fa-solid fa-fire-flame-curved" style="color: #ffac06;"></i>
        </span><span class="hs__item__subtitle"><?php echo $movie_data['MovieGenre']; ?></span>
        <small style="color: #fab031;"><?php echo $movie_data['Release']; ?>&nbsp;\ </small>
        <small style="color: #fab031;"><?php echo $movie_data['Duration']; ?></small>  
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
  
</div>
<!-- </div> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
    <script src="../Assets/js/CardCarsoule.js"></script>
</body>
</html>