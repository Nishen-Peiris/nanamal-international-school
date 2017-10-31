<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 10/30/17
 * Time: 15:58
 */
include('../login/session.php');

if (!$db) {
    echo "Please try again later.";
    exit();
}

$year = $_GET['year'];
$grade = $_GET['grade'];

$query = "SELECT name, subjects.subject, marks FROM (SELECT student.name as name, results.subject_id as subject_id, results.marks as marks FROM results INNER JOIN student WHERE results.reg_no = student.reg_no AND academic_year = '$year' AND results.grade = '$grade' ORDER BY student.name) relation1 INNER JOIN subjects WHERE relation1.subject_id = subjects.subject_id";
$results = mysqli_query($db, $query);
?>

<table class="table table-sm" style="width: 100%">
    <thead>
    <tr>
        <th>Student name</th>
        <th>Subject</th>
        <th>Result</th>
    </tr>
    </thead>
    <tbody>
    <?php
    echo $results->num_rows . " record(s) found.";
    while ($row = mysqli_fetch_array($results)) {
        ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['subject'] ?></td>
            <td><?php echo $row['marks'] ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>