<?php
$server   = "localhost";
$database = "nenamal";
$username = "root";
$password = "";

$mysqlConnection = mysqli_connect($server, $username, $password, $database);
if (!$mysqlConnection)
{
    echo "Please try later.";
}
$output='';
$query="SELECT * FROM grade_subject,subjects WHERE grade = '".$_POST["gradeId"]."' AND grade_subject.subject_id= subjects.subject_id ";

//$query="SELECT * FROM grade_subject WHERE grade =.'".$_POST["gradeId"]."' ORDER BY grade ";

$results = mysqli_query($mysqlConnection, $query);

//$output='<option value=" ">Select Subject</option>';
//while($row= mysqli_fetch_array($results)){
////    $output='<option value="'.$row["id"].'">"'.$row["subject_id"].'"</option>';
//    $output='<option value .="'.$row["id"].'">"'.$row["subject_id"].'"</option>';
//}
//
////if(!$results) die("Database Error...: " . mysqli_error());
//echo $output;




?>

<?php while($row= mysqli_fetch_array($results)):; ?>
<div class="form-group subject_list" id="subject_list">
       <label for="email"><?php echo $row['subject']; ?></label>
    <input type="text" class="form-control" name="subject_mark[]">
    <input type="text" class="hidden" name="subject_id[]">
</div>
<?php endwhile; ?>