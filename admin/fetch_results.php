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
$term = $_GET['term'];

$query = "SELECT result_id, name, subjects.subject, marks FROM (SELECT student.name as name, results.subject_id as subject_id, results.marks as marks, results.id as result_id FROM results INNER JOIN student WHERE results.reg_no = student.reg_no AND academic_year = '$year' AND results.grade = '$grade' AND term = '$term' ORDER BY student.name, results.subject_id) relation1 INNER JOIN subjects WHERE relation1.subject_id = subjects.subject_id";
$results = mysqli_query($db, $query);
?>

<table class="table table-sm" style="width: 100%">
    <thead>
    <tr>
        <th>Student name</th>
        <th>Subject</th>
        <th>Result</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    echo $results->num_rows . " record(s) found.";
    $currentName = "";
    $previousName = "";
    while ($row = mysqli_fetch_array($results)) {
        $currentName = $row['name'];
        ?>
        <tr>
            <td><?php if ($currentName != $previousName) echo $row['name'] ?></td>
            <td><?php echo $row['subject'] ?></td>
            <td><?php echo $row['marks'] ?></td>
            <td><a class="btn btn-success" href="update_results.php?id=<?php echo $row['result_id']; ?>">Update</a>
                <a class="btn btn-danger" href="delete_results.php?id=<?php echo $row['result_id']; ?>"
                   onclick="return confirm('Are you sure you want to delete?')">Delete</a>
        </tr>
        <?php
        $previousName = $currentName;
    }
    ?>
    </tbody>
</table>