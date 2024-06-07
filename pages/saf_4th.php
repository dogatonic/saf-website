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
					<h1 class="clubhouseHeading">SAF July 4th Celebration</h1>
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
				<p class="statement text-center">
				<img src="/img/2024_Fourth_Flyer.jpg" alt="July 4th Celebration" style='border: 1px solid #888;' class='___faux_northland'>
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
