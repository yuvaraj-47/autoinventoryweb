<?php
session_start();

if ($_SESSION['status'] != "Active") {
    header("location:../../../index.php");
}
?>
<?php
include('../../../connection.php');
$part = $_POST["part"];
$sql = " DELETE FROM parts WHERE partid = '$part' ";

$result = mysqli_query($con, $sql);

if ($result == 0) {
    echo '<script>alert("Failed to delete")</script>';

} else {
    echo '<script>alert("Success")</script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="1;url=remove device.php" />
</head>

</html>