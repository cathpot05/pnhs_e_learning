<?php
/**
 * Created by PhpStorm.
 * User: Ms. Cath
 * Date: 3/13/18
 * Time: 9:47 PM
 */

include "../../sessionLogout.php";
include '../../db.inc.php';
?>

<html>
<table class="table table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">School Year</th>
        <th scope="col">Manage</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if($_GET['status']==0){
    $sql_2 = "SELECT A.*
                            FROM tbl_course A
                            WHERE A.courseId NOT IN
                            (SELECT courseId
                            FROM tbl_sy_course WHERE syId = '".$_GET['id']."')";
    }else{
            $sql_2 = "SELECT A.*
            FROM tbl_course A
            INNER JOIN tbl_sy_course B ON A.courseId = B.courseId
            WHERE B.syId = '".$_GET['id']."'";
    }
    $result_2 = $conn->query($sql_2);
    if($result_2->num_rows > 0) {
    while($row_2 = $result_2->fetch_assoc()){
        echo '
     								<tr>
     								<td><input type="checkbox"  name="checklist_course[]" value="'.$row_2["courseId"].'"/></td>
     								<td>'.$row_2["course_description"].' <input type="hidden" class="course_tbl" /></td>
     								</tr>
     								';
    }
    echo '<input type="hidden" name="sy_id" value="'.$_GET['id'].'"/>';
    }
    else{
        echo '
     								<tr >
     								<td style="align-content: center; color: red;">NO DATA TO DISPLAY</td>
     								</tr>
     								';
    }
    ?>
    </tbody>
</table>
</html>