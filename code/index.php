<?php
function myEcho(string $str)
{
	echo nl2br("\n".$str);
}

myEcho("1.Доступ по ссылке
● Вы унаследовали код от другого разработчика. Вы не можете изменить их код, но вам необходимо добавить некоторые дополнительные функции.
Вместо использования переменной \$very_bad_unclear_name, как в вашей части кода. Объявите новую переменную \$order как ссылку на переменную \$very_bad_unclear_name.
● С помощью оператора конкатенации добавьте к переменной \$order любую строку.
● Распечатайте \$very_bad_unclear_name"
);

$very_bad_unclear_name="15 chicken wings";

$reference = &$very_bad_unclear_name;
$reference = '2 number 9s a number 9 large a number 6 with extra dip, a number 7 two numbers 45s one with cheese and a large soda.';

myEcho("Your order is: $very_bad_unclear_name");

myEcho("\n2. Числа
● Объявите переменную с любым именем и присвойте ей целочисленное значение. Используйте echo, чтобы вывести вашу переменную на терминал.");
$number = 3;
myEcho("\$number: $number");
myEcho("● Мы собираемся создать и напечатать еще одну числовую переменную, но мы не хотим, чтобы она печаталась в той же строке. Используйте echo, чтобы напечатать строку '\\n'.");
myEcho("");
myEcho("● Затем объявите переменную с любым именем и присвойте ей значение с плавающей запятой. Используйте echo, чтобы вывести эту новую переменную на терминал.");
$float = 3.3;
myEcho("\$float: $float");
myEcho("● Используйте echo, чтобы напечатать число 12 на терминале. Хитрость: используйте сложение или вычитание, чтобы напечатать оператор, который оценивается как 12, и число 12 не может появиться нигде в вашем коде!");
myEcho(6+6);
myEcho("● Насколько больше я потратил в прошлом месяце, чем в этом месяце? В прошлом месяце я потратил 1187,23, а в этом месяце я потратил 1089,98. Создайте переменные \$last_month и \$this_month и присвойте им соответствующие числовые значения. Используйте echo для вывода разницы между расходами в прошлом месяце и в этом месяце");
$last_month = 1187.23;
$this_month = 1089.98;
myEcho($last_month - $this_month);

myEcho("\n11. Умножение и деление");
myEcho("● Мэг пытается выяснить, сколько времени в среднем ей требуется, чтобы выучить язык программирования. На данный момент она знает Ruby, Python, JavaScript и C++. Создайте переменную \$num_languages и присвойте ей количество языков программирования, которые она выучила. Создайте вторую переменную, \$months, и присвойте ей 11 — количество месяцев, которые она потратила на обучение кодированию.");
$languages_amount = 4;
$months = 11;
myEcho("● Мэг понимает, что не каждый день занимается. Создайте переменную \$days и присвойте ей значение, полученное путем умножения \$months на количество дней в месяце, которое, по ее мнению, она действительно провела за учебой, то есть 16 дней в месяц.");
$days = $months * 16;
myEcho("● Давайте подсчитаем, сколько дней в среднем у нее ушло на изучение каждого языка. Присвойте результат этой операции переменной \$days_per_language.");
$days_per_language = $days/$languages_amount;
myEcho("\$days_per_language: $days_per_language");

myEcho("\n12. Степень");
myEcho("● Используйте eсho и оператор **, чтобы вывести на терминал значение 8 в квадрате.");
myEcho("8^2 = " . 8**2);
myEcho("\n13. Операторы присвоения");
myEcho("● Создайте переменную \$my_num и назначьте ей любое число");
$my_num = 14;
myEcho("● Затем создайте вторую переменную, \$answer, и присвойте ей значение \$my_num");
$answer = $my_num;
myEcho("● Используйте оператор присваивания сложения, чтобы добавить 2 к \$answer");
$answer += 2;
myEcho("● Используйте оператор присваивания умножения, чтобы умножить \$answer на 2.");
$answer *= 2;
myEcho("● Используйте оператор присваивания вычитания, чтобы вычесть 2 из \$answer.");
$answer -= 2;
myEcho("● Используйте оператор присваивания деления, чтобы разделить \$answer на 2");
$answer /= 2;
myEcho("● Используйте оператор присваивания вычитания, чтобы вычесть исходное число (\$my_num) из \$answer. Наконец, используйте echo для вывода \$answer на терминал.");
$answer -= $my_num;
myEcho("● Если все прошло как надо, \$answer должен быть равен 1. Каким бы ни был ваш первоначальный номер");
myEcho("\$answer: ".$answer);

myEcho("\n14. Математические функции");
myEcho("Работа с %");
myEcho("● Даны переменные \$a=10 и \$b=3. Найдите остаток от деления \$a на \$b");
$a = 10; $b = 3;
myEcho("\$a%\$b = " . ($a % $b));
myEcho("● Даны переменные \$a и \$b. Проверьте, что \$a делится без остатка на \$b. Если это так - выведите 'Делится' и результат деления, иначе выведите 'Делится с остатком' и остаток от деления");
$result = $a % $b;
if ($result === 0)
{
	myEcho("Делится " . $a / $b);
}
else
{
	myEcho("Делится с остатком " . $result);
}
myEcho("Работа со степенью и корнем Для решения задач данного блока вам понадобятся следующие функции: sqrt, pow");
myEcho("● Возведите 2 в 10 степень. Результат запишите в переменную \$st.");
$st = pow(2,10);
myEcho("● Найдите квадратный корень из 245.");
myEcho(sqrt(245));
myEcho("● Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. Найдите корень из суммы квадратов его элементов. Для решения воспользуйтесь циклом foreach");
$arr = [4, 2, 5, 19, 13, 0, 10];
$result = 0;
foreach ($arr as $item)
{
	$result += $item;
}
myEcho(sqrt($result));
myEcho("Работа с функциями округления (Для решения задач данного блока вам понадобятся следующие функции: round, ceil, floor.)");
myEcho("● Найдите квадратный корень из 379. Результат округлите до целых, до десятых, до сотых.");
$sqrt = sqrt(379);
myEcho(round($sqrt));
myEcho(round($sqrt, 1));
myEcho(round($sqrt, 2));
myEcho("● Найдите квадратный корень из 587. Округлите результат в большую и меньшую сторону, запишите результаты округления в ассоциативный массив с ключами 'floor' и 'ceil'\n");
$sqrt = sqrt(587);
$arr = [];
$arr['floor'] = floor($sqrt);
$arr['ceil'] = ceil($sqrt);
print_r($arr);
myEcho("Работа с min и max (для решения задач данного блока вам понадобятся следующие функции: min, max)");
myEcho("● Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное число.");
$arr = [4, -2, 5, 19, -130, 0, 10];
myEcho("max: " . max($arr));
myEcho("min: " . min($arr));
myEcho("Работа с рандомом");
myEcho("● Выведите на экран случайное число от 1 до 100.");
myEcho(random_int(1, 100));
myEcho("● Заполните массив 10-ю случайными числами. Подсказка: нужно воспользоваться циклами for или while.\n");
$arr = [];
for ($i = 0; $i < 10; $i++)
{
	$arr[$i] = random_int(1,100);
}
print_r($arr);
myEcho("Работа с модулем");
myEcho("● Даны переменные \$a и \$b. Найдите найдите модуль разности \$a и \$b. Проверьте работу скрипта для различных \$a и \$b");
$a = 5;
$b = 3;
myEcho(abs(3-5));
myEcho("● Дан массив в числами, к примеру [1, 2, -1, -2, 3, -3]. Создайте из него новый массив так, чтобы отрицательные числа стали положительными, то есть у нас должен получиться такой массив: [1, 2, 1, 2, 3, 3].");
$arr =  [1, 2, -1, -2, 3, -3];
foreach ($arr as &$item)
{
	$item = abs($item);
}
print_r($arr);
myEcho("Общее");
myEcho("● Дано число, например 30. У этого числа есть делители - числа, на которое оно делится без остатка. Делители числа 30 - это 1, 2, 3, 5, 6, 10, 15, 30. Задача: сделайте массив делителей нашего числа. Число может быть любым, не обязательно, 30.");
$number = 30;
$arr = [];
for ($i = 1; $i < ($number / 2) + 1; $i++)
{
	if ($number % $i === 0)
	{
		$arr[] = $i;
	}
}
myEcho("");
print_r($arr);
myEcho("● Дан массив [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]. Узнайте, сколько первых элементов массива нужно сложить, чтобы сумма получилась больше 10.");
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
unset($item);
$sum = 0;
$n = 0;
foreach ($arr as $item)
{
	$n++;
	$sum += $item;
	if($sum > 10)
	{
		break;
	}
}
myEcho($n);

myEcho("\n15. Функции");
myEcho("● Напишите функцию printStringReturnNumber(), которая печатает строку и возвращает числовое значение.");
function printStringReturnNumber(int $number): int
{
	myEcho($number);
	return $number;
}
myEcho("● Запишите возвращаемое значение вашей функции в переменную с именем \$my_num");
$my_num = printStringReturnNumber(3);
myEcho("● Распечатайте \$my_num.");
myEcho($my_num);