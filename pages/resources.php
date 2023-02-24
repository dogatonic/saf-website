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
			<div class="row text-light bannerOpaqueLayerGold" style="height: 6rem; padding-top: 20px;">
				<div class="col-12 text-center ">
					<h1 class="clubhouseHeading">Resources</h1>
				</div>
			</div>
			<div class="fixed-wrap">
				<div class="fixed fixed-nothome"></div>
			</div>
		</div>
		<!-- End Fixed Background IMG -->

		<div class="col-12 text-center mt-2 bodydiv">
					<h1 class="text-dark pt-4">Find the information you need</h1>
					<div class="border-top border-primary w-25 mx-auto my-3"></div>
					<!-- <p class="lead"><?php //echo $sTitle; ?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quidem ugiat ab maiores animi enim.</p> -->
		</div>

		<!-- Three Column Section -->
		<div class="container mt-4 mb-5 bodydiv">
			<div class="row">
				<div class="col-sm-6 col-md-4" style='padding-right: 0px;'>
					<div class="row services">
						<div class="col-lg-4 col-xl-3">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x" style="color: #ff5100;"></i>
								<i class="fas fa-users fa-inverse fa-stack-1x"></i>
							</span>
						</div>
						<div class="col-lg-8 col-xl-9">
							<h4 class="text-dark text-uppercase">Membership</h4>
							<p>Become a Foundation Member today!<br>
						<a href='/membership' style='font-size:1.3rem;'>Click Here</a></p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4" style='padding-right: 0px; padding-left:0px;'>
					<div class="row services">
						<div class="col-lg-4 col-xl-3">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x" style="color: #00f;"></i>
								<i class="fas fa-link fa-inverse fa-stack-1x"></i>
							</span>
						</div>
						<div class="col-lg-8 col-xl-9">
							<h4 class="text-dark text-uppercase">Links</h4>
							<p>
								<a href="https://www.northlandgroup.org/" class='linkMainTitle' target="_blank">Northland AA Group</a><br>
								<a href="https://www.northlandgroup.org/" target="_blank">northlandgroup.org</a>
</p>

								<p><a href="https://austinaa.org/" class='linkMainTitle' target="_blank">Hill Country Intergroup</a><br>
								<a href="https://austinaa.org/" target="_blank">austinaa.org</a><br>
							Here are listing, maps & phone numbers for every AA meeting in Austin</p>

								
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="row services">	
						<div class="col-lg-4 col-xl-3">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x" style="color: #8f32a8;"></i>
								<i class="fab fa-readme fa-inverse fa-stack-1x"></i>
							</span>
						</div>
						<div class="col-lg-8 col-xl-9">
							<h4 class="text-dark text-uppercase">Literature</h4>
							<p><a href="https://www.aa.org/" class='linkMainTitle' target="_blank">AA - Alcoholics Anonymous</a><br>
								<a href="https://www.aa.org/" target="_blank">aa.org</a><br>
							The AA main website has the complete literature catalogue
							and the ability tosearch for individual titles by category and subject matter. 
							A.A. literature is available in many languages. </p>
						</div>
					</div>
				</div>
			</div><!--- End Row -->
		</div>
		<!-- End Three Column Section -->

		<?php require_once(__ROOT__ . "/includes/page_parts/events_3_column.php"); ?>

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