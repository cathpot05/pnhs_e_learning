<?php
/**
 * Created by PhpStorm.
 * User: Ms. Cath
 * Date: 3/13/18
 * Time: 9:47 PM
 */

include "../../sessionLogout.php";
include '../../db.inc.php';

$status = $_GET['status'];
$id = $_GET['id'];
if($status){
echo '
<div class="row form-group">
                                <div class="col col-md-3"><label for="grade" class=" form-control-label">Choose Grade For Selected Students:</label></div>
                                <div class="col-12 col-md-9">';

                                    $sql_3 = "SELECT A.* FROM tbl_grade A";
                                    $result_3 = $conn->query($sql_3);
                                    echo '
                        <select class="form-control" name="select_grade" id="select_grade" >
                        ';
                                    if ($result_3->num_rows > 0) {
                                        while($row_3 = $result_3->fetch_assoc()){
                                            echo '<option value='.$row_3["gradeId"].'>'.$row_3["gradeDesc"].'</option>';
                                        }
                                    }
                                    echo '</select>

</div>
</div>';

    echo'
                            <input type="hidden" name="checker" id="checker" value="1"/>
                             <table class="table table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Students</th>
                                </tr>
                                </thead>
                                <tbody>';

    $sql_2 = "SELECT B.studId, B.firstname, B.lastname
                FROM tbl_enrolledstudents A
                INNER JOIN tbl_students B ON A.studId = B.studId
                WHERE A.sy_courseId  = $id";
    $result_2 = $conn->query($sql_2);
    while($row_2 = $result_2->fetch_assoc()){
        echo '
                                     <tr>
     								<td><input type="checkbox"  name="checklist_course[]" value="'.$row_2["studId"].'"/></td>
     								<td>'.$row_2["firstname"].' '.$row_2["lastname"].' <input type="hidden" class="course_tbl" /></td>
     								</tr>';
    }
    echo '
                                </tbody>
                            </table>';
}else{

echo '<div class="row form-group">
                                <div class="col col-md-3"><label for="subj" class=" form-control-label">Student</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="hidden" name="checker" id="checker" value="0"/>';

                                    $sql_2 = "SELECT A.*
                                    FROM tbl_students A
                                    WHERE A.studId NOT IN
                                    (SELECT B.studId
                                    FROM tbl_enrolledstudents B
                                    INNER JOIN tbl_sy_course C ON B.sy_courseId = C.sy_courseId
                                    INNER JOIN tbl_sy D ON C.syId = D.syId
                                    WHERE C.syId = (SELECT syID from tbl_sy_course WHERE sy_courseId = $id LIMIT 1)
                                    )
                                    ";
                                    $result_2 = $conn->query($sql_2);
                                    echo '
                        <select class="form-control" name="select_student" id="select_student" >';
                                    if ($result_2->num_rows > 0) {
                                        while($row_2 = $result_2->fetch_assoc()){
                                            echo '<option value='.$row_2["studId"].'>'.$row_2["firstname"].' '.$row_2["lastname"].'</option>';
                                        }
                                    }
                                    echo '</select>';
echo '
</div>
</div>

<div class="row form-group">
    <div class="col col-md-3"><label for="grade" class=" form-control-label">Grade</label></div>
    <div class="col-12 col-md-9"> ';

        $sql_3 = "SELECT A.* FROM tbl_grade A";
        $result_3 = $conn->query($sql_3);
        echo '
                        <select class="form-control" name="select_grade" id="select_grade" >
                        ';
        if ($result_3->num_rows > 0) {
            while($row_3 = $result_3->fetch_assoc()){
                echo '<option value='.$row_3["gradeId"].'>'.$row_3["gradeDesc"].'</option>';
            }
        }
        echo '</select>';
        echo '
    </div>
</div>';
}
?>