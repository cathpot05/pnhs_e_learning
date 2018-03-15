<?php
/**
 * Created by PhpStorm.
 * User: Ms. Cath
 * Date: 3/13/18
 * Time: 9:47 PM
 */

include "../sessionLogout.php";
include '../db.inc.php';


$id = $_GET['courseId'];

    echo'
                             <table class="table table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col"><input type="checkbox" name="checkall" id="checkall" value=""/> </label></th>
                                    <th scope="col">Students</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Grade</th>
                                </tr>
                                </thead>
                                <tbody>';

    $sql_2 = "SELECT A.es_Id, A.sy_courseId, CONCAT(B.firstname, ' ', B.lastname) AS name , B.studId , G.course_description, F.gradeDesc
                    FROM tbl_enrolledstudents A
                    INNER JOIN tbl_students B ON A.studId = B.studId
                    INNER JOIN tbl_sy_course C ON A.sy_courseId = C.sy_courseId
                    INNER JOIN tbl_grade F ON A.gradeId = F.gradeId
                    INNER JOIN tbl_course G ON C.courseId = G.courseId
                    WHERE C.sy_courseId = $id
";
    $result_2 = $conn->query($sql_2);
if ($result_2->num_rows > 0){
    while($row_2 = $result_2->fetch_assoc()){
        echo '
                                     <tr>
     								<td><input type="checkbox"  name="checklist_course[]" value="'.$row_2["studId"].'"/></td>
     								<td>'.$row_2["name"].'</td>
     								<td>'.$row_2["course_description"].'</td>
     								<td>'.$row_2["gradeDesc"].'</td>
     								</tr>';
    }

}
else{
echo '<tr><td style="color: red;">NO DATA TO DISPLAY. CANNOT CREATE GROUP</td></tr>';
}
echo '
                                </tbody>
                            </table>';
?>

<script type="text/javascript">

    ( function ( $ ) {
        "use strict";


        $("#checkall").click(function(){
            $('input:checkbox').not(this).prop('checked', this.checked);
        });



    } )( jQuery );
</script>