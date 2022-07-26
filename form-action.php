<?php
 $firstname = @$_POST['fname'];
 $lastname = @$_POST['lname'];
 $message = @$_POST['exampleFormControlTextarea1'];
 $email = @$_POST['email'];
 $to = 'riyakshah2002@gmail.com';
 $subject = 'My Portfolio';

 $msg = "Name: $firstname.\n" . 
 "Surname: $lastname .\n" . 
 "Email: $email\n" . 
 "message: $message" ;

 echo "Thank you! We received the following information from you:<br>$firstname<br>$lastname<br>$email<br>$message<br><br>Have a great day!"; 

 mail ( $to, $subject , $msg, 'From:' . $email);
?>

<a href="index.php">Back to the Home page</a>