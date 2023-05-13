<?php
include('Config.php');
session_start();

if(isset($_POST['del_movie_data'])){
    $all_id=$_POST['deleteMovie'];
    $extract_id=implode(',',$all_id);
    // echo $extract_id;
    $del_query="DELETE FROM `movie` WHERE `movie_id` IN($extract_id)"; 
    $del_query_run=mysqli_query($conn,$del_query);
    if($del_query_run){
       $_SESSION['status']="your data deleted successfully";
       echo "<script>window.location.href='Movies.php'</script>";
    }
    
    else{
        $_SESSION['status']="can't delet data some error occuured";
        echo "<script>window.location.href='Movies.php'</script>";
    }
};

if(isset($_POST['del_theatre_data'])){
    $id=$_POST['delTheater'];
    $ext_id=implode(',',$id);
    // echo $extract_id;
    $del_query="DELETE FROM `theatre` WHERE `theater_id` IN($ext_id)"; 
    $del_query_run=mysqli_query($conn,$del_query);
    if($del_query_run){
       $_SESSION['status']="your data deleted successfully";
       echo "<script>window.location.href='Theaters.php'</script>";
    }
    
    else{
        $_SESSION['status']="can't delet data some error occuured";
        echo "<script>window.location.href='Theaters.php'</script>";
    }
}
?>