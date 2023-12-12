<!--Log out setting -->
<?php
require './templates/header.php';

session_start();

session_unset();

session_destroy();

header('location:index.php');

require './templates/footer.php';

?>