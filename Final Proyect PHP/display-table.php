<?php
// display the table is the section is initialized
session_start();

if (!isset($_SESSION['id'])) {
  header('location: signin.php');
  exit();
} else {
    $pageTitle = 'User Setting| PHP Course';
    $pageDesc = 'Here you can edit user information';
    require './templates/header.php';
  // add lesson code here
    include './templates/database.php';

$customerObj = new database();
//delete the record from the table
if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])){
    $deleteId = $_GET['deleteId'];
    $customerObj->deleteRecord($deleteId);
    }
?>
<!--  this table will show user information available to modify or delete-->
  <main class="container-display">
    <?php


    if(isset($_GET['msg2']) == "update"){
      echo "
            <div class='alert alert-success alert-dismissible fade show'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <h3>Information User Update</h3>
            </div>
            ";
    }
    if(isset($_GET['msg3']) == "delete"){
      echo "
            <div class='alert alert-danger alert-dismissible fade show'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <h3>User Delete</h3>
            </div>
            ";
    }
    ?>
    <section>
      <h2 id="titleThree" class="titleTwo text-black">Because you are registered, you can update and delete users</h2>
      <table class="table table-hover table-blue table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>First Name</th>
          <th>Last name</th>
          <th>Age</th>
          <th>Email</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
//         display de information
        $customers = $customerObj->displayData();
        foreach($customers as $customer){
          ?>
          <tr>
          <td><?php echo $customer['id']; ?></td>
          <td><?php echo $customer['first_name']; ?></td>
          <td><?php echo $customer['last_name']; ?></td>
          <td><?php echo $customer['age']; ?></td>
          <td><?php echo $customer['email']; ?></td>
          <td><?php echo $customer['username']; ?></td>
          <td>
<!--            two button for delete or modify-->
            <button type="button" class="btn btn-success">
              <a href="edit.php?editId=<?php echo $customer['id'];?>"> <i class="bi bi-pencil-square"></i>
              EDIT
              </a>
            </button>
            <button type="button" class="btn btn-danger">
              <a href="display-table.php?deleteId=<?php echo $customer['id'];?>" onclick="confirm('Are you really sure you want to delete this?')">
                <i class="bi bi-person-x"></i> DELETE
              </a>
            </button>
          </td>
        </tr>
        <?php
        }

        ?>
        </tbody>
      </table>
    </section>
    <button type="button" class="btn btn-warning">
    <a href = "logout.php"> <i class="bi bi-box-arrow-left" onclick="confirm('Are you sure you want to leave this section?')"></i> Logout</a>
    </button>
  </main>

<?php
require './templates/footer.php';
}
?>