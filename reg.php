<?PHP
$user = $_POST['login'];
$pass = $_POST['pass'];
$con = mysql_connect("localhost","Твой_логин_на_хостинге","Твой_пароль") or ("Cannot connect!"  . mysql_error());
if (!$con)
         die('Could not connect: ' . mysql_error());
         
mysql_select_db("Имя_базы_данных" , $con) or die ("could not load the database" . mysql_error());
 
$check = mysql_query("SELECT * FROM users WHERE `login`='".$login."'");
$numrows = mysql_num_rows($check);
if ($numrows == 0)
{
         $pass = md5($pass);
         $ins = mysql_query("INSERT INTO  `users` (  `id` ,  `login` , `pass` ) VALUES ('' ,  '".$login."' , '".$pass."') ; ");
         if ($ins)
                 die ("Вы успешно создали нового персонажа!");
         else
                 die ("Error: " . mysql_error());
}
else
{
         die("Имя персонажа уже используется!");
}
 
 
?>