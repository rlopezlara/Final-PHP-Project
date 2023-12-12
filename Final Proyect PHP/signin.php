<!--page to sign in once you are member-->

<?php
$pageTitle = 'Sign in | ProjectPHP Course';
$pageDesc = 'Page where you have to enter you password and username';
require './templates/header.php';


?>
<!-- Section form entered -->
    <section class="signin-form">
        <div>
            <h3 class="text-warning">Sign in below</h3>
            <form method="post" action="./templates/validate.php">
                <p><input name="username" type="text" placeholder="Username" required></p>
                <p><input name="password" type="password" placeholder="Password" required></p>
                <p>Register <a href="register.php" class="text-danger">here!!!</a></p>
                <input class="btn btn-success" type="submit" value="Login">
            </form>
        </div>
    </section>

      <?php
  require './templates/footer.php'
?>