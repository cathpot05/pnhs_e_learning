<?php
include '../db.inc.php';
include "../sessionLogout.php";
$g_Id = $_GET['g_Id'];

						 $sql = "SELECT *from tbl_gmessages where g_Id = $g_Id";
									
							$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
										$senderid=$row['senderId'];
										$message = $row['message'];
										if($row['senderType'] == 1)
										{
											$sql2 = "SELECT *from tbl_teachers where teacherId = $senderid";
											$result2 = $conn->query($sql2);
											$row2 = $result2->fetch_assoc();
										?>
										<i style="float:left; font-size:.8em"><?php echo $row2['firstname']; ?></i><br>
										<div class="alert alert-secondary" style="float:left; font-size:.9em;  padding-bottom:0">
											<span style="float:left; font-size:.9em; "> <?php echo $row['message']; ?></span><br>
											 <?php
												if($row['date'] == date('Y-m-d'))
												{
													?>
													<i style="float:left; font-size:.6em"><?php echo date('g:i a',strtotime($row['time'])); ?></i>
												<?php
												}
												else
												{
													?>
													<i style="float:left; font-size:.6em"><?php echo date('M j, Y',strtotime($row['date']))." - ".date('g:i a',strtotime($row['time'])); ?></i>
												<?php
													
												}
												?>
										</div>
										
										<br><br><br>
										
										<?php
										
										}
										else
										{
											$sql2 = "SELECT *from tbl_students where studId = $senderid";
											$result2 = $conn->query($sql2);
											$row2 = $result2->fetch_assoc();
											
											if($row2['studId'] == $id)
											{
											?>
											<div class="alert alert-primary"  style="float:right; font-size:.9em;  padding-bottom:0">
											<span style="float:right; font-size:.9em;"> <?php echo $row['message']; ?></span><br>
											 <?php
												if($row['date'] == date('Y-m-d'))
												{
													?>
													<i style="float:right; font-size:.6em"><?php echo date('g:i a',strtotime($row['time'])); ?></i>
												<?php
												}
												else
												{
													?>
													<i style="float:right; font-size:.6em"><?php echo date('M j, Y',strtotime($row['date']))." - ".date('g:i a',strtotime($row['time'])); ?></i>
												<?php
													
												}
												?>
											</div>
											<br><br><br>
											<?php	
											}
											else
											{
												?>
												<i style="float:left; font-size:.8em"><?php echo $row2['firstname']; ?></i><br>
												<div class="alert alert-secondary" style="float:left; font-size:.9em;  padding-bottom:0"">
													<span style="float:left; font-size:.9em;" ><?php echo $row['message']; ?></span><br>
													<?php
														if($row['date'] == date('Y-m-d'))
														{
															?>
															<i style="float:left; font-size:.6em"><?php echo date('g:i a',strtotime($row['time'])); ?></i>
														<?php
														}
														else
														{
															?>
															<i style="float:left; font-size:.6em"><?php echo date('M j, Y',strtotime($row['date']))." - ".date('g:i a',strtotime($row['time'])); ?></i>
														<?php
															
														}
														?>
												</div>
												
												<br><br><br>
												
												<?php
												
											}
										}
											
									}
									
								}
						
						
						?>