<?php
//Main page
$pageTitle = 'Final Project | PHP Course';
$pageDesc = 'Social media page tu upload image and share with friend';
  require './templates/header.php';
  require 'dbimages.php';  // connection with the server to add images



if(isset($_POST['submit'])){
  $countfiles = count($_FILES['files']['name']);
  $query = "INSERT INTO imagesgallery (name, image) VALUES (?,?)";
  $statement = $conn->prepare($query);

  for($i = 0; $i < $countfiles; $i++){

    $filename = $_FILES['files']['name'][$i];

    $target_file ='./uploads/'.$filename;

    $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);

    $valid_extension = array("png","jpeg", "jpg");
    if(in_array($file_extension, $valid_extension)){

      if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file)){

        $statement->execute(array($filename, $target_file));
      }
    }
  }
}
?>

<main>
<section class="video-section">
  <video class="background-video" autoplay loop muted poster="./img/video-still.jpg">
    <source src="./video/social_media.mp4" type="video/mp4">
  </video>
  <h1>Join to our community</h1>
  <div class="text-center">
    <p class="d-inline-flex gap-1">
      <a class="btn btn-success" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">More Info</a>
    </p>
  </div>
  <div class="row">
    <div class="col">
      <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">
          <h2 class="text-success text-center">To be able to see, add, delete or update our content, you have to register first.</h2>
        </div>
      </div>
    </div>
  </div>

</section>
<!--  second section-->
  <h2 id="titleOne">Community Images</h2>
  <section class="list1">
    <div>
      <img src="./img/image1.jpg" alt="image1">
    </div>
    <div>
      <img src="./img/image2.jpg" alt="image2">
    </div>
    <div>
      <img src="./img/imagen4.jpg" alt="imagen3">
    </div>
  </section>
  <section class="list2">
    <div>
      <img src="./img/imagen6.jpg" alt="imagen5">
    </div>
    <div>
      <img src="./img/image5.jpg" alt="imagen6">
    </div>
    <div>
      <img src="./img/imagen7.jpg" alt="imagen7">
    </div>
  </section>
  <h3 id = "titleOne" class="titleTwo text-center">Upload your own image here</h3>
  <!--working the image Section -->
  <section class="form-row text-center">
    <form method='post' action='' enctype='multipart/form-data'>
      <p><input type='file' name='files[]' multiple /></p>
      <p><input class="btn btn-warning" type='submit' value='Submit' name='submit'/></p>
    </form>
  </section>
<!--  button to update imagen-->
  <div id = "final-button" class="text-center">
    <a href="View.php" class="btn btn-success">View Galley</a>
  </div>
</main>

<?php
  require './templates/footer.php';
?>