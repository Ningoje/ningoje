<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $sub = trim(strip_tags($_POST['sub']));
        $bodytxt= htmlentities($_POST['bodytxt]);

       // set here
       $subject = "Contact form submitted!";
       $to = 'dennismutku474@gmail.com';

       $body = <<<HTML
$message
HTML;

       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       header('Location: Home.html');
?>