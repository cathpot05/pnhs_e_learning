<?php
include '../db.inc.php';
include "../sessionLogout.php";
$studId = $_GET['studId'];
						$sql = "SELECT tbl_students.firstName, tbl_teachers.firstName, tbl_pmessage.message,tbl_pmessage.senderType,tbl_pmessage.date,tbl_pmessage.time 
						 FROM tbl_pmessage
						INNER JOIN tbl_students ON tbl_pmessage.studentId = tbl_students.studId
						INNER JOIN tbl_teachers ON tbl_pmessage.teacherId = tbl_teachers.teacherid
						where tbl_pmessage.studentId = $studId and tbl_pmessage.teacherId = $id ORDER by pMsg_Id ASC";
								
								$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
										if($row['senderType']== 0)
										{
										?>
										
										<div class="alert alert-secondary" style="float:left; font-size:.9em;  padding-bottom:0">
											<span style="float:left; font-size:.9em;"> <?php echo $row['message']; ?></span><br>
											 <?php
												if($row['date'] == date('Y-m-d'))
												{
													?>
													<i style="float:left; font-size:.6em"><?php echo date('H:i a',strtotime($row['time'])); ?></i>
												<?php
												}
												else
												{
													?>
													<i style="float:left; font-size:.6em"><?php echo date('M j, Y',strtotime($row['date']))." - ".date('H:i a',strtotime($row['time'])); ?></i>
												<?php
													
												}
												?>
										</div><br><br><br>
										<?php	
										}
										else
										{
											?>
											
											<div class="alert alert-primary"  style="float:right;padding-bottom:0">
											<span style="float:right; font-size:.9em;" ><?php echo $row['message']; ?></span><br>
											<?php
												if($row['date'] == date('Y-m-d'))
												{
													?>
													<i style="float:right; font-size:.6em"><?php echo date('h:i a',strtotime($row['time'])); ?></i>
												<?php
												}
												else
												{
													?>
													<i style="float:right; font-size:.6em"><?php echo date('M j, Y',strtotime($row['date']))." - ".date('h:i a',strtotime($row['time'])); ?></i>
												<?php
													
												}
												?>
											</div>
											
											<br><br><br>
											
										
										<?php	
										}
											
									}
									
								}
						?>