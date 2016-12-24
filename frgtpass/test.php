<?php

$message = "this is a test" ;
$header = "From: sumon.animator@gmail.com";
mail("sumon.animator@yahoo.com", "testing", $header, $message);

echo "sent email";
?>