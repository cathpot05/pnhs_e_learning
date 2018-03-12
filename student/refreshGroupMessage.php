<?php
include '../db.inc.php';
include "../sessionLogout.php";
$courseid= $_GET['courseid'];

						 $sql = "SELECT *from tbl_gmessage where courseid = $courseid";
									
							$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
										$senderid=$row['senderId'];
										$message = $row['message'];
										if($row['sendertype'] == 1)
										{
											 $sql2 = "SELECT *from tbl_teachers where teacherId = $senderid";
											$result2 = $conn->query($sql2);
											$row2 = $result2->fetch_assoc();
										?>
										<i style="float:left; font-size:.8em"><?php echo $row2['firstName']; ?></i><br>
										<div class="alert alert-secondary" style="float:left; font-size:.9em">
											 <?php echo $message; ?>
										</div>
										
										<br><br><br>
										
										<?php
										
										}
										else
										{
											 $sql2 = "SELECT *from tbl_students where studentId = $senderid";
											$result2 = $conn->query($sql2);
											$row2 = $result2->fetch_assoc();
											
											if($row2['studentId'] == $id)
											{
											?>
											<div class="alert alert-primary"  style="float:right; font-size:.9em">
											<?php echo  $message; ?>
											</div>
											<br><br><br>
											<?php	
											}
											else
											{
												?>
												<i style="float:left; font-size:.8em"><?php echo $row2['frstName']; ?></i><br>
												<div class="alert alert-secondary" style="float:left; font-size:.9em">
													 <?php echo $message; ?>
												</div>
												
												<br><br><br>
												
												<?php
												
											}
										}
											
									}
									
								}
						
						
						?>