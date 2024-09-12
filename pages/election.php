<?php
$arrCandidates = ["Brad Brown", "Casey Switch", "David Ivey", "Derek Whitman", "Heather Powell", "Mike Aycock", "Stacy Morales", "Susan Onufer", "Tim Currens", "Tom Fleshman"];
$now = date_create()->format('Y-m-d H:i:s');
$isOpen = ($now < '2024-09-11 20:00:00') ? true  : false;
$bOnDev = true;
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
			<div class="row text-light bannerOpaqueLayerCyan" style="height: 6rem; padding-top: 20px;">
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
		
		<?php 
		
		// if($sBpex == "" || $sBpex == "/"){
		if(!$isOpen){
			
			?> 
		
		<div class="container my-4  text-center " style="font-size: 3rem; color: #720608;">
		Voting polls have now closed.
		</div>	
		<?php } elseif($sBpex == "closed" || $sBpex == "/"){
			?>
			<div class="container my-4  text-center  messages" style="font-size:2rem; color: blue;">Current SAF members may cast ballots in person or online*</div>
			<div class="container my-4  text-center  messages" style="font-size:1.7rem; color: blue;">Voting period is September 4 - 11, 2024</div>
		<!-- <div class="container my-4  text-center  messages" style="font-size:2rem; color: blue;">Voting period is September 4 - 11, 2024</div> -->
		<div class="container my-4  text-center " style="font-size: large; color: black;">
		SAF members will elect seven new trustees this month to serve on the SAF Board of Trustees. Trustees serve a 3-year term. The list of candidates was posted at the clubhouse in August in accordance with the SAF bylaws.
<br/><br/>
  Members needing to pay "back dues" (up to three months per the SAF bylaws) to become eligible to vote can pay at the office. Voting begins 
at the SAF office during normal office hours on Wednesday, Sept. 4th, and continues though the 11th. 
<p style="font-style: italic; margin-top: 6px; color: blue;">* For online voting, all up-to-date SAF members will be sent a voting link in a separate email.</p>
		</div>

		<!-- BEGIN: Div for Online meeting schedule -->
		<div id='' class="container" style='text-align: center;'>
			<img src="/img/election_poster_2024.png" class="" alt="SAF Election" style="margin: 0px auto; border: 1px solid grey;">
		</div>
			<?php
		} elseif($sBpex == "/results" && $bOnDev) {

			// BPEX: results
			// BPEX: results
			// BPEX: results

			try {
				// $sMysql = "SELECT * FROM webform_data WHERE status = '1' AND type = 'election2022_v1'";
				$stmt = $mysqli->prepare("SELECT * FROM webform_data WHERE status = '1' AND type = 'election2024_v1' ");
				if($stmt){
					$stmt->execute();
					$result = $stmt->get_result(); // get the mysqli result
					$data = $result->fetch_all(MYSQLI_ASSOC);
				} else {
					// throw something?
					echo "stmt error<br>"; print_r($stmt);
				}
			} catch (\Exception $e) {
				$errMessage = "Error. There was a mysql problem.";
				//$responseArray = array('type' => 'success', 'message' => $errMessage);
			}
		?>
		<div id='' class="container" style=''>
		<div class="container my-4  text-center  messages" style="font-size:2rem; color: blue;">Voting Results (<? echo count($data); ?> ballots to date)</div>
		<?php echo $electionMenu; ?>
		<?php
		
			$arrCandidate = array();
			foreach($data as $row){
				$arrVotesFor = explode('&',$row['message']);
				foreach($arrVotesFor as $name){
					(isset($arrCandidate[$name])) ? $arrCandidate[$name] += 1 : $arrCandidate[$name] = 1;
				}
			}
			arsort($arrCandidate);
			$n = 1;
			foreach($arrCandidate as $name=>$count){
				$rowColor = ($n < 8) ? '#fff' : '#ffda73';
				$rowColor = ($n == 8) ? '#d6f7a8' : $rowColor;
				?>
				<div class="row" style="background-color: <? echo $rowColor; ?>;">
					<div class="col-1 votes_box"><? echo $n; ?></div>
					<div class="col-2 votes_box" style="font-size: med; color: #000;"><? echo $name; ?></div>
					<div class="col-9 votes_box" style="font-size: med; color: #00f;"><? echo $count ; ?></div>
				</div>
				<?php
				$n++;
			}
			echo "<div style=''><pre>";
			// print_r($arrCandidate);
			echo "</pre></div>";

		?>
		
		</div>

		<?
		} elseif($sBpex == "/audit" && $bOnDev) { 
			
			try {
				
				$stmt = $mysqli->prepare("SELECT id, name, email, phone, status FROM webform_data WHERE type like '%election2024_v1%' ORDER BY name;");
				if($stmt){
					$stmt->execute();
					$result = $stmt->get_result(); // get the mysqli result
					$data = $result->fetch_all(MYSQLI_ASSOC);
				} else {
					// throw something?
					echo "stmt error<br>"; print_r($stmt);
				}
			} catch (\Exception $e) {
				$errMessage = "Error. There was a mysql problem.";
				//$responseArray = array('type' => 'success', 'message' => $errMessage);
			}
			?>

		<div id='' class="container" style=''>
				<div class="container my-4  text-center  messages" style="font-size:2rem; color: blue;">Audit Results (<? echo count($data); ?> ballots to date)</div>
				<?php echo $electionMenu; ?>
				<?php

				// Take the DB data, break out the name parts and put last name first, then sort by last name
				$arrVoters = array();
				foreach($data as $voterRow){
					// replace double space with single space on name
					$voterRow['name'] = str_replace('  ',' ',trim($voterRow['name']));
					$arrName = explode(' ',$voterRow['name']);
					// reverse the array of names
					$reverseName = implode(", ", array_reverse($arrName));
					$arrVoters[$reverseName] = $voterRow;
				}
				ksort($arrVoters);
				$n = 1;
				foreach($arrVoters as $name => $row){
					$rowColor = ($n % 2) ? '#fff' : '#ddd';
					$bStatus = ($row['status'] == '1')? true : false;
					?>
					<div class="row" style="background-color: <? echo $rowColor; ?>;">
						<div class="col-1 votes_box"><? echo $n; ?></div>
						<div class="col-3 votes_box" style="font-size: med; color: #000;"><? echo $name; ?></div>
						<div class="col-4 votes_box ballot_email" style="font-size: med;"><? echo $row['email'] ; ?></div>
						<div class="col-2 votes_box ballot_phone" style="font-size: med;"><? echo $row['phone'] ; ?></div>
						<div class="col-2 votes_box ballot_phone" style="font-size: med;">
						<input type="radio" class="status" name="<? echo 'status_' . $row['id']; ?>" data-id="<? echo $row['id']; ?>" value="1" <?php if($bStatus)echo 'checked'; ?>> yes</input>
						<input type="radio" class="status" name="<? echo 'status_' . $row['id']; ?>" data-id="<? echo $row['id']; ?>" value="0"<?php if(!$bStatus)echo 'checked'; ?>> no</input>
						</div>
					</div>
					<?php
					$n++;
				}
				echo "<div style=''><pre>";
				// print_r($arrVoters);
				echo "</pre></div>";

			?>
		</div>
		<?php 
		}
		?>
		


		
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
