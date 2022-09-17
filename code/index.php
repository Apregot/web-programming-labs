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