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

		<!-- BEGIN: Div for In Person meeting schedule -->
		<div id='divMeetingsIP' class="container my-1" style='border:0px solid #00f;'>
			<div class="col-12 text-center bodydiv">
				<h1 class="text-dark pt-4">In Person Meetings</h1>
				<div class="border-top border-primary w-25 mx-auto my-3"></div>
				<p class="lead_x">
				(C) - Closed Meetings: Attendance is limited to persons who have a desire to stop drinking.<br>
				(O) - Open Meetings: Welcome to all.
				</p>
				<!-- We ask that when discussing our problems, we confine ourselves to those problems as they relate to alcoholism. -->
			</div>
			<div id="accordion">

<?php
$sOnlineMessage = 'Visit the <a href="http://www.northlandgroup.org" target="_blank">Northland Group website</a> for more information.';
// this section will show a list of the In-Person Meetings. The data is in a separate file called "/content_php/meetings_info.php"
$arrDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
foreach($arrDays as $sEachDay){
	$sShowStartingCard = ($sEachDay == 'Sunday') ? 'show' : '';// this class will allow Sunday to be visible on pageload
	echo '<div class="card">';
	echo '<div class="card-header card-header-meetings" id="heading' . $sEachDay . '" data-toggle="collapse" data-target="#collapse' . $sEachDay . '">';
		echo '<h2 class="mb-0">' . $sEachDay . '</h2>';
	echo '</div>' . "\n";
	echo '<div id="collapse' . $sEachDay . '" class="collapse ' . $sShowStartingCard . '" data-parent="#accordion">';
	echo '<div class="card-body">';
	foreach($arrMeetingsData as $thisDayData){
		if($thisDayData['day'] != $sEachDay)continue; //skip rows that don't match the day we are currently working with

		$bShowType = ($thisDayData['type'] != 'X')? true : false;
		$sStrikeThroughClass = ($thisDayData['type'] == 'X')? 'strikeThrough' : '';

		echo "<div class='meetingCard'>" . "\n";
		echo "<span class='meetingCardTime $sStrikeThroughClass'>". $thisDayData['time'] . "</span>&nbsp;&nbsp;" . "\n";
		echo "<span class='meetingCardTitle $sStrikeThroughClass'>" . $thisDayData['title'] . "</span>" . "\n";
		if(!$bShowType)echo "<span class='meetingCanceled'>This meeting is online only at this time.</span>" . "\n";
		if($bShowType)echo "<span class='meetingCardType'>(" . $thisDayData['type'] . ")</span>" . "\n";
		echo "<br>";
		echo "<span class='meetingCardDesc'>" . $thisDayData['desc'] . "</span>" . "\n";
		echo "<span class='meetingCardRoom'>" . $thisDayData['room'] . ".</span>" . "\n";
		if(!$bShowType)echo '<br>' . $sOnlineMessage;
		echo '</div><!-- END: class="meetingCard" -->' . "\n";
	}
	echo '</div><!-- END: class="card-body" -->' . "\n";
	echo '</div><!-- END: day collapse section -->' . "\n";
	echo '</div><!-- END: day card -->' . "\n\n\n";
}

?>
			</div><!-- id='accordion' -->
		</div><!-- id='divMeetingsIP' -->
		<!-- END: Div for In Person meeting schedule -->

		<!-- BEGIN: Div for Online meeting schedule -->
		<div id='divMeetingsOL' class="container" style='border:0px solid #0f0;'>
			<div class="col-12 text-center bodydiv">
				<h1 class="text-dark pt-4">Online Meetings</h1>
				<div class="border-top border-primary w-25 mx-auto my-3"></div>
				<p class="lead">Northland AA Group online meetings are held on Zoom everyday. For online meetings and other information, visit the <a href="http://www.northlandgroup.org" target="_blank">Northland Group website.</a></p>
				<div class="container my-1" style=''>
					<a href="http://www.northlandgroup.org" target="_blank">
						<img src="/img/northland_mini.png" alt="Northland Group Site" style='border: 1px solid #888;' class='faux_northland'>
					</a>
				</div> 
				
			</div>
			<div class="container my-1" style='border:0px solid #f00; padding:20px 0px;'>&nbsp;</div>
		</div>

		<div id='divMeetingsEV' class="container my-1" style='border:0px solid #f00;'>
			<div class="col-12 text-center bodydiv">
				<h1 class="text-dark pt-4">Events</h1>
				<div class="border-top border-primary w-25 mx-auto my-3"></div>
				<p class="lead">Birthday Night is the last Friday of every month at 7:30 pm. Currently, this event is being held in a Zoom meeting -
				visit the <a href="http://www.northlandgroup.org" target="_blank">Northland Group website</a> for more information.</p>
				
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