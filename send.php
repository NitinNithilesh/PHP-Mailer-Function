<?php

$from=$_POST['from'];
$msg=$_POST['message'];

$to      = 'nitinnithilesh2898@gmail.com';
$subject = 'The subject';
$message = $msg;
$headers = '';

mail($from, $subject, $message, $headers);
?> 