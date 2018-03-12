<?php
include '../db.inc.php';

//will remove this later
//$_SESSION["id"] = 1;
include "../sessionLogout.php";

$sql = "SELECT A.course_subid, B.subjectDesc, C.course , B.subjectid, C.courseid
FROM tbl_course_subjects A
INNER JOIN tbl_subject B ON A.subjectid = B.subjectid
INNER JOIN tbl_course C ON A.courseid = C.courseid
WHERE C.courseid = '".$_GET['courseid']."'";
$result = $conn->query($sql);
echo '<div class="row form-group col-md-12">
                    <div class="col col-md-3"><label class=" form-control-label">Subjects</label></div>
                    <div class="col-md-9">
                        <select class="form-control" name="subject" id="subject" >
                        ';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo '<option value='.$row["subjectid"].'>'.$row["subjectDesc"].'</option>
                        ';
                 }
    echo '</select>
         </div>
     </div>';
}
$conn->close();
?>