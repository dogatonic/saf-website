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
					<p class="lead"><?php //echo $sTitle; ?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quidem ugiat ab maiores animi enim.</p>
		</div>

		<!-- Three Column Section -->
		<div class="container mt-4 mb-5 bodydiv">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="row services">
						<div class="col-lg-4 col-xl-3">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x" style="color: #ff5100;"></i>
								<i class="fas fa-users fa-inverse fa-stack-1x"></i>
							</span>
						</div>
						<div class="col-lg-8 col-xl-9">
							<h4 class="text-dark text-uppercase">Membership</h4>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat atque quod facere voluptatum eos quia? Eveniet aut est ab natus omnis cumque deserunt nesciunt, necessitatibus nihil perferendis architecto. Quos, saepe.</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="row services">
						<div class="col-lg-4 col-xl-3">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x" style="color: #00f;"></i>
								<i class="fas fa-link fa-inverse fa-stack-1x"></i>
							</span>
						</div>
						<div class="col-lg-8 col-xl-9">
							<h4 class="text-dark text-uppercase">Links</h4>
							<p>Sed perspiciatis dolorem neque in deleniti reprehenderit, eum dolor obcaecati eaque nesciunt coe. Perferendis error soluta cumque dolorum nemo laborum?</p>
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
							<p>Repudiandae architecto expedita amet velit aut ducimus odio nobis nostrum eos recusandae, cumque asperiores sed dolores magnam alias est dolor? Accusantium, accusamus eaque. Earum, aut perspiciatis odio id illo laboriosam.</p>
						</div>
					</div>
				</div>
			</div><!--- End Row -->
		</div>
		<!-- End Three Column Section -->


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