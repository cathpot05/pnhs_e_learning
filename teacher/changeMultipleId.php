<?php
include '../db.inc.php';
session_start();	
$questionId =$_GET['questionId'];
$quizId = $_GET['quizId'];
$sql = "SELECT *FROM tbl_quiz_multiple where questionId = $questionId";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
	$row = $result->fetch_assoc();
	$correct_answer = 0;
	if($row['correct_answer'] == $row['ans1'])
	{
		$correct_answer = 1;
		
	}
	else if($row['correct_answer'] == $row['ans2'])
	{
		$correct_answer = 2;
		
	}
	else if($row['correct_answer'] == $row['ans3'])
	{
		$correct_answer = 3;
		
	}
	else if($row['correct_answer'] == $row['ans4'])
	{
		$correct_answer = 4;
		
	}
}

?>
						<form action="changeMultiple.php?quizId=<?php echo $quizId; ?>&questionId=<?php echo $questionId; ?>" method="post" class="form-horizontal" >
                            <div class="modal-body">
                              
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="questionDesc" class=" form-control-label">Question</label></div>
                            <div class="col-12 col-md-9">
                              <textarea class="form-control" name=questionDesc cols=20 required><?php echo $row['question']?></textarea>
                            </div>
                          </div>
							<div class="row form-group">
                            <div class="col col-md-3"><label for="a" class=" form-control-label">Choice 1 </label></div>
                            <div class="col-12 col-md-9">
                              <input type=text name=ans1  class="form-control" value="<?php echo $row['ans1']; ?>" required>
                            </div>
                          </div>
                            <div class="row form-group">
                            <div class="col col-md-3"><label for="b" class=" form-control-label">Choice 2 </label></div>
                            <div class="col-12 col-md-9">
                              <input type=text name=ans2 class="form-control" value="<?php echo $row['ans2']; ?>" required>
                            </div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="c" class=" form-control-label">Choice 3 </label></div>
                            <div class="col-12 col-md-9">
                              <input type=text name=ans3 class="form-control" value="<?php echo $row['ans3']; ?>" required>
                            </div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="d" class=" form-control-label">Choice 4 </label></div>
                            <div class="col-12 col-md-9">
                              <input type=text name=ans4  class="form-control" value="<?php echo $row['ans4']; ?>" required>
                            </div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="answer" class=" form-control-label">Answer </label></div>
                            <div class="col-12 col-md-9">
                              <select type=text name=answer class="form-control" required>
								<option value="" >Choose Answer</option>
								<option value=1 <?php if($correct_answer == 1) echo "selected"; ?>>Choice 1</option>
								<option value=2 <?php if($correct_answer == 2) echo "selected"; ?>>Choice 2</option>
								<option value=3 <?php if($correct_answer == 3) echo "selected"; ?>>Choice 3</option>
								<option value=4 <?php if($correct_answer == 4) echo "selected"; ?>>Choice 4</option>
							  </select>
                            </div>
                          </div>
              
                      </div>
                     <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Confirm</button>
								 <button type="button" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
                            </div>
                           </form>