<?php

$result = mail("adel4ikok@gmail.com", "Данные с анкеты", "С анкеты были получены следующие данные: \nИмя: $_POST[name] \nПароль: $_POST[password] \nАнкетируемый счастлив?: $_POST[happy] \nСпит: $_POST[sleep] часов \nМысли о сне: $_POST[text]");

	if ($result) {
		echo "<p>Сообщение отправлено успешно!</p>";

		}

	else {
	 	echo "<p>Сообщение не отправлено!</p>";

		}
 
 
	?>