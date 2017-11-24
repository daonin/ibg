<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) && isset($_POST['p']) ){
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$e = $_POST['e'];
	$m = nl2br($_POST['m']);
	$p = $_POST['p'];
	$to = "info@itbuildgroup.ru";
	$from = "info@itbuildgroup.ru";
	$subject = 'IBG Contact Form';
	$message = '<b>имя:</b> '.$n.' <br><b>email:</b> '.$e.' <br><b>тел:</b>'.$p.' <p>'.$m.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "Серверу не удалось отправить сообщение. Попробуйте позже.";
	}
}
?>