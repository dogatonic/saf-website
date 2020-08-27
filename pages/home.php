<body>
	<div class="big-div">
		<!-- Top Bar -->
		<?php require_once(__ROOT__ . "/includes/top_bar.php"); ?>
		<!-- End Top Bar -->

		<!-- Navigation -->
		<?php require_once(__ROOT__ . "/includes/nav_bar.php"); ?>
		<!-- End Navigation -->

		<!-- Image Carousel -->
		<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
			<!-- Carousel Content -->
			<div class="carousel-inner">
				<div class="home-carousel carousel-item active"> <img src="/img/carousel/saf_front.png" alt="saf_front" class="w-100"> </div>
				<div class="home-carousel  carousel-item"> <img src="/img/carousel/saf_inner.png" alt="saf_front" class="w-100"> </div>
			</div>
			<!-- End Carousel Content -->

			<!-- Previous & Next Buttons -->
			<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev"> <span class="fas fa-chevron-left fa-2x"></span> </a>
			<a href="#carousel" class="carousel-control-next" role="button" data-slide="next"> <span class="fas fa-chevron-right fa-2x"></span> </a>
			<!-- End Previous & Next Buttons -->
		</div>
		<!-- End Image Carousel -->

		<!-- Main Page Heading -->
		<div class="col-12 text-center mt-5 bodydiv">
			<h1 class="text-dark pt-4">Now Open, 7 Days a Week</h1>
			<div class="border-top border-primary w-25 mx-auto my-3"></div>
			<p class="lead"><?php //echo $sTitle; ?>The SAF facility is open for in-person meetings everyday. Check the <a class="blue-link" href="/meetings">Meetings page</a> for scheduled times.</p>
		</div>
		<div class="container my-5 bodydiv">
			<p class="statement">The <strong>Suburban Alcoholic Foundation</strong> (SAF) was established as a non profit corporation in 1955 to be a permanent home for the Northland Group of Alcoholics Anonymous in Austin, Texas. 
			The SAF Facility is open for scheduled meetings. Masks are required at all times inside the building. 
			A maximum of 31 people are allowed in the big room, and 16 people in the small room. 
			To find Northland Group online meetings and other information, visit the <a href="http://www.northlandgroup.org" target="_blank">Northland Group website.</a></p>
		</div>
		<!-- END: Main Page Heading -->

		<!-- Three Column Section -->
		<div class="container mt-4 mb-5 bodydiv">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="row services">
						<div class="col-lg-4 col-xl-3">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x" style="color: #2abc68;"></i>
								<i class="fas fa-handshake fa-inverse fa-stack-1x"></i>
							</span>
						</div>
						<div class="col-lg-8 col-xl-9">
							<h4 class="text-dark text-uppercase">Meetings</h4>
							<p>The Northland Group is having meetings everyday, both in-person on online. Check the Meetings page for more.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="row services">
						<div class="col-lg-4 col-xl-3">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x" style="color: #ffbf00;"></i>
								<i class="fas fa-calendar-alt fa-inverse fa-stack-1x"></i>
							</span>
						</div>
						<div class="col-lg-8 col-xl-9">
							<h4 class="text-dark text-uppercase">Events</h4>
							<p>At this time, all SAF events are on hold while adhering to current COVID-19 guidelines for the city of Austin.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="row services">
						<div class="col-lg-4 col-xl-3">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x" style="color: #bd0202;"></i>
								<i class="fas fa-bullhorn fa-inverse fa-stack-1x"></i>
							</span>
						</div>
						<div class="col-lg-8 col-xl-9">
							<h4 class="text-dark text-uppercase">Announcements</h4>
							<p>Birthday Night is being held on ZOOM on the the last Friday of every month. If you have an annual length of sobriety to celebrate, come join us!</p>
						</div>
					</div>
				</div>
			</div><!--- End Row -->
		</div>
		<!-- End Three Column Section -->

		<!-- Start Fixed Background IMG -->
		<div class="fixed-background fixed-background-home">
			<div class="row text-light py-5">
				<div class="col-12 text-center clubmessage">
					<h1 class="clubhouseHeading">A Permanent Home</h1>
					<p class="clubhouse">The SAF Clubhouse was built more than 50 years ago to provide a permanent home for AA in Austin. The Northland AA Group meets here seven days a week. If you would like to be a part of the Suburban Alcoholic Foundation's effort to preserve and maintain this clubhouse, we welcome you to join our foundation. You need not be a member of the Foundation to attend Northland AA Group meetings. We are glad you are here!</p>
				</div>
			</div>
			<div class="fixed-wrap">
				<div class="fixed fixed-home"></div>
			</div>
		</div>
		<!-- End Fixed Background IMG -->

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