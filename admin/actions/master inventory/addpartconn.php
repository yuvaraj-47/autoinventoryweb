<?php
session_start();

if ($_SESSION['status'] != "Active") {
    header("location:../../../index.php");
}
?>
<?php
include('../../../connection.php');
$partid = $_POST['partid'];
$parttype = $_POST['parttype'];
$cartype = $_POST['cartype'];

$sql = " INSERT INTO parts (partid, parttype, cartype) VALUES ('$partid', '$parttype', '$cartype')";

$result = mysqli_query($con, $sql);

if ($result == 0) {
    echo '<script>alert("Failed to update")</script>';
} else {
    echo '<script>alert("Success")</script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="1;url=add part.php" />
</head>

</html>