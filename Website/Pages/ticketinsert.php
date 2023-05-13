<?php
 if(isset($_POST['sentdata'])){
   if(!isset($_SESSION['login_user'])){
       echo "<script>alert('for booking you must have to login')</script>";
       // echo "<script>window.location.href='../UserLogin.php'</script>";
       echo "<script>window.location.href='../UserLogin.php'</script>";

   }elseif(isset($_SESSION['login_user'])){
       if(isset($_POST['sentdata'])){
           $ID=$_POST['theater_id'];
           $customerName=$_POST['Cname'];
           $customerEmail=$_POST['email'];
           $movieName=$_POST['movietitle'];
           $theaterName=$_POST['theatreTitle'];
           $showdate=$_POST['show-date'];
           $showtime=$_POST['show-time'];
           $ticketType=$_POST['ticket-type'];
           $adultData=$_POST['adultdata'];
           $childData=$_POST['childdata'];
           $status='pending';
           $insert="INSERT INTO `booking`( `customer-name`, `movieTitle`,
            `theater-name`, `showtime`, `showdate`, `adult-seats`, `child-seats`,
             `email`, `ticket-type`,`status`) VALUES 
             ('$customerName','$movieName','$theaterName','$showtime','$showdate',
           '$adultData','$childData','$customerEmail','$ticketType',`$status`)";
           $run=mysqli_query($conn,$insert);
           
           if(mysqli_query($conn,$insert)){
              echo "<script>alert('your booking is now on pending')</script>";
              echo "<script>window.location.href='index.php'</script>";
        
           }else{
              echo "booking failed due to invalid information" ;
           }   
       }
   }
}


?>