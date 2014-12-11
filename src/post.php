<?php
 // the variables that are sent from the javascript 
 $n=$_POST['name']; 
 $e=$_POST['email']; 
 $m=$_POST['message']; 
 $i=$_POST['ip']; 

 // settings and contents of the email 
 $to = 'jana@coachingexcellence.cz'; 
 $subject = 'Zpráva webového formuláře'; 
 $message = 'Message from: '.$n.'
IP:'.$i.'
Email: '.$e.'

Zpráva:
'.$m; 

 // send the email 
 mail($to, $subject, $message);
?>