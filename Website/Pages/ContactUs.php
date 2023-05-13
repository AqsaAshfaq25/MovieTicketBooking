<?php
$title = 'CONTACT US | TICKET BUCKET';
include('scripts.php');
include('configg.php');

include('header.php');
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../Assets/css/contact.css">

    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../Assets/css/animate.css">

	<link rel="stylesheet" href="../Assets/css/map.css">

	</head>
	<body>
        <br><br><br>
	<section class="ftco-section">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact Form #03</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row mb-">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Address:</span> SD-1, Block A North Nazimabad Town, Karachi, 74700</p>
				             </div>
			              </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Email:</span> <a href="mailto:info@yoursite.com">ticketsbucket135@gmail.com</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-globe"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Website</span> <a href="#">TicketBucket.com</a></p>
				          </div>
			          </div>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4"><b>Contact Us</b> </h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		        <div id="form-message-success" class="mb-4">
				                   Your message was sent, thank you!
				      		       </div>
							       <p style="color:red;font-size:small;" class="text-bold"  >
                                    <?php           
                                         if(isset($error)){
                                            echo $error;
                                         }           
                                    
                                    ?>
                                    </p>
									<form method="POST" action="sendmail.php" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php if(isset($error)){
                                                     echo $name ;
                                                     } ?>">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php if(isset($error)){
                                                      echo $email ;
                                                     } ?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="<?php if(isset($error)){
                                                       echo $subject ;
                                                    } ?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" value="<?php if(isset($error)){
                                                      echo $message ;
                                                     } ?>"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<button type="submit" name="sendmail"  class="btn btn-primary">Send Message</button>
													<!-- <div class="submitting"></div> -->
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(../Assets/images/icon/movie-tickets-online_118813-8545.avif);">
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- MAP -->
    <!-- <div class="container_fluid">
	  <div class="container display-">
	  <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" 
      marginwidth="0" id="gmap_canvas" 
      src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=%20Karachi+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
     <a href='https://maps-generator.com/'>Maps Generator</a>
	  </div>
	</div> -->
<!-- MAP -->

	<!-- /////////////////////// MAP (START)//////////////////// -->
<div class="container-fluid">
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; margin-top: 50px;" >
  <p class="text- text-uppercase mb-2" style="color: #d32f2f;">// Our Location</p>
  <h1 class="display-6 mb-4" style="font-weight: 600;"><b>OUR BRANCHES</b> </h1>
</div>
<div class="container" style="margin-top: 50px; box-shadow: 1px 1px 20px; padding: 0px;">
  <div class="container2">
    <div class="row">
      <div class="col-sm-12">
        <div class="container">
          <input type="checkbox" class="input1" id="input1" name="inputs">
          <input type="checkbox" class="input1" id="input2" name="inputs">
          <input type="checkbox" class="input1" id="input3" name="inputs">
          <label for="input1">
            <div id="b1" class="button2">A</div>
          </label>
          <label for="input2">
            <div id="b2" class="button2">B</div>
          </label>
          <label for="input3">
            <div id="b3" class="button2">C</div>
          </label>
          <div id="content1" class="content1">
            <div style="text-align: right;">
              <label for="input1" class="cross">X</label>
            </div>
            <h1>First Branch</h1>
            <p class="bodyCopy">A
            <br>  Ticket Buckets
            <br>  V24J+C48, Atrium Mall, 
              <br> · In Atrium Cinemas 
              <br> · (021) 111 366 887
              Closed 
              <br> ⋅ Opens 10AM - 1AM</p>
            <a href="https://www.google.com/maps/d/viewer?ie=UTF8&t=h&oe=UTF8&msa=0&mid=1usRkJzwkZLUjSCJV6O5NcyS4vco&ll=28.538198418541256%2C64.51022299999998&z=6" target="new"  class="cta2">Show Location</a>
          </div>
          <div id="content2" class="content1">
            <div style="text-align: right;">
              <label for="input2" class="cross">X</label>
            </div>
            <h1>Second Branch</h1>
            <p class="bodyCopy">B
             <br>Ticket Buckets
             <br> RXWR+3CV, Port Grand Avenue
             <br> Closing Time: 2AM
             <br> Open 12AM - 3AM</p>
            <a href="https://www.google.com/maps/d/viewer?ie=UTF8&t=h&oe=UTF8&msa=0&mid=1usRkJzwkZLUjSCJV6O5NcyS4vco&ll=28.538198418541256%2C64.51022299999998&z=6" target="new" class="cta2">Show Location</a>
          </div>
          <div id="content3" class="content1">
            <div style="text-align: right;">
              <label for="input3" class="cross">X</label>
            </div>
            <h1>Third Branch</h1>
            <p class="bodyCopy">C
             <br>Ticket Buckets
             <br> R2FP+G95, ocean mall <br> · In The Ocean Mall <br> · (021) 111 366 887
             <br> Closed ⋅ Opens 9AM
             <br>
              </p>
            <a href="https://www.google.com/maps/d/viewer?ie=UTF8&t=h&oe=UTF8&msa=0&mid=1usRkJzwkZLUjSCJV6O5NcyS4vco&ll=28.538198418541256%2C64.51022299999998&z=6" target="new"  class="cta2">Show Location</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div><br><br><br><br>
<br> 


<!-- /////////////////////// MAP (END)//////////////////// -->

	<script src="../Assets/js/jquery.min.js"></script>
  <script src="../Assets/js/popper.js"></script>
  <script src="../Assets/js/bootstrap.min.js"></script>
  <script src="../Assets/js/jquery.validate.min.js"></script>
  <script src="../Assets/js/contact.js"></script>

  <?php
  include('footer.php');
  ?>

	</body>
</html>

