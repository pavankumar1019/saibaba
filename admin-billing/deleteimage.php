<?php
$files = glob('path/to/temp/*');
if (array_key_exists('delete_file', $_POST)) {
    $filename = $_POST['delete_file'];
    $createDeletePath = "insert-admin/images/".$filename;
    if (file_exists($createDeletePath)) {
        
     
      unlink($createDeletePath);
      ?>
      <script>
          alert("File has been Deleted!!!");
          window.location.href = "register.php";
          </script>
      <?php
    //   echo 'File '.$filename.' has been deleted';
    } else {
      echo 'Could not delete '.$filename.', file does not exist';
    }
  }
?>