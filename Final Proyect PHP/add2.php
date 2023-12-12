<?php



include 'database2.php';
$pictureObj=new database2();
// add record to the table
if(isset($_POST['submit'])){
    $pictureObj->insertData($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add picture</title>
    <meta name="description" content="Adding picture">
    <meta name="robots" content="noindex, nofollow">
    <!--  Add our Google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Rubik:ital@1&display=swap" rel="stylesheet">
    <!-- add Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- add our CSS -->
    <link rel="stylesheet" href="./css/style2.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>

<?php

require './templates/header.php';
?>
<!-- container with form to add picture to database -->
<section class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <!-- name of the form -->
                <div class="card-header text-white">
                    <h2>Insert picture info</h2>
                </div>
                <div class="card-body bg-light">
                    <form action="add2.php" method="POST">
                        <div class="form-group">
                            <!-- price of the pic -->
                            <label for="price">Price:</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" required="">
                        </div>
                        <div class="form-group">
                            <!-- size of digital picture (Mb, Gb ...) -->
                            <label for="size_picture">Size:</label>
                            <input type="text" class="form-control" name="size_picture" placeholder="Enter size of the picture" required="">
                        </div>
                        <div class="form-group">
                            <!-- date of adding -->
                            <label for="date_add">Date:</label>
                            <input type="text" class="form-control" name="date_add" placeholder="Enter date" required="">
                        </div>
                        <div class="form-group">
                            <!-- quality of the digital pic -->
                            <label for="resolution">Resolution:</label>
                            <input type="text" class="form-control" name="resolution" placeholder="Enter resolution" required="">
                        </div>
                        <!-- submit button -->
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require './templates/footer.php';
?>
</body>
</html>
