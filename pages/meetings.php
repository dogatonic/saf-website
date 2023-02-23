<?php 
require_once(__ROOT__ . "/page_elements/meetings_info.php");


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
		<div id='divMeetingsIP' class="container my-1" style='border:0px solid #00f;'>
			<div class="col-12 text-center bodydiv">
			<h1 class="text-dark pt-4">

				In Person AA Meetings</h1>
				<div class="border-top border-primary w-25 mx-auto my-3"></div>
				<p class="lead_x">
				(C) - Closed Meetings: Attendance is limited to persons who have a desire to stop drinking.<br>
				(O) - Open Meetings: Welcome to all.
				</p>
				<!-- We ask that when discussing our problems, we confine ourselves to those problems as they relate to alcoholism. -->
			</div>
			<a id="showAllMeetings" href="javascript:void()" class="blue-link">Click here to show all meetings</a>
			<div id="accordion">

<?php
$sOnlineMessage = 'Visit the <a href="http://www.northlandgroup.org/" target="_blank">Northland Group website</a> for more information.';
// this section will show a list of the In-Person Meetings. The data is in a separate file called "/page_elements/meetings_info.php"
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
				<h1 class="text-dark pt-4">Online AA Meetings</h1>
				<div class="border-top border-primary w-25 mx-auto my-3"></div>
				<p class="lead">Northland AA Group online meetings are held on Zoom everyday. For online meetings and other information, visit the <a href="http://www.northlandgroup.org/zoom-meetings" target="_blank">Northland Group website.</a></p>
				<div class="container my-1">
					<a href="http://www.northlandgroup.org/zoom-meetings" target="_blank">
						<img src="/img/northland_mini.png" alt="Northland Group Site" style='border: 1px solid #888;' class='faux_northland'>
					</a>
				</div> 
				
			</div>
			<div class="container my-1" style='border:0px solid #f00; padding:20px 0px;'>&nbsp;</div>
		</div>

		<div id='divMeetingsEV' class="container my-1" style='border:0px solid #f00;'>
			<div class="text-center bodydiv"> <!-- TUCKER: removing "col-12" on this wrapper div -->
					<!-- <img src="/img/2022_Fourth_Flyer.png" alt="2022 July Fourth Celebration" style="border:1px solid #333;"> -->
				<h1 class="text-dark pt-4">Events</h1>
				<!-- <div class="border-top border-primary w-25 mx-auto my-3"></div>
				<h1 style="color: red;">Fourth of July Celebration! </h1>
				<p class='statement'>MONDAY July 4th, 2022 - Join us as we celebrate the 67th Anniversary of the Suburban Alcoholic Foundation!</p>
				<p class='statement'>Special guest Speakers. BBQ Lunch. Raffle with prizes. Bake Sale, Volleyball, Horseshoes and Washers! Babysitting Available!</p> -->

		<!-- Three Column Section -->
		<div class=" mt-4 mb-5 bodydiv"><!-- remove "container" -->
			<div class="row">
				<div class="col-12 col-md-4 mb-4">
					<div class="basic_3_col pt-2">
						<h4 class="text-dark text-uppercase">Speaker Nights</h4>
						<h5 style="color: blue;">Wednesdays and Fridays <br/>at 8pm</h5>
						<p>Wednesday night features speakers with less than 10 years of sobriety.</p>
						<p>Friday night features speakers with 10 years or more of sobriety.</p>

						<div class="border-top border-primary w-50 mx-auto my-3"></div>
						<p style="font-weight: 900; color: #555;">Wednesdays</p>
						<p><span style="font-weight: 500;  color: blue;">Feb 22</span> <br> Michael T. - <em>Northland Group</em></p>

						<div class="border-top border-primary w-50 mx-auto my-3"></div>
						<p style="font-weight: 900; color: #555;">Fridays</p>
						<p><span style="font-weight: 500;  color: blue;">Feb 17</span> <br> Mike D. - <em>Graceland Sunday Night Big Book</em></p>


					</div>
				</div>

				<div class="col-12 col-md-4 mb-4">
					<div class="basic_3_col pt-2" style="padding: 4px;">
						<h4 class="text-dark text-uppercase">Birthday Night</h4>
						<h5 style="color: red;">Last Friday of Each Month</h5>
						<p><img src="/img/cake.png" alt="Birthday Night" style='width: 50%; height: auto;'></p>
						<p>Northland Group celebrates annual lengths of sobriety on the last Friday of each month. To receive a chip, please sign up on the bulletine board in the Half Measures room no later than the Tuesday of Birthday week. FREE CAKE!</p>
						<h4>Next Birthday Night:</h4>
						<h3 class="" style="margin-top: 5px; color: #0000ff">
						<?php 
						$n = date("n");
						echo  $arrBDnights[$n ];
						?>
						</h3>
					</div>
				</div>

				<div class="col-12 col-md-4 mb-4">
					<div class="basic_3_col pt-2">
						<h4 class="text-dark text-uppercase">Family Night</h4>
						<h5 style="color: blue;" >Speaker Event: <br/> 1st Saturday of each month<br/>at 8pm</h5> 
						<p>Two speakers together: AA & Al Anon speakers from various groups sharing how recovery supports their relationship. This speaker meeting is held in the Big Room at Northland.</p>
						<div class="border-top border-primary w-50 mx-auto my-3"></div>
						<p style="font-size:1.5rem;"><span style="font-weight: 500;  color: blue;">March 4th</span> <br> Marti & Cecil R</p>
					</div>
				</div>

			</div>
		</div>

		

		<div style="display: none;"><!-- TUCKER: this is the OLD section, we can get rid of this -->
			<div class="border-top border-primary w-25 mx-auto my-3"></div>
			<div>
				<h1>Family Night - Speaker Night </h1>
				<p class='statement'>The 1st Saturday of every month is Family Night with two speakers. 
					AA & Al Anon speakers from various groups sharing how recovery supports their relationship. 
					This speaker meeting is held in the Big Room at Northland.</p>
			</div>

			<div class="border-top border-primary w-25 mx-auto my-3"></div>

			<div>
					<h1>Next Birthday Night:</h1>
					<h1 class="" style="margin-top: 5px; color: #0000ff">
					<?php 
					$n = date("n");
					echo  $arrBDnights[$n ];
					?>
					</h1>
					<p class="statement">Birthday Night is the last Friday of every month at 7:30 pm. 
						<!-- Currently, this event is being held in a Zoom meeting -
					visit the <a href="http://www.northlandgroup.org" target="_blank">Northland Group website</a> for more information. -->
					</p>
					<img src="/img/cake.png" alt="Birthday Night" class=''>
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