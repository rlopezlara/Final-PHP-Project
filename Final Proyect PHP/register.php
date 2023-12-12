<?php

$pageTitle = 'Register form | ProjectPHP Course';
$pageDesc = 'In this page you can create an user and password';
require './templates/header.php';
?>
    <div class="background-video-container">
    <video class="background-video2" autoplay loop muted poster="./img/background.jpg">
        <source src="./video/backgraund-register.mp4" type="video/mp4">
    </video>
<section class="form-register">
    <div>
<!--    register page to create a new account -->
        <h3 id="titleTwo">CREATE AN ACCOUNT.</h3>
        <form method="post" action="save-admin.php">
            <p><input name="first_name" type="text" placeholder="First Name" required></p>
            <p><input name="last_name" type="text" placeholder="Last Name" required ></p>
            <p><input name="age" type="number" placeholder="Your Age" required ></p>
            <p><input name="email" type="email" placeholder="Email" required ></p>
            <p><input name="username" type="text" placeholder="Username" required ></p>
            <p><input name="password" type="password" placeholder="Password" required ></p>
            <p><input name="confirm" type="password" placeholder="Confirm Password" required></p>
            <input class="btn-1" type="submit" name="submit" value="Register">
        </form>
    </div>
</section>
    </div>
<!--connection to a global footer-->
<?php
require './templates/footer.php';
?>