<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = "From: $email\r\n"; 
    $from .= "Content-type: text/html\r\n";
    $to = '17isaacsilva@gmail.com'; 
    
    
			
    $body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
				
    if ($_POST['submit']) {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent! <br> Thank you for your interest!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } 
?>