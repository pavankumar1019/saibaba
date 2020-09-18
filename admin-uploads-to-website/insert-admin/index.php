<!-- APP: Ajax Image uploader with progress bar
	Website:packetcode.com
	Author: Krishna TEja G S
	Date: 29th April 2014
	-->
<html>
<head>
	<title>Shri Shirdi Saibaba Temple</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css" >
	<Script src="http://code.jquery.com/jquery-2.1.1-rc2.min.js" ></script>
	<script src="http://malsup.github.com/jquery.form.js"></script> 
	<script src="script.js"></script>
</head>	
<body>
	<div class="container-main">
<h1>Image Uplode Here!!</h1>
<p>“If you honor your mother, the mother of the universe will guard you against harm.”
Sai Baba.</p>

<form action="upload.php" method="post" id="myForm"
enctype="multipart/form-data">
<label for="file">Choose Your Photo</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" class="btn btn-success" value="Upload Image">
</form>

<div class="progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="0" aria-valuemin="0" 
  aria-valuemax="100" style="width: 0%">
    <span class="sr-only">0% Complete</span>
  </div>
</div>
<div class="image"></div>
</div>
</body>
</html>