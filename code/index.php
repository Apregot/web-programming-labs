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

myEcho("3. Файлы 
a. Написать доску объявлений. Пользователь указывает свой email, текст объявления, заголовок объявления (форма), категория. Для хранения объявлений использовать файлы.
	i. Создать несколько папок категорий.
	ii. Необходимо чтобы на странице была форма с полями (email, выбор категории(название выше созданных папок), заголовок объявления и текст объявления, кнопка Добавить).
	iii. После формы список уже загруженных объявлений в виде таблички.
	iv. После того, как пользователь нажал кнопку “добавить”, необходимо создать новый текстовый файл категория/заголовок_объявления.txt, содержимое файла - Текст объявления"
);
function myScanDir(string $dir): array
{
	return array_diff(scandir($dir), ['..', '.']);
}
function getFiles(array $directories): array
{
	$result = [];
	foreach ($directories as $directory)
	{
		$files = myScanDir('files/' .$directory);
		foreach ($files as $file)
		{
			$path = 'files/' . $directory . '/' . $file;
			$content = file_get_contents($path);
			$result[] = [
				'category' => $directory,
				'header' => preg_replace('/.txt$/','', $file),
				'content' => $content,
			];
		}
	}
	return $result;
}
$categories = myScanDir('./files');

$categoriesHTML = '';
foreach ($categories as $category)
{
	$categoriesHTML .= "<option>$category</option>";
}

echo '<form action="" method="post">
		<p>Введите email<p>
    	<input type="email" name="email"/>
    	<p>Выберите категорию<p>
    	<select name="category">'
		. $categoriesHTML .
    	'</select>
    	<p>Введите заголовок объявления<p>
    	<input type="text" name="header"/>
    	<p>Введите текст объявления<p>
    	<textarea rows="10" cols="40" name="content"></textarea>
    	<input type="submit" value="Отправить">
  	  </form>';
if (
	array_key_exists('email', $_POST)
	&& array_key_exists('category', $_POST)
	&& array_key_exists('header', $_POST)
	&& array_key_exists('content', $_POST)
)
{
	$file = fopen('files/' . $_POST['category'] . '/' . $_POST['header'] .'.txt', 'wb');
	fwrite($file, $_POST['content']);
}
$ads = getFiles($categories);
$tableContent = '';
foreach ($ads as $ad)
{
	$tableContent .= '<tr><td>'.$ad['category'].'</td><td>'.$ad['header'].'</td><td>'.$ad['content'].'</td></tr>';
}

if ($tableContent)
{
	echo '<table border="1">
  			<tr>
    		<th>Категория</th>
			<th>Заголовок</th>
    		<th>Текст</th>
  			</tr>
  			'.$tableContent.'
		  </table>';
}