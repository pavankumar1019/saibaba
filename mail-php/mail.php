<?php
// $email=filter_input(INPUT_POST,"email");
// $message=filter_input(INPUT_POST,"mssg");
// 	$subject ="Sai baba";
// $from="pavankumar@sdcinstitution.com";
//     $headers = "From:".$email;
//     mail($email,$subject,$message,$headers);

$email=filter_input(INPUT_POST,"email");
$message=filter_input(INPUT_POST,"mssg");

$to = "pavan5639kumar@gmail.com";
$subject = "D.M Shirdi sai baba temple Trust";
$txt = $message;
$headers = "From: ".$email."\r\n";

mail($to,$subject,$txt,$headers);
?>
<script>
    alert("Thank You!!!!!");
    location.replace("index.html");
</script>
<?php

    ?>