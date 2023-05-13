<?php
  include('Config.php');
  session_start();
  if(isset($_POST['update'])){
    $id=$_POST['movie-id'];
    $movieName =$_POST['movieTitle'];
    $movieGenre =$_POST['genre_type'];
    $movieYear =$_POST['year'];
    $movieDuration =$_POST['duration'];
    $update="UPDATE `movie` SET `movieTitle`='$movieName ',
    `genre_type`='$movieGenre ',
    `release`='$movieYear',`duration`='$movieDuration' WHERE  movie_id=$id ";
    mysqli_query($conn,$update);
    
    if(mysqli_query($conn,$update)){
        $_SESSION['message']="data has been updated";
        echo "<script>window.location.href='Movies.php'</script>";
    }else{
    $_SESSION['message']="data not updated yet";
        echo "<script>window.location.href='Movies.php'</script>";
    }
  }  

  if(isset($_POST['th_update'])){
    $id=$_POST['theater_id'];
    $theatreName =$_POST['theater-title'];
    $movieName =$_POST['movieTitle'];
    $country =$_POST['country'];
    $showtime=$_POST['showtime'];
    $showdate=$_POST['showdate'];
    $capacity =$_POST['capacity'];
    $location =$_POST['Location'];

    $update="UPDATE `theatre` SET `theater-title`='$theatreName ',`country`='$country ',`capacity`='$capacity ',`Location`='    $location',
    `showdate`='$showdate',
    `showtime`='$showtime',`movieTitle`='$movieName' WHERE theater_id=$id";
    mysqli_query($conn,$update);
    
    if(mysqli_query($conn,$update)){
        $_SESSION['message']="data has been updated";
        echo "<script>window.location.href='Theaters.php'</script>";
    }else{
    $_SESSION['message']="data not updated yet";
        echo "<script>window.location.href='Theaters.php'</script>";
    }
  }
    ?>