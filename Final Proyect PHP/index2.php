<?php

session_start();
//if user isn't logged in, then we redirect him to view-only paged (restricted mode)
if (!isset($_SESSION['id'])) {
    header('location: index3.php');
    exit();
}else{
require './templates/header.php';
include "database2.php";

$pictureObj=new database2();
//delete row from database
if(isset($_GET['deleteId'])&& !empty($_GET['deleteId'])){
    $deleteId=$_GET['deleteId'];
    $pictureObj->deleteRecord($deleteId);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Available pictures for sale</title>
    <meta name="description" content="Table with pictures in stock">
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
<main class="container">
    <?php
    #show insert message if all correct
    if(isset($_GET['msg1'])=="insert"){
        echo "
            <div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>X
            </button>
            <h3>INSERT</h3>
            </div>
            ";
    }
    #show update message if all correct
    if(isset($_GET['msg2'])=="update"){
        echo "
            <div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>X
            </button>
            <h3>UPDATE</h3>
            </div>
            ";
    }
    #show delete message if all correct
    if(isset($_GET['msg3'])=="delete"){
        echo "
            <div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>X
            </button>
            <h3>DELETE</h3>
            </div>
            ";
    }
    ?>
    <section>
        <h2>Pictures available for sale
            <!-- button to add record -->
            <button type="button" class="btn btn-success" id="add_button">
                <a href="add2.php">
                    <i class="bi bi-file-plus">
                        Add
                    </i>
                </a>
            </button>
        </h2>
        <!-- table with existing record -->
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Price</th>
                <th>Picture size</th>
                <th>Date of addition</th>
                <th>Resolution</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $pictures=$pictureObj->displayData();
            foreach ($pictures as $picture){
                ?>
                <tr>
                    <td><?php echo $picture['id']; ?></td>
                    <td><?php echo $picture['price']; ?></td>
                    <td><?php echo $picture['size_picture']; ?></td>
                    <td><?php echo $picture['date_add']; ?></td>
                    <td><?php echo $picture['resolution']; ?></td>
                    <td>
                        <!-- edit button -->
                        <button type="button" class="btn btn-warning">
                            <a href="edit2.php?editId=<?php echo $picture['id'];?>">
                                <i class="bi bi-pencil-square">
                                    EDIT
                                </i>
                            </a>
                        </button>
                        <!-- delete button -->
                        <button type="button" class="btn btn-danger">
                            <a href="index2.php?deleteId=<?php echo $picture['id'];?>"
                               onclick="confirm('Are you really sure you want to delete this')">
                                <i class="bi bi-person-x">
                                    Delete
                                </i>
                            </a>
                        </button>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <!-- logout button (lose access to edit and delete functions)-->
        <button type="button" class="btn btn-warning">
            <a href = "logout.php"> <i class="bi bi-box-arrow-left" onclick="confirm('Are you sure you want to leave this section?')"></i>Logout</a>
        </button>
    </section>
</main>
<?php
require './templates/header.php';
}
?>
</body>
</html>