<?php
require './templates/header.php';
include 'database2.php';
$pictureObj=new database2();
if(isset($_GET['editId']) && !empty($_GET['editId'])){
    $editId=$_GET['editId'];
    $picture=$pictureObj->displayRecordById($editId);
}
//update info if info is correct
if(isset($_POST['update'])){
    $pictureObj->updateRecord($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update picture</title>
    <meta name="description" content="Changing picture info">
    <meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Rubik:ital@1&display=swap" rel="stylesheet">
    <!-- add Google fonts -->
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

<section class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <!-- name of the form -->
                <div class="card-header text-white">
                    <h2>Update Data</h2>
                </div>
                <!-- form to edit the row of the database -->
                <div class="card-body bg-light">
                    <form action="edit2.php" method="POST">
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" class="form-control" name="uprice" value="<?php
                            echo $picture['price']; ?>" required="">
                        </div>
                        <div class="form-group">
                            <label for="size_picture">Size:</label>
                            <input type="text" class="form-control" name="usize_picture" value="<?php
                            echo $picture['size_picture']; ?>" required="">
                        </div>
                        <div class="form-group">
                            <label for="date_add">Date:</label>
                            <input type="text" class="form-control" name="udate_add" value="<?php
                            echo $picture['date_add']; ?>" required="">
                        </div>
                        <div>
                            <label for="resolution">Resolution:</label>
                            <input type="text" class="form-control" name="uresolution" value="<?php
                            echo $picture['resolution']; ?>" required="">
                        </div>
                        <div class="form-group" id="send">
                            <input type="hidden" name="id" value="<?php echo $picture['id']; ?>">
                            <input type="submit" name="update" class="btn btn-primary" value="Update">
                        </div>
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
