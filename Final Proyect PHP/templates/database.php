<?php
// setting up connection to the server
class database
{
    private $servername = "172.31.22.43";
    private $username = "Rodrigo200549271";
    private $password = "MVe9E-OiyJ";
    private $dbname = "Rodrigo200549271";
    public $con;
//connection function
    public function __construct()
    {
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to the database" . mysqli_connect_error());

        } else {
            return $this->con;
        }
    }
//    See the data function
    public function displayData(){
        $query = "SELECT * FROM admfinalproject";
        $result = $this->con->query($query);
        if($result->num_rows > 0){
            $data = array();
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }else{
            echo "<p>No records found!</p>";
        }
    }
//    display de data according to the ID
    public function displayRecordById($id){
        $query = "SELECT * FROM admfinalproject WHERE id = '$id'";
        $result = $this->con->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row;
        }else{
            echo "<p>No record found</p>";
        }
    }
//    function to update data from the table
    public function updateRecord($postData)
    {
        $fname = $this->con->real_escape_string($_POST['fname']);
        $lname = $this->con->real_escape_string($_POST['lname']);
        $age = $this->con->real_escape_string($_POST['age']);
        $email = $this->con->real_escape_string($_POST['email']);
        $username = $this->con->real_escape_string($_POST['username']);
        $id = $this->con->real_escape_string($_POST['id']);

        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE admfinalproject SET first_name ='$fname', last_name ='$lname', age ='$age', email='$email', username ='$username' WHERE id ='$id'";
            $sql = $this->con->query($query);

            if ($sql == true) {
                header("Location: ./display-table.php?msg2=update");
            } else {
                echo "<p>Update failed</p>";
            }
        }
    }

// Delete customer data from customer table
    public function deleteRecord($id){
        $query = "DELETE FROM admfinalproject WHERE id = '$id'";
        $sql   = $this->con->query($query);
        if($sql == true){
            header("Location: ./display-table.php?msg3=delete");
        }else{
            echo "<p>Could not delete the record</p>";
        }
    }



   }
?>

