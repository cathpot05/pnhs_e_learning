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
 echo'
                            <input type="hidden" name="checker" id="checker" value="1"/>
                             <table class="table table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Subject</th>
                                </tr>
                                </thead>
                                <tbody>';

                                $sql_2 = "SELECT B.*
                                        FROM tbl_sy_course_subj A
                                        INNER JOIN tbl_subjects B ON A.subjectId = B.subjectId
                                        WHERE sy_courseId  = $id";
                                $result_2 = $conn->query($sql_2);
                                while($row_2 = $result_2->fetch_assoc()){
                                    echo '
                                     <tr>
     								<td><input type="checkbox"  name="checklist_course[]" value="'.$row_2["subjectId"].'"/></td>
     								<td>'.$row_2["subjDesc"].' <input type="hidden" class="course_tbl" /></td>
     								</tr>';
                                 }
echo '
                                </tbody>
                            </table>';



}else{
    echo'
<div class="row form-group">
                                <div class="col col-md-3"><label for="subj" class=" form-control-label">Subject</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="hidden" name="checker" id="checker" value="0"/>';

                                    $sql_2 = "SELECT A.*
                                FROM tbl_subjects A
                                WHERE A.subjectId  NOT IN
                                (SELECT subjectId
                                FROM tbl_sy_course_subj WHERE sy_courseId  = $id)";
                                    $result_2 = $conn->query($sql_2);
                                    echo '
                        <select class="form-control" name="select_subject" id="select_subject" >';
                                    if ($result_2->num_rows > 0) {
                                        while($row_2 = $result_2->fetch_assoc()){
                                            echo '<option value='.$row_2["subjectId"].'>'.$row_2["subjDesc"].'</option>';
                                        }
                                    }
    echo '</select>';

echo'
</div>
</div>

<div class="row form-group">
    <div class="col col-md-3"><label for="teacher" class=" form-control-label">Teacher</label></div>
    <div class="col-12 col-md-9">';

        $sql_3 = "SELECT A.* FROM tbl_teachers A";
        $result_3 = $conn->query($sql_3);
        echo '
                        <select class="form-control" name="select_teacher" id="select_teacher" >
                        ';
        if ($result_3->num_rows > 0) {
            while($row_3 = $result_3->fetch_assoc()){
                echo '<option value='.$row_3["teacherId"].'>'.$row_3["firstname"].' '.$row_3["lastname"].'</option>';
            }
        }
        echo '</select>

    </div>
</div>
';

}
?>