<?php require_once("auth.php"); ?>

<?php
require_once("config.php");

if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

        $sql = "INSERT INTO output_images(imageType ,imageData)
	VALUES('{$imageProperties['mime']}', '{$imgData}')";
        $stmt = $db->prepare($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
        // bind the parameter to the query
        $params = array(
            ":imageId" => $imageId,
            ":imageType" => $imageType,
            ":imageData" => $imageData
        );
        // query execution to save to database
        $saved = $stmt->execute($params);
        $sql = "SELECT imageType,imageData FROM output_images";
        echo $sql.$db_host;

        $conn = new mysqli($db_host,$db_user,$db_pass,$db_name);
        if ($conn->connect_error)
    die("Secured");
        $result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
        $row = mysqli_fetch_array($result);
        echo $row["imageType"];
        var_dump($row["imageData"]);

        //header("Content-type: " . $row["imageType"]);
        //echo $row["imageData"];

    mysqli_close($conn);
        // if the save query is successful, then the user is already registered then switch to the login page
        //if($saved) header("Location:timeline.php");
    }
}
?>
