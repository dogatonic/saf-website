<?php 
require_once(__ROOT__ . "/includes/data/inperson_meetings.php");


?>
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
			<div class="row text-light bannerOpaqueLayerGreen" style="height: 6rem; padding-top: 20px;">
				<div class="col-12 text-center ">
					<h1 class="clubhouseHeading">Meetings & Events!</h1>
				</div>
			</div>
			<div class="fixed-wrap">
				<div class="fixed fixed-nothome"></div>
			</div>
		</div>
		<!-- End Fixed Background IMG -->	

		<!-- Main Page Heading -->
		<div class="container my-1 ">
			<p class="statement2" style='text-align: center; display: none;'>In person meetings are open! The SAF facility has opened it's doors.</p>
		</div>
		<!-- END: Main Page Heading -->

		<div class="container my-1  text-center ">
			<div class="btn-group buttonGroupMeetings" role="group" aria-label="meetings" style="width: 100%; max-width: 40rem;">
				<button type="button" id="bMeetingsIP" class="btn bMeetingsGroup btn-secondary">In Person</button>
				<button type="button" id="bMeetingsOL" class="btn bMeetingsGroup btn-secondary-2">Online</button>
				<button type="button" id="bMeetingsEV" class="btn bMeetingsGroup btn-secondary">Events</button>
			</div>
		</div>

		<!-- BEGIN: Div for In Person meeting schedule -->
		<?php require_once(__ROOT__ . "/includes/page_parts/meetings_inperson.php"); ?>
		<!-- END: Div for In Person meeting schedule -->

		<!-- BEGIN: Div for Online meeting schedule -->
		<?php require_once(__ROOT__ . "/includes/page_parts/meetings_online.php"); ?>
		<!-- END: Div for Online meeting schedule -->

		<!-- BEGIN: Div for Events -->
		<?php require_once(__ROOT__ . "/includes/page_parts/meetings_events.php"); ?>
		<!-- END: Div for Events -->
		
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