
<?php

$from=$_POST['from'];
$msg=$_POST['message'];

$to = "nitinnithilesh2898@gmail.com";
$subject = $from;
$txt = $msg;
$a="From: ";
$headers = '';

mail($to,$subject,$txt,$headers);

?>
