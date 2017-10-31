<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 10/31/17
 * Time: 21:30
 */
include('login/session.php');

if (!$db) {
    echo "Please try again later.";
    exit();
}

$registration_number = $_GET['registration_number'];
$grade = $_GET['grade'];
$term = $_GET['term'];

$query = "SELECT subjects.subject, results.marks FROM results INNER JOIN subjects ON results.subject_id = subjects.subject_id WHERE results.reg_no = '$registration_number' AND grade = '$grade' AND term = '$term' ORDER BY results.subject_id";
$results = mysqli_query($db, $query);
echo mysqli_error($db);
?>


<table>
    <thead>
    <tr>
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
            <td><?php echo $row['subject'] ?></td>
            <td><?php echo $row['marks'] ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>