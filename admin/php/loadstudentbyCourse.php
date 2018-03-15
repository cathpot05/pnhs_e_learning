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
                        <th scope="col">Manage</th>
                    </tr>
                    </thead>
                    <tbody>';


                     $sql = "SELECT B.es_Id, A.studId, A.firstname, A.lastname, C.sy_courseId, D.courseId, D.course_description, C.syId
                    FROM tbl_students A
                    INNER JOIN tbl_enrolledstudents B ON A.studId = B.studId
                    LEFT JOIN tbl_sy_course C ON B.sy_courseId = C.sy_courseId
                    LEFT JOIN tbl_course D ON C.courseId = D.courseId
                    WHERE C.sy_courseId = '".$_GET ['courseId']."'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        echo '
     								<tr>
     								<td>'.$row["firstname"].' '.$row["lastname"].'</td>
     								<td>'.$row["course_description"].'</td>
     								<td>
                                                <div class="btn-sm"><a href="php/remove_sy_course_enrolled.php?id='.$row["es_Id"].'&syId='.$row["syId"].' " class="btn btn-outline-danger btn-sm">Remove</a>
                                 </div>

     								</td>
     								</tr>
     								';
                    }
                    echo '
</tbody>
</table>
</div>';
?>