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
					<h1 class="clubhouseHeading">SAF 2022 Election to Board of Trustees</h1>
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
		<div class="container my-4  text-center  messages" style="font-size:2rem; color: blue;">Vote today!</div>
		<div class="container my-4  text-center " style="font-size: large; color: black;">
		If you are a member in good standing you may vote online for the new members of the Board of Trustees. (eligibility requirements shown below)
		</div>

		<!-- BEGIN: Div for Online meeting schedule -->
		<div id='' class="container" style=''>


		
		<form id="election-form" method="post" action="/" style="display: block;">
			
			<div style="font-size: large; color: blue;">Please start by entering in your contact information:</div>
			<input id="form_type" type="hidden" name="type" class="form-control" value="election2022_v1">
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
			<div style="font-size: large; color: blue;">Cast your vote by selecting the seven (7) candidates you want to join the 2022 SAF Board of Trustees (Pictures below for reference).</div>
			
			<div id="2022_ballot" class="container">
				<div class="row">
					<div class="col-sm candidate_box"><input type="checkbox" id="c1" name="ballot[]" value="Chris Dock">
					<label for="c1" class="candidate_name">&nbsp;Chris Dock</label></div>
								
					<div class="col-sm candidate_box"><input type="checkbox" id="c2" name="ballot[]" value="Denise Cadena">
					<label for="c2" class="candidate_name">&nbsp;Denise Cadena</label></div>
								
					<div class="col-sm candidate_box"><input type="checkbox" id="c3" name="ballot[]" value="Hannah Meehan">
					<label for="c3" class="candidate_name">&nbsp;Hannah Meehan</label></div>
				</div>
				<div class="row">
					<div class="col-sm candidate_box"><input type="checkbox" id="c4" name="ballot[]" value="Jeremy Fleck">
					<label for="c4" class="candidate_name">&nbsp;Jeremy Fleck</label></div>
								
					<div class="col-sm candidate_box"><input type="checkbox" id="c5" name="ballot[]" value="Lou Cartwright">
					<label for="c5" class="candidate_name">&nbsp;Lou Cartwright</label></div>
								
					<div class="col-sm candidate_box"><input type="checkbox" id="c6" name="ballot[]" value="Maida Ference">
					<label for="c6" class="candidate_name">&nbsp;Maida Ference</label></div>
				</div>
				<div class="row">
					<div class="col-sm candidate_box"><input type="checkbox" id="c7" name="ballot[]" value="Mohsen Bank">
					<label for="c7" class="candidate_name">&nbsp;Mohsen Bank</label></div>
								
					<div class="col-sm candidate_box"><input type="checkbox" id="c8" name="ballot[]" value="Pat Mitchell">
					<label for="c8" class="candidate_name">&nbsp;Pat Mitchell</label></div>
								
					<div class="col-sm candidate_box"><input type="checkbox" id="c9" name="ballot[]" value="Paul Robbins">
					<label for="c9" class="candidate_name">&nbsp;Paul Robbins</label></div>
				</div>
				<div class="row">
					<div class="col-sm candidate_box"><input type="checkbox" id="c10" name="ballot[]" value="Rick Watson">
					<label for="c10" class="candidate_name">&nbsp;Rick Watson</label></div>
								
					<div class="col-sm candidate_box"><input type="checkbox" id="c11" name="ballot[]" value="Sandra Ansari">
					<label for="c11" class="candidate_name">&nbsp;Sandra Ansari</label></div>
								
					<div class="col-sm candidate_box"><input type="checkbox" id="c12" name="ballot[]" value="Sherry Bell">
					<label for="c12" class="candidate_name">&nbsp;Sherry Bell</label></div>
				</div>
				<div class="row">
					<div class="col-sm candidate_box"><input type="checkbox" id="c13" name="ballot[]" value="Stacy Morales">
					<label for="c13" class="candidate_name">&nbsp;Stacy Morales</label></div>
								
					<div class="col-sm candidate_box"><input type="checkbox" id="c14" name="ballot[]" value="Steve Davis">
					<label for="c14" class="candidate_name">&nbsp;Steve Davis</label></div>
								
					<div class="col-sm candidate_box">&nbsp;</div>
				</div>
			</div>
			<div id="toomany" class="text-center" style="color: red; font-size:large; display: none; ">You are not allowed to select more than 7 candidates!</div>
			<div id="toofew" class="text-center" style="color: red; font-size:large; display: none; ">You must select at least one candidate</div>
			<div style="width:200px; margin: auto; padding-top: 20px;">
				<input type="submit" class="btn btn-danger btn-md" style="" value="Submit your Vote">
				
			</div>
			<div style="margin:auto; width: 780px; padding-top:10px;"><img src="/img/2022candidates.png" alt="candidate photos" class=""></div>
			</form>
			<!-- <div style="width:200px; margin: auto; padding-top: 0px;">
				<button id="submitVote" class="btn btn-danger btn-md" style="">Submit your Vote</button>
			</div> -->
			
		
		


		<div style="margin-top:10px;">
			<p><strong>Eligibility to Vote:</strong></p>
			<p style=""><i>Per Foundation bylaws, to be eligible to vote, Foundation members must “have made a full twelve (12) months of contributions immediately preceding the election. No more than three (3) months of contributions may be applied retroactively to establish the twelve (12) month period. Retroactive contributions must be made at least fifteen (15) days prior to the election at which the member seeks to vote.”
You may check your voting status in the Foundation office or by calling (512) 452-6784.</i></p>
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
