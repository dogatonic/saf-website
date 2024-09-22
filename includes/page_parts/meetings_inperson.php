<!-- BEGIN: Div for In Person meeting schedule -->
<div id='divMeetingsIP' class="container my-1" style='border:0px solid #00f;'>
	<div class="col-12 text-center bodydiv">
		<h1 class="text-dark pt-4">In Person AA Meetings</h1>
		<div class="border-top border-primary w-25 mx-auto my-3"></div>
		<p class="lead_x">
		<span style="font-weight: 600; font-size: 1.2em;">Speaker Meetings:</span> <a href="/meetings/events" class="red_link">Click here for details...</a><br/>
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
		if($bShowType)echo "<span class='meetingCardType'>(" . $thisDayData['type'] . ")</span>";
		if(isset($thisDayData['new']))echo "<span style='color:red; font-weight: bold;'> NEW! </span>";
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