<?php
$pageTitle = 'User adm | ProjectPHP Course';
$pageDesc = 'Now you will be able to update and delete user';
//Saving data once you register
require './templates/database.php';



$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];


$ok = true;
require './templates/header.php';
if(empty($first_name)){
    echo '<p>First name is needed</p>';
    $ok = false;
}
if(empty($last_name)){
    echo '<p>Last name is needed</p>';
    $ok = false;
}
if(empty($username)){
    echo '<p>Username is needed</p>';
    $ok = false;
}
if(empty($age)){
    echo '<p>Age is needed</p>';
    $ok = false;
}
if(empty($email)){
    echo '<p>Email is needed</p>';
    $ok = false;
}
if((empty($password)) || ($password != $confirm)){
    echo '<p>Password is invalid</p>';
    $ok = false;
}
$databaseObj = new database();
//	saving in the SQL
if($ok){
    $password = hash('sha512', $password);
//query to save the data
    $sql = "INSERT INTO admfinalproject (first_name, last_name, age, email, username, password) VALUES ('$first_name','$last_name','$age',
		'$email','$username','$password');";
//    $con->exec($sql);
    $databaseObj->con->query($sql);
    echo '<section class="success-row text-center"';
    echo '<div>';
    echo '<h3>New Member registrated</h3>';
    echo '</div>';
    echo '</section>';

    $con = null;
}

?>
<!-- welcome page -->
<section class="row success-back-row">
    <div class="text-center">
        <p>Thanks to join us, please click the button below to see our teams!</p>
        <a href="signin.php" class="btn btn-primary">Sign In</a>
    </div>
</section>
<?php require './templates/footer.php'; ?>
