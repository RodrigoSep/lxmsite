<?php
 
    $to = "carlosgzz93@gmail.com"; 
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name']; 
    $headers = "From: $from"; 
    $subject = "Mensaje de Pagina Latiendo Por México"; 
 
    $fields = array(); 
    $fields{"name"} = "name"; 
    $fields{"email"} = "email"; 
    $fields{"phone"} = "phone"; 
    $fields{"message"} = "message";
 
    $body = "Mensaje:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
    $send = mail($to, $subject, $body, $headers);
 
?>