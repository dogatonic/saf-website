<?php
$arrCandidates = ["Brad Brown", "Casey Switch", "David Ivey", "Derek Whitman", "Heather Powell", "Mike Aycock", "Stacy Morales", "Susan Onufer", "Tim Currens", "Tom Fleshman"];
$now = date_create()->format('Y-m-d H:i:s');
$isOpen = ($now < '2024-09-11 20:00:00') ? true  : false;
?>
<body>
	<div class="big-div">
		<!-- Top Bar --> 
		<?php require_once(__ROOT__ . "/includes/top_bar.php"); ?>
		<!-- End Top Bar -->

		<!-- Navigation -->
		<?php require_once(__ROOT__ . "/includes/nav_bar.php"); 
		$electionMenu = "<div class='container text-center'><a href='/election/results'>results</a> | <a href='/election/audit'>audit</a></div>";
		?>
		<!-- End Navigation -->

		<!-- Start Fixed Background IMG -->
		<div class="fixed-background fixed-background-nothome">
			<div class="row text-light bannerOpaqueLayerRed" style="height: 6rem; padding-top: 20px;">
				<div class="col-12 text-center ">
					<h1 class="clubhouseHeading">SAF 2024 Election to Board of Trustees</h1>
				</div>
			</div>
			<div class="fixed-wrap">
				<div class="fixed fixed-nothome"></div>
			</div>
		</div>
		<!-- End Fixed Background IMG -->		

		<!-- <div class="col-12 text-center mt-2 bodydiv">
			<h1 class="text-dark pt-4">History & Philosophy</h1>
			<div class="border-top border-primary w-25 mx-auto my-3"></div>
			<p class="lead"></p>
		</div> -->
		<div class="container my-4  text-center  messages" style="font-size:2rem; color: blue;">Voting period is September 4 - 11, 2024</div>
		<?php 
		if($bDebug) echo "<div>$now</div>";
		// if($sBpex == "" || $sBpex == "/"){
		if(!$isOpen){
			
			?> 
		
		<div class="container my-4  text-center " style="font-size: 3rem; color: #720608;">
		Voting polls have now closed.
		</div>	
		<div style="text-align: center;" class="candidate_lineup"><img src="/img/2024candidateLineup.png" alt="candidate photos" class="" style=" margin: 0px auto;"></div>
		<?php } else {
			?>
		<!-- <div class="container my-4  text-center  messages" style="font-size:2rem; color: blue;">Voting period is September 4 - 11, 2024</div> -->
		<div class="container my-4  text-center " style="font-size: large; color: black;">
		If you are a member in good standing you may vote online for the new members of the Board of Trustees. <br/>(eligibility requirements shown below)
		</div>

		<!-- BEGIN: Div for Online meeting schedule -->
		<div id='' class="container" style=''>


		
		<form id="election-form" method="post" action="/" style="display: block;">
			
			<div style="font-size: large; color: blue;">Please start by entering in your contact information:</div>
			<input id="form_type" type="hidden" name="type" class="form-control" value="election2024_v1">
			<div class="form-group" style="width:350px; ">
				<input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your name." required>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group" style="width:350px; ">
				<input id="form_phone" type="text" name="phone" class="form-control" placeholder="Enter your phone number." required>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group" style="width:350px;">
				<input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email address." required>
				<div class="help-block with-errors"></div>
				<div id="emailfound" class="text-center" style="color: red; font-size:large; display: none; ">A ballot has already been submitted using this email address.</div>
			</div>
			<br/>
			<div style="font-size: large; color: blue;">Cast your vote by selecting the seven (7) candidates you want to join the 2024 SAF Board of Trustees<br/> (Pictures below for reference).</div>
			
			
			<div id="2024_ballot" class="ballot_container">
				<?php
				$i = 0;
				foreach($arrCandidates as $name){
					$i += 1;
					?>
					<div class="candidate_box">
							<input type="checkbox" id="c<?php echo $i; ?>" name="ballot[]" value="<? echo $name; ?>" class="width: 20px;">
							<label for="c<?php echo $i; ?>" class="candidate_name candidate_label">&nbsp;<? echo $name; ?></label>
					</div>
					<?php
				}
				?>
			</div>

			<div id="toomany" class="text-center" style="color: red; font-size:large; display: none; ">You are not allowed to select more than 7 candidates!</div>
			<div id="toofew" class="text-center" style="color: red; font-size:large; display: none; ">You must select at least one candidate</div>
			<div style="width:200px; margin: auto; padding-top: 20px;">
				<input id="submitVote" type="submit" class="btn btn-danger btn-md" value="Submit your Vote">
			</div>
			<div style="text-align: center;" class="candidate_lineup"><img src="/img/2024candidateLineup.png" alt="candidate photos" class="" style=" margin: 0px auto;"></div>
			</form>
			<!-- <div style="width:200px; margin: auto; padding-top: 0px;">
				<button id="submitVote" class="btn btn-danger btn-md" style="">Submit your Vote</button>
			</div> -->
			
		
		


		<div style="margin-top:10px;">
			<p><strong>Eligibility to Vote:</strong></p>
			<p style=""><i>Per Foundation bylaws, to be eligible to vote, Foundation members must “have made a full twelve (12) months of contributions immediately preceding the election. No more than three (3) months of contributions may be applied retroactively to establish the twelve (12) month period. Retroactive contributions must be made at least fifteen (15) days prior to the election at which the member seeks to vote.”
You may check your voting status in the Foundation office or by calling (512) 452-6784.</i></p>
<p>
	<?php 
	echo $now . "<br/>"; 	
	?> 
</p>
		</div>
		</div>
			<?php
		} 
		?>
		
<div class="debug_at_bottom">
	<?php
	?>
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
