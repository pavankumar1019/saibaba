<?php

//process.php

$connect = new PDO("mysql:host=localhost; dbname=u430139865_ydyp", "u430139865_ydyp", "pavan5639");
try {
if(isset($_POST["first_name"]))
{
    $image = $_FILES['image']['name'];
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

  $text = trim($_POST["last_name"]),


 $query = "
 INSERT INTO images 
 (image, text) 
 VALUES ('$text','$image')
 ";

 $statement = $connect->prepare($query);

 $statement->execute($data);

 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    echo 'done';
}else{
    echo 'fail';
}
}
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }

?>