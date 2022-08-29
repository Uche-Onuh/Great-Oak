<?php
require_once "Mail.php";
require_once ('Mail/mime.php');

$name = $_POST['postname'];
$mail = $_POST['postemail'];
$tel = $_POST['posttel'];
$subject = $_POST['postsubject'];
$message = $_POST['postmessage'];

if (empty($name) || empty($mail) || empty($tel) || empty($subject) || empty($message)) {
	echo "1";
}elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	echo "2";
} elseif (!preg_match("/^[0-9]+$/", $tel)){
	echo "3";
} else {
    $from = $mail;
    $to = "info@greatoak.com.ng";

    $headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

    $text = '';
    $html = "<html><body>
        Name: $name <br> 
        Email: $email <br>
        Phone: $tel <br>
        Message: $message <br></body></html>";

    $crlf = "\n";

    $mime = new Mail_mime($crlf);
    $mime->setTXTBody($text);
    $mime->setHTMLBody($html);

    $body = $mime->get();
    $headers = $mime->headers($headers);

     $host = "localhost";
     $username = "greatoak";
     $password = "sTd+1kAN323v!Y";

    $smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
    'username' => $username,'password' => $password));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
      echo "4";
    } else {
	    echo "0";
	}
}

?>