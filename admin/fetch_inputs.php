<?php
include('../login/session.php');

if (!$db) {
    echo "Please try again later.";
    exit();
}

$query = "SELECT subjects.subject_id, subjects.subject FROM grade_subject, subjects WHERE grade = '" . $_POST["gradeId"] . "' AND grade_subject.subject_id = subjects.subject_id";
$results = mysqli_query($db, $query);
?>

    <label>Fill the marks for each subject </label>
<?php while ($row = mysqli_fetch_array($results)):; ?>
    <div class="form-group subject_list" id="subject_list">
        <label for="subject"><?php echo $row['subject']; ?></label>
        <input type="number" class="form-control" name="subject_results[]" min="0" max="100">
        <input type="text" class="hidden" name="subject_IDs[]" value="<?= $row['subject_id'] ?>"/>
    </div>
<?php endwhile; ?>