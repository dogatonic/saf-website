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
					<h1 class="clubhouseHeading">About Us</h1>
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

		<div class="container my-4  text-center ">
		
			<div class="btn-group buttonGroupAbout" role="group" aria-label="meetings" style="width: 100%; max-width: 40rem;">
				<button type="button" id="bAboutPhilosophy" class="btn bAboutGroup btn-secondary" style="font-size: 1.2rem;">The Foundation</button>
				<button type="button" id="bAboutHistory" class="btn bAboutGroup btn-secondary-2" style=" font-size: 1.2rem;">History of SAF</button>
			</div>
		</div>

		<!-- BEGIN: Div for Online meeting schedule -->
		<div id='divAboutHistory' class="container" style='border:0px solid #0f0;'>
			<div class="col-12 text-center bodydiv">
				<h1 class="text-dark pt-4">Our History</h1>
				<div class="border-top border-primary w-25 mx-auto my-3"></div>
			</div>
			<div class="container my-1" style='border:0px solid #f00; padding:20px 0px;'>
				<p class="statement">
				<?php require_once(__ROOT__ . "/content_php/history.php"); ?>
				</p>
			</div>
		</div>

		<div id='divAboutPhilosophy' class="container" style='border:0px solid #0f0;'>
		<div class="col-12 text-center bodydiv">
				<h1 class="text-dark pt-4">Our Philosophy</h1>
				<div class="border-top border-primary w-25 mx-auto my-3"></div>
			</div>
			<div class="container my-5 bodydiv">
				<p class="statement">
The SUBURBAN ALCOHOLIC FOUNDATION (SAF) was
incorporated by members of the Suburban (Northland)
group in 1955. SAF was established to provide a
permanent home for Alcoholic Anonymous in Austin.
SAF is a nonprofit corporation operated by a Board of
Trustees. The Board of Trustee are the owner and
operators of the facility. In line with AA traditions, the
Foundation Manager is employed as a special worker.
Since the Manager is also a member of the group, he/she
is ever mindful of the group conscience.
<br><br>
Experience has taught us that the successful operation of
the Premises depends to a large extent upon monies
received from the Foundation Members. The Manager will
always be available to inform group members or the
groups&#39; Secretary of the need for Foundation Membership
and support. Fix typos. Where typos? Getting Closer.
<br><br>
The purpose of the Foundation is to help the sick alcoholic
recover if he so desires. Any sober member of the
Northland Group may join the Foundation for the monthly
contribution currently in effect.
				</p>
			</div>	
			<div class="col-12 text-center mt-2 bodydiv">
						<h1 class="text-dark pt-4">Service Opportunities</h1>
						<div class="border-top border-primary w-25 mx-auto my-3"></div>
						<p class="lead"></p>
			</div>
			<div class="container my-5 bodydiv">
				<ul class="statement">
					<li>Financial support in itself is a great service. We use these contributions for the maintenance and upkeep of our meeting facility. </li>
					<li>Eligibility to vote on foundation issues. </li>
					<li>Eligibility to serve on the board of trustees. </li>
					<li>Eligibility for office management.</li>
				</ul>
			</div>

			<div class="col-12 text-center mt-2 bodydiv">
						<h1 class="text-dark pt-4">Our Founders</h1>
						<div class="border-top border-primary w-25 mx-auto my-3"></div>
						<p class="lead"></p>
			</div>
			<div class="container my-5 " style="max-width: 700px;">
				
					<div class="image-scale">
						<div class="image-scale-img">
						<img src="/img/founders.jpg" alt="Our Founders" style='border: 1px solid #888;' class='faux_northland'>
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
