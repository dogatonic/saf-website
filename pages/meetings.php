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
			<div class="row text-light bannerOpaqueLayer" style="height: 6rem; padding-top: 20px;">
				<div class="col-12 text-center ">
					<h1 class="clubhouseHeading">Meetings & Events</h1>
				</div>
			</div>
			<div class="fixed-wrap">
				<div class="fixed fixed-nothome"></div>
			</div>
		</div>
		<!-- End Fixed Background IMG -->	

		<!-- Main Page Heading -->
		<div class="container my-1 ">
			<p class="statement2">In person meetings are open! The SAF facility has opened it's doors - Masks are required and capacity is limited.</p>
		</div>
		<!-- END: Main Page Heading -->

		<div class="container my-1 ">
			<div class="btn-group" role="group" aria-label="">
				<button type="button" class="btn btn-secondary">In Person</button>
				<button type="button" class="btn btn-secondary">Online</button>
				<button type="button" class="btn btn-secondary">Events</button>
			</div>
		</div>


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