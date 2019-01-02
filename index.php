<?php
/*
	// Основы PHP. Массивы
	echo "<h1>ДЗ &ldquo;Основы PHP. Массивы&rdquo;</h1>";
	echo "<h2>Книги:</h2>";

	$books = array(
		'451° по Фаренгейту',
		'Шантарам',
		'1984',
		'Мастер и Маргарита',
		'Три товарища',
		'Портрет Дориана Грея',
		'Вино из одуванчиков',
		'Цветы для Элджернона',
		'Над пропастью во ржи',
		'Маленький принц',
		'Анна Каренина',
		'Сто лет одиночества',
		'Тень горы',
		'Атлант расправил плечи',
	);

	echo "<ol>";
	for ( $i=0; $i < count($books); $i ) { 
		$i++;
		echo "<li>$books[$i]</li>";
	}
	echo "</ol>";

	// ДЗ Основы PHP. Ассоциативные массивы
	echo "<h1>ДЗ &ldquo;Основы PHP. Ассоциативные массивы&rdquo;</h1>";
	echo "<h2>Список книг c авторами:</h2>";

	$booksWithAuthors = array(
		"Рей Брэдбери" => ["451° по Фаренгейту", "Вино из одуванчиков"],
		"Грегори Дэвид Робертс" => ["Шантарам", "Тень горы"],
		"Джордж Оруэлл" => "1984",
		"Михаил Афанасьевич Булгаков" => "Мастер и Маргарита",
		"Эрих Мария Ремарк" => "Три товарища",
		"Оскар Уайльд" => "Портрет Дориана Грея",
		"Даниел Киз" => "Цветы для Элджернона",
		"Джером Д. Сэлинджер" => "Над пропастью во ржи",
		"Антуан де Сент-Экзюпери" => "Маленький принц",
		"Лев Толстой" => "Анна Каренина",
		"Габриэль Гарсиа Маркес" => "Сто лет одиночества",
		"Айн Рэнд" => "Атлант расправил плечи"
	);

	echo "<ol>";
	foreach ($booksWithAuthors as $author => $book ) {
		if ( is_array( $book )) {
			echo "<li><b>$author</b>: ";
			echo "<ul>";
			foreach ( $book as $oneBook) {
				echo "<li>$oneBook</li>";
			}
			echo "</ul>";
			echo "</li>";
		} else {
			echo "<li><b>$author</b>: $book</li>";
		}
	}
	echo "</ol>";
	
	// Function greeting()
	function greeting($dayOfWeek, $name = "Guest") {
		switch ($dayOfWeek) {
			case '1':
			case '2':
			case '3':
			case '4':
			case '5':
				echo "Привет $name! Хорошего и продуктивного рабочего дня!";
				break;
			case '6':
			case '7':
				echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
				break;
			default:
				echo "Привет $name! Нет такого дня недели!";
				break;
		}

	}
	// End - Function greeting()

	greeting(7, "учитель");
*/
?>
<a href="feedback-form.html">ДЗ &ldquo;Простая форма обратной связи&rdquo;</a>