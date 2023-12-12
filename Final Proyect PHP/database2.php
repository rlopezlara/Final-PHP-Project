<?php
class database2{
    private $servername = '172.31.22.43';
    private $username = 'Aleksandr200544581';
    private $password = 'PKpf0BU5Lv';
    private $dbname = 'Aleksandr200544581';
    public $con;

    public function __construct()
    {
        $this->con = new mysqli(
            $this->servername, $this->username, $this->password,
            $this->dbname
        );
        if (mysqli_connect_error()) {
            trigger_error(
                "Failed to connect to the database2" .
                mysqli_connect_error()
            );
        } else {
            return $this->con;
        }
    }
    public function insertData($post)
    {
        $price = $this->con->real_escape_string($_POST['price']);
        $size_picture = $this->con->real_escape_string($_POST['size_picture']);
        $date_add = $this->con->real_escape_string($_POST['date_add']);
        $resolution=$this->con->real_escape_string($_POST['resolution']);
        $query = "INSERT INTO instock(price, size_picture, date_add, resolution) VALUES ('$price', '$size_picture',
        '$date_add', '$resolution')";
        $sql = $this->con->query($query);
        if ($sql == true) {
            header("Location:index2.php?msg1=insert");
        } else {
            echo "<p>Could not add record</p>";
        }
    }
    public function displayData()
    {
        $query = "SELECT * FROM instock";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "<p>No records found!</p>";
        }
    }
    public function displayRecordById($id)
    {
        $query = "SELECT * FROM instock WHERE id = '$id'";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            echo "<p>No record found</p>";
        }
    }

    public function updateRecord($postData)
    {
        $price = $this->con->real_escape_string($_POST['uprice']);
        $size_picture = $this->con->real_escape_string($_POST['usize_picture']);
        $date_add = $this->con->real_escape_string($_POST['udate_add']);
        $resolution=$this->con->real_escape_string($_POST['uresolution']);
        $id = $this->con->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE instock SET price='$price', size_picture='$size_picture', date_add='$date_add',
                   resolution='$resolution' WHERE id='$id' ";
            $sql = $this->con->query($query);

            if ($sql == true) {
                header("Location:index2.php?msg2=update");
            } else {
                echo "<p>Update failed</p>";
            }
        }
    }

    public function deleteRecord($id){
        $query="DELETE FROM instock WHERE id='$id'";
        $sql=$this->con->query($query);
        if($sql==true){
            header("Location:index2.php?msg3=delete");
        }
        else{
            echo "<p>Could not delete the record</p>";
        }
    }
}
?>