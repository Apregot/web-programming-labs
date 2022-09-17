<?php
session_start();
echo '<a href="index.php">Вернуться</a>';
echo "<p>Фамилия: {$_SESSION['surname']}</p>";
echo "<p>Имя: {$_SESSION['name']}</p>";
echo "<p>Возраст: {$_SESSION['age']}</p>";