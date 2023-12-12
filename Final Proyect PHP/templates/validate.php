<?php
//validate page to access the page if the user is log in
session_start();

$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);

require 'database.php';
$customerObj = new database();

// validate the password and user is the same
$sql = "SELECT id FROM admfinalproject WHERE username = '$username' AND password = '$password'";
$result = $customerObj->con->query($sql);

$count = $result->num_rows;

if ($count == 1) {
    echo '<p> Logged in Successfully</p>';
    foreach ($result as $row) {
        $_SESSION['id'] = $row['id'];
        header('Location: ../display-table.php');
        header('Location: ../index2.php');
    }
} else {
    echo '<p id="error-message">Password or Username Incorrect!</p>';
    echo '<button type="button" class="btn btn-warning">
    <a href="../signin.php">Try again</a>
    </button>';
}

$customerObj->con->close();
?>
