<?php
//accessing the variables
$name = $_REQUEST['contact_name'];
$email = $_REQUEST['contact_email'];
$message = $_REQUEST['contact_message'];
//sending mail
mail('shoukkiya59@gmail.com', "message through shoukkiyaashraf.live ", $message, "From: $name <$email>");
echo "<script type='text/javascript'>alert('your message have been sent successfully'); window.history.log(-1);</script>"


?>