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
					<h1 class="clubhouseHeading">Membership</h1>
				</div>
			</div>
			<div class="fixed-wrap">
				<div class="fixed fixed-nothome"></div>
			</div>
		</div>
		<!-- End Fixed Background IMG -->		

		<div class="col-12 text-center mt-2 bodydiv">
			<h1 class="text-dark pt-4">Join Today / Pay Dues</h1>
			<div class="border-top border-primary w-25 mx-auto my-3"></div>
			<p class="lead"></p>
		</div>

		<div class="container my-5 bodydiv">
			<div class="row mb-4">
				<div class="col-md-5">
					<h2>Gratitude</h2>
					<p class="statement">Signify your gratitude for the beautiful facility we have in which to recover and provide a place for the newcomer to achieve sobriety.</p><br>

					<h2>Financial Support</h2>
					<p class="statement">Financial support helps defray the cost of expenses such as utilities, building and grounds maintenance, insurance and special events events.</p><br>

					<h2>Service</h2>
					<p class="statement">Foundation members in good standing are eligible to serve on the board of trustees and vote at foundation meetings. </p><br>

					<p class="statement" style='font-style:italic;'>The board of trustees of the foundation encourages and welcomes your membership and participation in the foundation</p><br>
					<p class="statement"></p>
				</div>

				<div class="col-md-7" >
					<div style="background: #ddd; border-radius: 8px; padding:10px; margin: 0px 0px 20px 0px;">
						<form id="membership-form" method="post" action="/includes/membership_process.php">
							<div class="" style="margin: 2px 0px; font-size: 1.3rem;">Become a Foundation Member Today!</div>
							<div class="form-group">
								<input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your name." required="required">
							</div>

							<div class="form-group">
								<input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email." required="required">
							</div>

							<div class="form-group">
								<input id="form_phone" type="phone" name="phone" class="form-control" placeholder="Enter your phone number." required="required">
							</div>
							<div class="form-group">
								<textarea id="form_message" name="message" class="form-control" placeholder="Add a message to us. (Optional)" rows="4"></textarea>
							</div>
							<input type="submit" class="btn btn-outline-dark btn-md" value="Submit info">
						</form>
					</div>
					<div class="payDues">
						<h2>Pay Your Dues</h2>
						<p style='font-size:1.4rem;'>Dues for the SAF are $20 per month. <br>
						You can pay for whatever amount you like: <br>
						1 Month, 3 months, a Year, your choice.</p>
						<ol>
							<li>You can Pay via cash or check in the SAF office anytime.</li>
							<li>Or like many members you can have your bank mail a check payable to, Suburban Alcoholic Foundation to:<br> 2809 Northland Drive, Austin TX, 78757</li>
							<li>Pay online: Click the donate link below to pay your Suburban Alcoholic Foundation Dues online with your Credit/Debit Card via PayPal</li>
						</ol>
						<div id='donateButton' class="container my-5 " style="text-align: center;">

							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="4RVCVRSBN95MA">
							<!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Pay Dues Online"> -->
							<input type="image" src="/img/donate.jpg" border="0" name="submit" alt="Pay Dues Online">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
						</div>
					</div>

				</div>

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