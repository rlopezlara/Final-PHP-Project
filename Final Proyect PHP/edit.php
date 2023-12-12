<?php
$pageTitle = 'Edit page | PHP Course';
$pageDesc = 'Here you can edit user information';
// Edit page which allow the user modify data
require './templates/header.php';
include './templates/database.php';

$customerObj = new database();
//edit the record
if(isset($_GET['editId']) && !empty($_GET['editId'])){
    $editId = $_GET['editId'];
    $customer = $customerObj-> displayRecordById($editId);
}
//update our record
if(isset($_POST['update'])){
    $customerObj->updateRecord($_POST);
}
?>
<!--background image-->
<section class="background-image">
    <div>
        <h2>Update user information</h2>
    </div>
</section>
<!--table to edit the data-->
<section id="edit-page" class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-success">
                    <h4 class="text-black">Update Records</h4>
                </div>
                <div class="card-body bg-light">
                    <form action="edit.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="fname" value="<?php echo $customer['first_name'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" name="lname" value="<?php echo $customer['last_name'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control" name="age" value="<?php echo $customer['age'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $customer['email'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label for="username">Usarnme:</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $customer['username'];?>" required="">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
                            <br>
                            <input type="submit" name="update" class="btn btn-primary bg-success" value="Update">
                            <a href="display-table.php" class="btn btn-warning">Go Back</a>
                        </div>
                        <div class="text-center">

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