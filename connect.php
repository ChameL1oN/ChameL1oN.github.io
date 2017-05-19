<?php
//Получаем данные
$VK_id = $_REQUEST['VK_id']; 


$host = 'mysql.hostinger.ru'; //Переменная для хранения адреса хоста
$user = 'u697865703_cham'; //Переменная для хранения имени пользователя 
$password = '759Fbnjdbkmzc'; //Переменная для хранения пароля
$db = 'u697865703_test'; //Переменная для хранения имени базы данных
$table = 'Profiles'; //Переменная для хранения названия таблицы

mysql_connect($host, $user, $password) or die(mysql_error()); //Подключаемся к mysql
mysql_select_db($db); //Выбираем базу данных

$password = md5($password); //Шифруем пароль
//Формируем запрос на добавление данных в бд
mysql_query("INSERT INTO `ID` VALUES ('{$VK_id}')") or die (mysql_error());
//Выводим текст Done
echo "Done";

?>