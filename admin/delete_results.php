<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 10/31/17
 * Time: 09:00
 */
include('../login/session.php');

if (!$db) {
    echo "Please try again later.";
    exit();
}

if (isset($_GET{'id'})) {
    $id = $_GET{'id'};
} else {
    die();
}

$sql = "DELETE FROM results WHERE id = '$id'";
if ($db->query($sql) === TRUE) {
    echo "<script type='text/javascript'>
        alert('Record deleted.');
        window.location.href = 'view_results.php';
</script>";
} else {
    echo "<script type='text/javascript'>
        alert('An error occurred while deleting the record.')
        window.location.href = 'view_results.php';
</script>";
}
$db->close();