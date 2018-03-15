<?php
/**
 * Created by PhpStorm.
 * User: Ms. Cath
 * Date: 3/14/18
 * Time: 9:50 PM
 */


include '../../db.inc.php';
include "../../sessionLogout.php";
echo'<div class="card-body" id="table_content">
                <table class="table table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Subject</th>
                    </tr>
                    </thead>
                    <tbody>';


$sql = "SELECT A.teacherId, A.firstname, A.lastname, E.subjectId, E.subjDesc, C.sy_courseId, D.courseId, D.course_description, C.syId
                    FROM tbl_teachers A
                    INNER JOIN tbl_sy_course_subj B ON A.teacherId = B.teacherId
                    INNER JOIN tbl_sy_course C ON B.sy_courseId = C.sy_courseId
                    INNER JOIN tbl_course D ON C.courseId = D.courseId
                    INNER JOIN tbl_subjects E ON B.subjectId = E.subjectId
                    WHERE C.sy_courseId = '".$_GET ['courseId']."'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo '
     								<tr>
     								<td>'.$row["firstname"].' '.$row["lastname"].'</td>
     								<td>'.$row["course_description"].'</td>
     								<td>'.$row["subjDesc"].'</td>							</tr>
     								';
}
echo '
</tbody>
</table>
</div>';
?>