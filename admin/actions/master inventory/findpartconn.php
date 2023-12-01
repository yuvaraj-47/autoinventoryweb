<?php
session_start();

if ($_SESSION['status'] != "Active") {
    header("location:../../../sign-in.php");
}
?>
<?php
include('../../../connection.php');

$partID = $_POST['partID'];
$description = $_POST['description'];
$dateModified = $_POST['dateModified'];
$modifiedBy = $_POST['modifiedBy'];

//to prevent from mysqli injection  
$PartID = stripcslashes($partID);
$description = stripcslashes($description);

$partID = mysqli_real_escape_string($con, $partID);
$description = mysqli_real_escape_string($con, $description);

$sql = " UPDATE parts
        SET Pdescription = '$description', dateModified = '$dateModified', ModifiedBy = '$modifiedBy'
        WHERE ID = '$partID' ";

$result = mysqli_query($con, $sql);

if ($result == 0) {
    echo '<script>alert("Failed to update")</script>';
} else {
    echo '<script>alert("Success")</script>';
}
?>