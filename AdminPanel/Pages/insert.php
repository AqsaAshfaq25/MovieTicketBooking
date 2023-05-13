<?php

include('Config.php');
session_start();
if(isset($_POST['insert'])){
    $img=$_FILES['movie-image'];
    $img_name=$_FILES['movie-image']['name'];
    $img_tempname=$_FILES['movie-image']['tmp_name'];
    $path="../assets/images/uploads/movies".$img_name;
    move_uploaded_file($img_tempname,$path);
    $movieName =$_POST['movieTitle'];
    $movieGenre =$_POST['genre_type'];
    $movieYear =$_POST['year'];
    $movieDuration =$_POST['duration'];
    $moviedescrip =$_POST['description'];
    $trailers =$_POST['trailers'];
       
   $add="  INSERT INTO `movie`(`movieTitle`, `movie_pic`, `Movie_Trailers`,
     `genre_type`, `release`, `duration`, `description`) 
    VALUES ('$movieName','$img_name','$trailers','$movieGenre','$movieYear',
    '$movieDuration','$moviedescrip')";
   $query= mysqli_query($conn,$add);
    
    if($query){
        $_SESSION['message']="data has been inserted";
        echo "<script>window.location.href='Movies.php'</script>";
    }else{
        $_SESSION['message']="data not inserted yet";
        echo "<script>window.location.href='Movies.php'</script>";
    }
}
if(isset($_POST['th_insert'] )){
    $Tmovieimage=$_FILES['movieimage'];
    $Tmovieimage=$_FILES['movieimage']['name'];
    $Tmovieimage_tempname=$_FILES['movieimage']['tmp_name'];
    $path="../assets/images/uploads/theatre".$Tmovieimage;
    move_uploaded_file($Tmovieimage_tempname,$path);
    print_r($Tmovieimage);
    $theatreName =$_POST['theater-title'];
    $country =$_POST['country'];
    $showdate =$_POST['showdate'];
    $showtime =$_POST['showtime'];
    $capacity =$_POST['capacity'];
    $location =$_POST['Location'];
    $description =$_POST['description'];
    $moviename =$_POST['movieTitle'];
    
    $insert="INSERT INTO `theatre`( `theater-title`, `country`, `capacity`, `Location`, `showdate`, 
    `showtime`, `movieTitle`, `movie-pic`, `description`) VALUES
     (' $theatreName ','$country','$capacity ','$location','$showdate',
    '$showtime','$moviename','$Tmovieimage','$description') ";
     $query= mysqli_query($conn,$insert);
    
     if($query){
         $_SESSION['message']="data has been inserted";
         echo "<script>window.location.href='Theaters.php'</script>";
     }else{
         $_SESSION['message']="data not inserted yet";
         echo "<script>window.location.href='Theaters.php'</script>";
     }
}














?>