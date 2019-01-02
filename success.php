<!-- ДЗ Post и Get запросы -->
<?php

	if ( !empty($_POST) ) {

		if ( !empty($_POST['userName']) && !empty($_POST['userEmail']) && !empty($_POST['message'])) {
			
			$message = "Вам пришло новое сообщение с сайта: \n "
			. "Имя отправителя: {$_POST['userName']}\n"
			. "Email отправителя: {$_POST['userEmail']}\n"
			. "Сообщение:\n {$_POST['message']}";

			$headers = "From: info@webcademy.ru";

			$resultMail = mail("info@rightblog.ru", "Сообщение пользователя", $message, $headers);

			if ( $resultMail ) {
				echo "Форма отправлена успешно!";
			} else {
				echo "Что-то пошло не так. Письмо не отправлено.";
			}

		} else {
			echo "Заполните все поля!";
		}

	}

?>

<br><br>
<a href="feedback-form.html">ДЗ &ldquo;Простая форма обратной связи&rdquo;</a>