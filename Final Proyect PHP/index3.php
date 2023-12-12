<?php

require './templates/header.php';
include "database2.php";

$pictureObj=new database2();

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
    <section>
        <h2>Pictures available for sale (View only mode)</h2>
        <table class="table table-hover table-striped">
            <thead>
            <!-- column names -->
            <tr>
                <th>Id</th>
                <th>Price</th>
                <th>Picture size</th>
                <th>Date of addition</th>
                <th>Resolution</th>
            </tr>
            </thead>
            <tbody>
            <!-- retrieve rows from database -->
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

                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </section>
</main>
<?php
require './templates/header.php';
?>
</body>
</html>