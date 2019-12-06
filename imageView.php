<?php require_once("listImages.php"); ?>

<?php

    $sql = "SELECT imageType,imageData FROM output_images";
    echo $sql.$db_host;

    $conn = new mysqli($db_host,$db_user,$db_pass,$db_name);
    if ($conn->connect_error)
die("Secured");
    $result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    //header("Content-type: " . $row["imageType"]);
    echo '<img src="data:image/png;base64,'.base64_encode($row["imageData"]).'">';


mysqli_close($conn);
?>
