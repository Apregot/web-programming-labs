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