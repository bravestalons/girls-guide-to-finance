<?php require_once("auth.php"); ?>
<?php require_once("imgCollect.php"); ?>
<?php require_once("config.php");

    $sql = "SELECT imageId FROM output_images ORDER BY imageId DESC";
    $result = mysqli_query($conn, $sql);
?>
