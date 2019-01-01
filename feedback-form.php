<?php

	echo "<strong>_POST array:</strong><br>";
	print_r($_POST);
	echo "<br>";

	if ( !empty($_POST) ) {

		if ( !empty($_POST['userName']) && !empty($_POST['userEmail']) && !empty($_POST['message'])) {
			
			$message = "Вам пришло новое сообщение с сайта: \n "
			. "Имя отправителя: {$_POST['userName']}\n"
			. "Email отправителя: {$_POST['userEmail']}\n"
			. "Сообщение:\n {$_POST['message']}";

			$headers = "From: info@webcademy.ru";

			$resultMail = mail("info@rightblog.ru", "Сообщение пользователя", $message, $headers);

			if ( $resultMail ) {
				echo "Сообщение отправлено успешно!";
			} else {
				echo "Что-то пошло не так. Письмо не отправлено.";
			}

		} else {
			echo "Заполните все поля!";
		}

	}

?>

<form action="feedback-form.php" method="post">
	<input type="text" name="userName" placeholder="Ваше имя"><br>
	<input type="text" name="userEmail" placeholder="Ваш Email"><br>
	<textarea name="message" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
	<input type="submit" value="Отправить форму!">
</form>

<?php

/*	$userName = 'mike';
	$userPass = '123456';

	if ( !empty($_POST) ) {
		if ($_POST['login'] == $userName) {
			echo "Login is correct... <br>";
			echo "проверяем пароль... <br>";

			if ($_POST['password'] == $userPass) {
				echo "Password is correct... <br>";
				echo "Добро пожаловать на сайт. <br>";
			} else {
				echo "Пароль неверен<br>";
			}

		} else {
			echo "Логин неверен<br>";
		}
	}*/

?>