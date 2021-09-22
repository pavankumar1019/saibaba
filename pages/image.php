<section>
<h1 class="mt-5">Image Gallery</h1><hr>
<div id="gallery" class="container-fluid">  
 
<?php
$imagesDirectory = "./admin-uploads-to-website/insert-admin/images/";

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

        
  <?php echo "<img  class='img-responsive gal' src='./admin-uploads-to-website/insert-admin/images/".$image."'> ";?>                       
<?php





		}
    }
	
    closedir($opendirectory);
 
}
?>
          
</div>
</section>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        asdasd
      </div>
    </div>

  </div>
</div>