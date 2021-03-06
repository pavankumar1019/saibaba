<?php include("db/fetch_gateway.php");?>
<?php
if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
	//Request hash
	$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';	
	if(strcasecmp($contentType, 'application/json') == 0){
		$data = json_decode(file_get_contents('php://input'));
		$hash=hash('sha512', $data->key.'|'.$data->txnid.'|'.$data->amount.'|'.$data->pinfo.'|'.$data->fname.'|'.$data->email.'||||'.$data->udf4.'|'.$data->udf5.'||||||'.$data->salt);
		$json=array();
		$json['success'] = $hash;
    	echo json_encode($json);
	
	}
	exit(0);
}
 
function getCallbackUrl()
{
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'response.php';
}

?>

                                <!-- HTML Template By Pavan -->

<!DOCTYPE >
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

                            <!-- BOLT Sandbox/test //-->
<!-- <script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js"></script> -->

<script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js"></script>

                            <!-- BOLT Production/Live //-->
<!--// script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" ></script //-->



    <!-- Title Page-->
    <title>DM Shri Shirdi Sai </title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading" style=" background: url('download.jpg') center center/cover no-repeat;"></div>
                <div class="card-body">
                    <h2 class="title">DM Shri Shirdi Sai Baba Temple Trust</h2>
                     <h2  class="title">Hundi</h2>
                    <form  id="payment_form" action="#">
                        <div class="input-group">

                        <!-- Hiddent Input Fields in the  payment gate way -->
                                  
                                    <input class="input--style-1" type="hidden" id="surl" name="surl" value="<?php echo getCallbackUrl(); ?>" />
                                    <input class="input--style-1" type="hidden" id="key" name="key" placeholder="Merchant Key" value="<?php echo $merchent_key; ?> "/>
                                    <input class="input--style-1" type="hidden" id="salt" name="salt" placeholder="Merchant Salt" value="<?php echo $merchent_salt; ?>" />
                                    <input class="input--style-1" type="hidden" id="txnid" name="txnid" placeholder="Transaction ID" value="<?php echo  "Txn" . rand(10000,99999999)?>" />
                                    <input type="hidden" id="pinfo" name="pinfo" placeholder="Product Info" value="hundi" />
                                     
                                    <input class="input--style-1" type="hidden" id="hash" name="hash" placeholder="Hash" value="" />

                                    <!-- Dispaly Fileds for the payment  gateway -->
                            <input class="input--style-1" type="text" id="fname" name="fname" placeholder="FULL NAME" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1"  type="text" id="mobile" name="mobile" onkeypress="return isNumber(event)" name="fname" placeholder="MOBILE NUMBER" required>
                        </div>
                    
                        <div class="row row-space">
                          

<!-- date -->

                             <label>Ammount:-</label>

                            <div class="input-group">
                            <input class="form-control" type="text" id="amount" name="amount" onkeypress="return isNumber(event)" placeholder="Amount" /> 
                            <input class="form-control"  type="hidden" id="udf5" name="udf5" value="---" />
                                </div>
                                <label>Address:-</label>
                         <div class="input-group">
                                <input class="form-control"  type="text" id="udf4" name="udf4" placeholder="Your Address" value="" />
                          </div>
                               
                                
                        </div>
                       <!-- Abishakam and Archana -->
                       <!-- <label>Price:-</label> -->
                        <!-- <div class="row row-space">
                            
                            <select class="form-control"  id="amount2"   onChange="check();" name="amount2"  required> 
                                            <option selected value="0.00">0.00</option>
                                            <option value="250.0">500.0</option>
                                            <option value="500.0">1000.0</option>
                                            <option value="700.0">1500.0</option>
                                            </select>
                            
                        </div> -->
                             <div class="p-t-20">
                             <ul class="list-group">
                                        <li  class="list-group-item">NOTE:- Take a Print Of Receipt after successfull payment</li>
                                         </ul>
                             <input class="btn btn-info" type="submit"  value="Pay" onclick="launchBOLT(); return false;" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
  

<!--  for number validate -->
<script>
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
// function check() {
//  document.getElementById("amount").value = document.getElementById("amount2").value ;
// } 
</script>

            <!-- Jquery for the payment function and the hash generator  -->
<script type="text/javascript">
$('#payment_form').bind('keyup blur', function(){
	$.ajax({
          url: 'index.php',
          type: 'post',
          data: JSON.stringify({ 
            key: $('#key').val(),
			salt: $('#salt').val(),
			txnid: $('#txnid').val(),
		    pinfo: $('#pinfo').val(),
            fname: $('#fname').val(),
			email: $('#email').val(),
			mobile: $('#mobile').val(),
            amount:$('#amount').val(),
            udf5: $('#udf5').val(),
            udf4: $('#udf4').val()
			}),
		  contentType: "application/json",
          dataType: 'json',
          success: function(json) {
            if (json['error']) {
			 $('#alertinfo').html('<i class="fa fa-info-circle"></i>'+json['error']);
            }
			else if (json['success']) {	
				$('#hash').val(json['success']);
            }
          }
        }); 
});
//-->
</script>
<script type="text/javascript">
function launchBOLT()
{
	bolt.launch({
	key: $('#key').val(),
	txnid: $('#txnid').val(), 
	hash: $('#hash').val(),
	amount: $('#amount').val(),
	firstname: $('#fname').val(),
	email: $('#email').val(),
	phone: $('#mobile').val(),
	productinfo: $('#pinfo').val(),
	udf5: $('#udf5').val(),
    udf4: $('#udf4').val(),
	surl : $('#surl').val(),
	furl: $('#surl').val(),
	mode: 'dropout'	
},{ responseHandler: function(BOLT){
	console.log( BOLT.response.txnStatus );		
	if(BOLT.response.txnStatus != 'CANCEL')
	{
		//Salt is passd here for demo purpose only. For practical use keep salt at server side only.
		var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +
		'<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
		'<input type=\"hidden\" name=\"salt\" value=\"'+$('#salt').val()+'\" />' +
		'<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
		'<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
		'<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
		'<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
		'<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
		'<input type=\"hidden\" name=\"udf4\" value=\"'+BOLT.response.udf4+'\" />' +
        '<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
		'<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
		'<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
		'<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
		'</form>';
		var form = jQuery(fr);
		jQuery('body').append(form);								
		form.submit();
	}
},
	catchException: function(BOLT){
 		alert( BOLT.message );
	}
});
}

</script>	
</body>

</html>
<!-- end document-->
