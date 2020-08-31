<?php 
require_once(__ROOT__ . "/content_php/meetings_info.php");
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

		<div class="container my-1  text-center ">
			<div class="btn-group buttonGroupMeetings" role="group" aria-label="meetings">
				<button type="button" id="bMeetingsIP" class="btn bMeetingsGroup btn-secondary">In Person</button>
				<button type="button" id="bMeetingsOL" class="btn bMeetingsGroup btn-secondary-2">Online</button>
				<button type="button" id="bMeetingsEV" class="btn bMeetingsGroup btn-secondary">Events</button>
			</div>
		</div>

		<div id='divMeetingsIP' class="container my-1" style='border:0px solid #00f;'>
			<div id="accordion">
			<div class="card">
					<div class="card-header card-header-meetings" id="headingOne" data-toggle="collapse" data-target="#collapseOne">
						<h2 class="mb-0">Sunday</h2>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

						<div class="card-body">
							<div class='meetingCard'>
								<span class='meetingCardTime' style=''>9:30 am</span>&nbsp;&nbsp;
								<span class='meetingCardTitle'>Beginner's Meeting</span>
								<span class='meetingCardType'>(&nbsp;C&nbsp;)</span>
								<span class='meetingCardDesc'>This meeting is for people with LESS THAN one year of sobriety only. This meeting is closed discussion.</span>
								<span class='meetingCardRoom'>Big Room.</span>
							</div>

							<div class='meetingCard'>
								<span class='meetingCardTime' style=''>9:30 am</span>&nbsp;&nbsp;
								<span class='meetingCardTitle'>Over 1 Year Meeting</span>
								<span class='meetingCardType'>(&nbsp;C&nbsp;)</span>
								<span class='meetingCardDesc'>This meeting is for people with OVER one year of sobriety only. This meeting is closed discussion.</span>
								<span class='meetingCardRoom'>Big Room.</span>
							</div>

							<div class='meetingCard'>
								<span class='meetingCardTime' style=''>12:00 pm</span>&nbsp;&nbsp;
								<span class='meetingCardTitle'>Noon Discussion Meeting</span>
								<span class='meetingCardType'>(&nbsp;C&nbsp;)</span>
								<span class='meetingCardDesc'>This meeting is closed discussion.</span>
								<span class='meetingCardRoom'>Big Room.</span>
							</div>
						</div>

					</div>
				</div>
				<div class="card">
					<div class="card-header card-header-meetings" id="headingOne" data-toggle="collapse" data-target="#collapseOne">
						<h2 class="mb-0">Monday</h2>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
							<div class='meetingCard'>
								<span class='meetingCardTime' style=''>7:30 am</span>
								<span class='meetingCardTitle'>Morning Discussion Meeting</span>
								<span class='meetingCardType'>( Open )</span>
								<span class='meetingCardDesc'>This meeting is open discussion.</span>
								<span class='meetingCardDesc'>Big Room</span>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header card-header-meetings" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo">
						<h2 class="mb-0">Tuesday</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
					</div>
				</div>
				<div class="card">
				<div class="card-header card-header-meetings" id="headingThree" data-toggle="collapse" data-target="#collapseThree">
						<h2 class="mb-0">Wednesday</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
					</div>
				</div>
			</div>
		</div>

		<div id='divMeetingsOL' class="container my-1" style='border:1px solid #0f0;'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus totam ea sit perferendis vero commodi qui architecto ipsa eius! Ut est vero ipsum ipsam sequi consequatur nisi earum praesentium dignissimos?</div>

		<div id='divMeetingsEV' class="container my-1" style='border:1px solid #f00;'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus totam ea sit perferendis vero commodi qui architecto ipsa eius! Ut est vero ipsum ipsam sequi consequatur nisi earum praesentium dignissimos?</div>


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