<body>
	<div class="big-div">
		<!-- Top Bar -->
		<?php require_once(__ROOT__ . "/includes/top_bar.php"); ?>
		<!-- End Top Bar -->

		<!-- Navigation -->
		<?php require_once(__ROOT__ . "/includes/nav_bar.php"); //echo date('l jS \of F Y h:i:s A');?>
		<!-- End Navigation -->

		<!-- Image Carousel -->
		<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
			<!-- Carousel Content -->
			<div class="carousel-inner">
			<!-- <div class="home-carousel carousel-item "><a href='/saf_event'><img src="/img/carousel/saf_dinner_banner.png" alt="saf appreciation dinner" class="w-100"></a> </div> -->
				<div class="home-carousel carousel-item active"> <img src="/img/carousel/saf_front.png" alt="saf_front" class="w-100"> </div>
				<div class="home-carousel  carousel-item"> <img src="/img/carousel/saf_inner.png" alt="saf_front" class="w-100"> </div>
				<!-- <div class="home-carousel  carousel-item active"><a href='/election'><img src="/img/carousel/saf_election.png" alt="saf_front" class="w-100"></a> </div> -->
				<!-- <div class="home-carousel carousel-item active"><a href='/saf_4th'><img src="/img/carousel/2025_4th_banner.png" alt="saf_front" class="w-100"></a> </div> -->
				
			</div>
			<!-- End Carousel Content -->

			<!-- Previous & Next Buttons -->
			<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev"> <span class="fas fa-chevron-left fa-2x"></span> </a>
			<a href="#carousel" class="carousel-control-next" role="button" data-slide="next" style="width: 10%; height: 80%;"> <span class="fas fa-chevron-right fa-2x"></span> </a>
			<!-- End Previous & Next Buttons -->
		</div>
		<!-- End Image Carousel -->

		<!-- Main Page Heading -->
		<div class="col-12 text-center mt-3 bodydiv">
			<!-- <h1 class="text-dark pt-4">Open Full Capacity, 7 Days a Week.</h1> -->
			<div class="border-top border-primary w-25 mx-auto my-3"></div>
			<p class="statement">Home of the Northland Group of Alcoholics Anonymous</p>
			<p class="lead">
			<!-- We are following City Guidelines for Covid safety -->
				The SAF facility is open for in-person meetings 7 Days a week.<br>Check the <a class="blue-link" href="/meetings">Meetings page</a> for scheduled times.</p>
		</div>
		<div class="container my-5 bodydiv">
			<!-- <p class="statement">SAF is having the 2024 election this month, to elect seven new trustees to serve on the Board of Trustees.  SAF members can vote online or in-person at the clubhouse. <a href="/election">More information here...</a> </p> -->
			<p class="statement2">The <strong>Suburban Alcoholic Foundation</strong> (SAF) was established as a non profit corporation in 1955 to 
			be a permanent home for the Northland Group of Alcoholics Anonymous in Austin, Texas. 
			The SAF Facility is open for scheduled meetings, operating at full capacity in both Big and Little rooms.
			To find Northland Group online meetings and other information, visit the <a href="http://www.northlandgroup.org" target="_blank">Northland Group website.</a></p>
		</div>
		<!-- END: Main Page Heading -->

		<!-- Three Column Section -->
		<?php require_once(__ROOT__ . "/includes/page_parts/events_3_column.php"); ?>
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