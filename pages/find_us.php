<body>
	<div class="big-div">
		<!-- Top Bar -->
		<?php require_once(__ROOT__ . "/includes/top_bar.php"); ?>
		<!-- End Top Bar -->

		<!-- Navigation -->
		<?php require_once(__ROOT__ . "/includes/nav_bar.php"); ?>
		<!-- End Navigation -->

		<!-- Start Fixed Background IMG -->
		<div class="fixed-background fixed-background-nothome">
			<div class="row text-light bannerOpaqueLayerCyan" style="height: 6rem; padding-top: 20px;">
				<div class="col-12 text-center ">
					<h1 class="clubhouseHeading">Find Us</h1>
				</div>
			</div>
			<div class="fixed-wrap">
				<div class="fixed fixed-nothome"></div>
			</div>
		</div>
		<!-- End Fixed Background IMG -->		

		<!-- Main Page Heading -->
		<div class="col-12 text-center my-5 bodydiv">
			<!-- <h1 class="text-dark pt-4">Find Us</h1> -->
			<!-- <div class="border-top border-primary w-25 mx-auto my-1"></div> -->
			<p class="lead"><?php //echo $sTitle; ?>The SAF facility is open for in-person meetings everyday. Check the <a class="blue-link" href="/meetings">Meetings page</a> for scheduled times.</p>
		</div>


		<!-- Start Contact Form -->
		<div class="container">
			<div class="os-animation" data-animation="animate__animated animate__fadeInUp">
				<div class="row mb-4">

					<div class="col-md-5 contact-social"><?php echo date('l jS \of F Y h:i:s A') . "<br>"; ?>
						<strong>Connect With Us</strong>
						<p>Have questions? We have answers. Send us a message directly and someone will get back to you right away.</p>
						<strong>Our Location</strong>
						<p>2809 Northland Drive<br>	
						Austin, TX 78757</p>
						<strong>Contact Info</strong>
						<p><a class="blue-link" href="tel:15124526784">(512) 452-6784</a><br><a class="blue-link" href="mailto:info@saffoundation.com">info@saffoundation.com</a></p>
					</div>

					<div class="col-md-7" style="background: #ddd; border-radius: 8px;">

						<form id="contact-form" method="post" action="/process/user_form_process.php">
							<input id="form_type" type="hidden" name="type" class="form-control" value="contact">
							<div>&nbsp;</div>
							<div class="messages">Send us a message directly...</div>
							<div class="controls">

								<div class="form-group">

									<input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your name." required>
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group">
									<input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email." data-error="Please enter a valid email address." required=>
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group">
									<textarea id="form_message" name="message" class="form-control" placeholder="Add your message." rows="4" required="required" maxlength="1000"></textarea>
									<div class="help-block with-errors"></div>
								</div>

								<input type="submit" class="btn btn-outline-dark btn-md" value="Send message">

							</div>
							<div>&nbsp;</div>
						</form>

					</div>

				</div> <!-- End Row -->
			</div> <!-- End Animation -->
		</div> <!-- End Container -->


		<!-- Start Fixed Background IMG -->
		<!-- End Fixed Background IMG -->

<!-- Start Google Map -->
<?php
$sGoogleMap1 = "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d110195.89161151!2d-97.75147700000001!3d30.333279000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xedf8c432e00278e6!2sSuburban%20Alcoholic%20Foundation!5e0!3m2!1sen!2sus!4v1599071282437!5m2!1sen!2sus";
$sGoogleMap_X = 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27549.075423874216!2d-97.7673785!3d30.3329146!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644cafa7d672301%3A0xedf8c432e00278e6!2sSuburban%20Alcoholic%20Foundation!5e0!3m2!1sen!2sus!4v1598982803510!5m2!1sen!2sus';

?>
		<div class="contact-map">
			<div id="mapOverlay" class="responsive-map">
				<iframe id="embedmap" src="<?= $sGoogleMap1; ?>" width="auto" height="400" style="border:0" allowfullscreen></iframe>
			</div>
		</div> <!-- End Container -->


		<?php require_once(__ROOT__ . "/content_php/3columnEvents.php"); ?>


		<!-- Start Footer -->
		<?php
		require_once(__ROOT__ . "/includes/footer.php");
		?>
		<!-- End Footer -->
		<!-- Start Socket -->
		<?php
		require_once(__ROOT__ . "/includes/socket.php");
		?>
		<!-- End Socket -->
	</div>

</body>