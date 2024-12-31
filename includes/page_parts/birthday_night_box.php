<div class="basic_3_col pt-2 mt-2" style="padding: 4px;">
								<h4 class="text-dark text-uppercase">Birthday Night </h4>
								<h5 style="color: red;">Last Friday of Each Month <br/> at 7:30 PM</h5>
								<p><img src="/img/cake.png" alt="Birthday Night" style='width: 50%; height: auto;'></p>
								<p>Northland Group celebrates annual lengths of sobriety on the last Friday of each month. To receive a chip, please sign up on the bulletine board in the Half Measures room no later than the Tuesday of Birthday week. FREE CAKE!</p>
								<h4>Next Birthday Night:</h4>
								<h3 class="" style="margin-top: 5px; color: #0000ff;">
								<?php 
								$n = date("n");
								// echo  $arrBDnights[$n ];
								echo findLastFriday();
								?></h3>
								<h3 class="" style="margin-top: 5px; color: #0000ff; line-height: 3rem;"> 7:30 PM
								</h3>
							</div>