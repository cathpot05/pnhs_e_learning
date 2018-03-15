<?php
include '../db.inc.php';
session_start();	
$questionId =$_GET['questionId'];
$quizId = $_GET['quizId'];
$sql = "SELECT *FROM tbl_quiz_fill where questionId = $questionId";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
	$row = $result->fetch_assoc();
}
?>
	<form action="changeFill.php?quizId=<?php echo $quizId; ?>&questionId=<?php echo $questionId; ?>" method="post" class="form-horizontal" >
                            <div class="modal-body">
                             
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="questionDesc" class=" form-control-label">Question</label></div>
                            <div class="col-12 col-md-9">
                              <textarea class="form-control" name=questionDesc cols=20 ><?php echo $row['question']; ?></textarea>
                            </div>
                          </div>
						
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="answer" class=" form-control-label">Answer </label></div>
                            <div class="col-12 col-md-9">
                              <input type=text name=answer class="form-control" value="<?php echo $row['correct_answer']?>">
                            </div>
                          </div>
              
                      </div>
                     <div class="modal-footer">
                               <button type="submit" class="btn btn-primary">Confirm</button>
								 <button type="button" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
                            </div>
                           </form>