<?php
function myEcho(string $str)
{
	echo nl2br("\n".$str);
}

myEcho("1. Регулярные выражения");
myEcho("a. Напишите регулярку, которая найдет строки 'abba', 'adca', 'abea' по шаблону: буква 'a', два любых символа, буква 'b'. Пример строки: \$str = 'ahb acb aeb aeeb adcb axeb';");
$str = 'ahb acb aeb aeeb adcb axeb';
$matches = [];
preg_match_all('/(a..b)/', $str, $matches);
print_r($matches[0]);
myEcho("b. Дана строка с целыми числами 'a1b2c3'. С помощью регулярки преобразуйте строку так, чтобы вместо этих чисел стояли их кубы");
myEcho(preg_replace_callback('/\d/',function ($matches) {return $matches[0]**3;}, 'a1b2c3'));