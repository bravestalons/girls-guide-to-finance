<?php require_once("config.php"); ?>
<?php require_once("imgCollect.php"); ?>
<?php require_once("listImages.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script>
    var loadFile = function(event) {
    	var image = document.getElementById('output');
    	image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>


</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <img class="img img-responsive rounded-circle mb-3"
                    width="160" />
                    <p>
                        <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                    </p>
                    <p>
                        <img id="output" width="200" />
                    </p>
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>
                    <p>
                        <label for="file" style="cursor: pointer;">
                            Upload Profile Pic</label>
                    </p>
                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form name="frmImage" enctype="multipart/form-data" action="listImages.php"
            method="post" class="frmImageUpload">
            <label>
                Upload Image File:
            </label>
            <br />
            <input name="userImage" type="file" class="inputFile" />
            <input type="submit" value="Submit" class="btnSubmit" />
            </form>
        </div>
            <div class="card mb-3">
                
            </div>

        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/97b30038e7.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/scripts.js" type="text/javascript"></script>
</body>
</html>
