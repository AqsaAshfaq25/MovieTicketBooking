<?php
$title = 'BOOKING FORM | TICKET BUCKETS';
include('header.php');
include('configg.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/css/form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    <br><br><br><br><br><br>
    <br><br><br><br>
    <section class="mt-5px"><br>
    <?php
    
   
    
    ?>
<div id="booking" class="section mt-5px">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <form action="ticketinsert.php" method="POST">
                        <?php
                        if(isset($_GET['id'] )){
                            $THId=$_GET['id'];
                            $showquery="SELECT * FROM `theatre` WHERE `theater_id`= $THId" ;
                            
                            $showdata=mysqli_query($conn,$showquery);
                            $arr=mysqli_fetch_array($showdata);
                            
                            if($arr){
                            //  print_r($arr);
                        ?>
                    <div class="form-header">
                        <h1>book your seats</h1>
                    </div>
                         <input type="hidden" value="<?php echo $arr['theater_id'] ?> ">
                        <div class="form-group">
                            <input class="form-control" type="text" name="Cname" placeholder="customer name">
                            <span class="form-label">Destination</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="customer Email">
                                    <span class="form-label" name="email" >Email</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="movietitle" value="<?php echo $arr['movieTitle'] ?>">
                                <span class="form-label">Destination</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="theatreTitle"  value="<?php echo $arr['theater-title'] ?>">
                                <span class="form-label">Destination</span>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date" name="show-date" value="<?php echo $arr['showdate'] ?>" required>
                                    <span class="form-label">show date</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <input class="form-control" type="time" name="show-time" placeholder="show time" value="<?php echo $arr['showtime'] ?>" required>
                                    <span class="form-label">show time</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="ticket-type" required>
                                        <option value="" selected hidden>ticket type</option>
                                        <option>silver</option>
                                        <option>gold</option>
                                        <option>platinum</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">ticket type</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <input class="form-control" type="number" name="adultdata" placeholder="no of adults" required>
                                    <span class="form-label">no of adults</span>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <input class="form-control" type="number" name="childdata" placeholder="no of child" required>
                                    <span class="form-label">no of child</span>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Children</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-btn">
                            <button class="submit-btn" type="submit" name="sentdata">CONFIRM BOOKING</button>
                        </div>
                        </form>                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php
        }             
                               
          }
          else{
              echo "<script>alert(no recored found)</script>";
            }
        
        ?>
</section>
<section>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="	https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>