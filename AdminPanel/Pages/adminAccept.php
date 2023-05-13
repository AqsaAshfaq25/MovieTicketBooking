<?php
if(isset($_POST['book'])){
    $_id=$_POST['bookid'];
    $select="UPDATE booking SET `status`= 'confirmed' WHERE booking_id=$_id  ";
    $run=mysqli_query($conn,$select);
    if($run){
        echo "<script>alert(user booking confirmed)</script>";
        echo "<script>window.location.href='booking.php'</script>";
    }else{
        echo "<script>alert(user booking not confirmed)</script>";
    }
}
if(isset($_POST['cancel'])){
    $_id=$_POST['bookid'];
    $select="DELETE FROM booking  WHERE booking_id=$_id  ";
    $run=mysqli_query($conn,$select);
    if($run){
        echo "<script>alert(user booking canceled)</script>";
        echo "<script>window.location.href='booking.php'</script>";
    }else{
        echo "<script>alert(user booking  not cancelled yet)</script>";
    }
}




?>