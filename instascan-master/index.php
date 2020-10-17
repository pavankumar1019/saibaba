<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>How to use Instascan an HTML5 QR scanner</title>
	<link rel="shortcut icon" href="https://learncodeweb.com/demo/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<div class="bg-light border-bottom shadow-sm sticky-top">

  </div>

  <div class="container-fluid d-flex justify-content-center">
  <div class="card " style="width: 18rem;">
  <video id="preview" class="card-img-top" style="width:100%;"></video>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  	<div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
				  <label class="btn btn-primary active">
					<input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
				  </label>
				  <label class="btn btn-secondary">
					<input type="radio" name="options" value="2" autocomplete="off"> Back Camera
          </label>
          <audio style="display:none" id="myAudio" controls autoplay>
  <source src="beep-06.mp3" type="audio/mpeg">
</audio>

<audio style="display:none" id="myAudio1" controls autoplay>
<source src="preview.mp3" type="audio/mpeg">
</audio>
				</div>
  </div>
</div>
</div>
  
				
			<div class="col">
				<script src="src/instascan.min.js"></script>
				<h1><a id="resul"></a></h1>
				<script type="text/javascript">
					var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: true });
					scanner.addListener('scan',function(content){
            // alert(content);
            var x= document.getElementById("myAudio")
            x.autoplay = true;
             x.load();
            document.getElementById("resul").innerHTML+="&nbsp"+content;


            // for Thank You Voice
            // if(content="pavan"){
            //   var y= document.getElementById("myAudio1")
            // y.autoplay = true;
            //  y.load();
            // }
          
						//window.location.href=content;
					});
					Instascan.Camera.getCameras().then(function (cameras){
						if(cameras.length>0){
							scanner.start(cameras[0]);
							$('[name="options"]').on('change',function(){
								if($(this).val()==1){
									if(cameras[0]!=""){
										scanner.start(cameras[0]);
									}else{
										alert('No Front camera found!');
									}
								}else if($(this).val()==2){
									if(cameras[1]!=""){
										scanner.start(cameras[1]);
									}else{
										alert('No Back camera found!');
									}
								}
							});
						}else{
							console.error('No cameras found.');
							alert('No cameras found.');
						}
					}).catch(function(e){
						console.error(e);
						alert(e);
					});
				</script>
			
			</div>
									
		</div>
	</div>
	
</body>
</html>
