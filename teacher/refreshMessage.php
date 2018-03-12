<?php
include '../db.inc.php';
include "../sessionLogout.php";
$studentid = $_GET['studentid'];
						 $sql = "SELECT tbl_students.frstName, tbl_teachers.firstName, tbl_pmessage.message,tbl_pmessage.sendertype FROM tbl_pmessage
						INNER JOIN tbl_students ON tbl_pmessage.studentID = tbl_students.studentId
						INNER JOIN tbl_teachers ON tbl_pmessage.teacherId = tbl_teachers.teacherid
						where tbl_pmessage.studentId = $studentid and tbl_pmessage.teacherId = $id ORDER by id ASC";
								
								$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
										if($row['sendertype']== 0)
										{
										?>
										
										<div class="alert alert-secondary" style="float:left; font-size:.9em">
											 <?php echo $row['message']; ?>
										</div>
										
										<br><br><br>
										
										<?php	
										}
										else
										{
											?>
											
											<div class="alert alert-primary"  style="float:right; font-size:.9em">
											<?php echo $row['message']; ?>
											</div>
											<br><br><br>
											
										<?php	
										}
											
									}
									
								}
						?>