<?php

include('conn/connection.php');
// Create connection
if (isset($_POST['update'])){
    $id = $_POST['delete_file'];
    $sql = "DELETE FROM tbl_sample WHERE last_name='$id' ";
       if (mysqli_query($conn, $sql)) {
        ?>
        <script>
            alert("File has been Deleted!!!");
            window.location.href = "video.php";
            </script>
        <?php
      } else {
        ?>
        <script>
        alert("Failed!!!");
        window.location.href = "video.php";
        </script>
        <?php
      }
      
      mysqli_close($conn);
	// header('location: index.php');
}
?>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "Pavan1019";
// $dbname = "sai";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// // sql to delete a record
// $sql = "DELETE FROM tbl_sample WHERE  last_name=$id";

// if (mysqli_query($conn, $sql)) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . mysqli_error($conn);
// }

// mysqli_close($conn);
?>
