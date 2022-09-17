<?php
function myEcho(string $str)
{
	echo nl2br("\n".$str);
}
session_start();

if (
	array_key_exists('surname', $_POST)
	&& array_key_exists('name', $_POST)
	&& array_key_exists('age', $_POST)
)
{
	$_SESSION['surname'] = $_POST['surname'];
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['age'] = $_POST['age'];
	header('Location: b.php');
}
elseif (
	array_key_exists('name', $_POST)
	&& array_key_exists('payment', $_POST)
	&& array_key_exists('age', $_POST)
	&& array_key_exists('breakfast', $_POST)
)
{
	$_SESSION['c'] = [
		'name' => $_POST['name'],
		'age' => $_POST['age'],
		'payment' => $_POST['payment'],
		'breakfast' => $_POST['breakfast'],
	];
	header('Location: c.php');
}

myEcho("1. Регулярные выражения");
myEcho("a. Напишите регулярку, которая найдет строки 'abba', 'adca', 'abea' по шаблону: буква 'a', два любых символа, буква 'b'. Пример строки: \$str = 'ahb acb aeb aeeb adcb axeb';");
$str = 'ahb acb aeb aeeb adcb axeb';
$matches = [];
preg_match_all('/(a..b)/', $str, $matches);
print_r($matches[0]);
myEcho("b. Дана строка с целыми числами 'a1b2c3'. С помощью регулярки преобразуйте строку так, чтобы вместо этих чисел стояли их кубы");
myEcho(preg_replace_callback('/\d/',function ($matches) {return $matches[0]**3;}, 'a1b2c3'));

myEcho("\n2. Форма. Сессии и Куки");
myEcho('a. Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку выведите количество слов и количество символов в тексте.');
myEcho('');
echo '<form action="" method="post">
    	<textarea rows="4" cols="35" name="content1"></textarea>
    	<input type="submit" value="Отправить">
  	  </form>';
if (array_key_exists('content1', $_POST))
{
	$text = $_POST['content1'];
	$matches = [];
	preg_match_all('/\w+/', $text, $matches);
	myEcho('Слов: ' . count($matches[0]) . '. Символов: ' . strlen($text) . '.');
}
myEcho('b. На одной странице с помощью формы спросите у пользователя фамилию, имя и возраст. Запишите эти данные в сессию. При заходе на другую страницу выведите эти данные на экран');
echo '<form action="" method="post">
		<p>Введите фамилию<p>
    	<input type="text" name="surname"/>
    	<p>Введите имя<p>
    	<input type="text" name="name"/>
    	<p>Введите возраст<p>
    	<input type="text" name="age"/>
    	<input type="submit" value="Отправить">
  	  </form>';

echo '<a href="b.php">Перейти к просмотру</a>';
myEcho('c. На одной странице с помощью формы спросите у пользователя имя, возраст, зарплату и еще что-нибудь. Запишите эти данные в одну переменную сессии в виде массива. При заходе на другую страницу переберите сохраненные данные циклом и выведите каждый элемент массива в своем теге li тега ul.');
echo '<form action="" method="post">
		<p>Введите имя<p>
    	<input type="text" name="name"/>
    	<p>Введите возраст<p>
    	<input type="text" name="age"/>
    	<p>Введите зарплату<p>
    	<input type="text" name="payment"/>
    	<p>Введите, что вы ели на завтрак<p>
    	<input type="text" name="breakfast"/>
    	<input type="submit" value="Отправить">
  	  </form>';
echo '<a href="c.php">Перейти к просмотру</a>';