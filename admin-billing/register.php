<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



<html>
<head>
<style>
#table-scroll {
  height:400px;
  overflow:auto;  
  margin-top:20px;
}
</style>
</head>
<body>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Your Images 
         
    </h6>
  </div>

  <div class="card-body">
  <div id="table-scroll">
    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="text-center">
          <tr>
            <th colspan="6">Your Photos</th>
        
          </tr>
        </thead>
        <tbody>
     
          <?php
$imagesDirectory = "insert-admin/images/";

if (is_dir($imagesDirectory))
{
	$opendirectory = opendir($imagesDirectory);
  
    while (($image = readdir($opendirectory)) !== false)
	{
		if(($image == '.') || ($image == '..'))
		{
			continue;
		}
		
		$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
		
		if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
		{
      ?>
      
      <tr>
    <td>
      <div class="container-fluid" >
<?php

 echo "<img src='insert-admin/images/".$image."' width='200'> ";
echo '<form method="post" action="deleteimage.php">';
echo '<input type="hidden" value="'.$image.'" name="delete_file" />';
echo '<input type="submit" class="float-right btn btn-primary" value="Delete image" />';
echo '</form>';

//  echo "<button onclick='productDelete()'>hellow</button> filename:" . $image . "<br>";
?>

</div>
    </td>
    </tr>
      <?php
     
		}
    }
	
    closedir($opendirectory);
 
}
?>

          </tr>
        
        </tbody>
      </table>

    </div>
  </div>
</div>
</div>
</div>
</body>
</html>
<!-- /.container-fluid -->
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>