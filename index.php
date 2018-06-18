<h2>POST отправка</h2>

<?php
if ( !empty($_POST) ) {

	$message = "You have new message from your site: \n" 
	. "Имя отправителя: " . $_POST["userName"] . "\n"
	. "Email отправителя: " . $_POST["userMail"] . "\n"
	. "Сообщение отправителя:  \n" . $_POST['Message'];

	$headers = "From: myMail@mySite.ru";

	$mailSend = mail( "atoom@mail.ru", "Message from my site", $message );

	if( $mailSend ){
		echo "Сообщение отправлено успешно!";
	}else{
		echo "Где-то произошла ошибка!";
	}
}
?>

<form action="index.php" method="post">
	<input type="text" name="userName" placeholder="Имя"><br><br>
	<input type="email" name="userMail" placeholder="Ваш Email"><br><br>
	<textarea name="Message" placeholder="Сообщение" cols="30" rows="5"></textarea><br><br>
	<input type="submit" value="Отправить">
</form>






