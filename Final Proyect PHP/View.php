
<!--page that will contain all the picture that we upload-->
<?php
$pageTitle = 'Gallery Page | ProjectPHP Course';
$pageDesc = 'Page that will show all the images uploaded';
require './templates/header.php';
require 'dbimages.php';



    $stmt = $conn->prepare('select * from imagesgallery');
    $stmt->execute();
    $imagelist = $stmt->fetchAll();

?>
<!--    adding some background-->
    <section class="view-images">
        <div>
            <h1>Public Gallery</h1>
        </div>
    </section>

    <section class="image-row row">
        <?php
        // add lesson code here
        foreach($imagelist as $image){
            ?>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <img src="<?=$image['image']; ?>" title="<?=$image['name']; ?>" class="img-fluid">

            </div>
            <?php
        }
        ?>
    </section>
<?php
require './templates/footer.php'
?>