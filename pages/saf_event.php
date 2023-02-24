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
			<div class="row text-light bannerOpaqueLayerRed" style="height: 6rem; padding-top: 20px;">
				<div class="col-12 text-center ">
					<h1 class="clubhouseHeading">SAF Member Appreciation Dinner</h1>
				</div>
			</div>
			<div class="fixed-wrap">
				<div class="fixed fixed-nothome"></div>
			</div>
		</div>
		<!-- End Fixed Background IMG -->		


		<!-- BEGIN: Div for Online meeting schedule -->
		<div id='divAboutHistory' class="container" style='border:0px solid #0f0;'>
			<div class="col-12 text-center bodydiv" style="display: block;">
				<h1 class="text-dark pt-4">Come Join Us!</h1>
				<div class="border-top border-primary w-25 mx-auto my-3"></div>
			</div>
			<div class="container my-1" style='border:0px solid #f00; padding:20px 0px;'>
				<p class="statement">
				<img src="/img/saf_dinner_large.png" alt="Member Appreciation Dinner" style='border: 1px solid #888;' class='___faux_northland'>
				</p>
				<p class="text-center" style="font-size:1.5rem; ">The Suburban Alcoholic Foundation will be holding a member appreciation dinner on Saturday, April 8th at 7pm.<br/>
				 <span style="color: blue; font-size:1.8rem;"> SAF members eat for FREE! </span><br/>
				 Non-members are welcome to join for $10. <br/>
				 Dinner will be from 7-8 pm, followed by fellowship from 8-9 pm. <br/>
				 <span style="color: blue; font-size:1.9rem;"> Please RSVP to Lisa or Mohsen if you wish to attend! </span><br/>
				 <img src="/img/saf_dinner_rsvp.png" alt="Member Appreciation Dinner" style='border: 0px solid #888;' class=''>
				</p>
			</div>
		</div>
		
		<!-- Start Fixed Background IMG -->

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
