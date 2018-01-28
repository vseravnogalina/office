<?php header("Content-Type: text/html; charset=utf-8");define ( 'BUGIT', true );
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
//Если пришли данные на обработку
if(isset($_POST['tumb'])) $tumb=htmlspecialchars(strip_tags(trim($_POST['tumb'])));
if (isset($_POST['submit'])) $submit=htmlspecialchars($_POST['submit']);
if(file_exists("../tumbl.php")) unlink("../tumbl.php");
//Подключаемся к базе данных
include_once "../variables/variac.php";
$mysqli=new mysqli(base64_decode($server),base64_decode($username),base64_decode($parol),base64_decode($datbas));
/* проверка соединения */
if(mysqli_connect_errno()) {
   printf("Соединение не установлено: %s\n", mysqli_connect_error());exit();
} 
?><!DOCTYPE HTML>
<html>
<head>
<META NAME="Robots" CONTENT="NOINDEX,NOFOLLOW">
<meta charset="utf-8">
<title>Переход к блоку управления</title>
</head> 
<body>
<?php
if (isset($submit))
{$login=htmlspecialchars(sha1($_POST['login']));//Логин администратора
$psword=htmlspecialchars(sha1($_POST['psword']));//Пароль администратора
//Подготовили выражение
$mysqli->query("SET NAMES 'utf8'");
if($selectcostomers=$mysqli->prepare("SELECT password,groupcost FROM costomers WHERE login=?")) { 
$selectcostomers->bind_param('s',$logsmp);
$logsmp=$login;
$selectcostomers->execute();
$selectcostomers->bind_result($password,$groupcost);
while($selectcostomers->fetch());}
if(isset($selectcostomers)) $selectcostomers->close();
if(empty($password)) die("Неверно!<br>");
//Если пароли не совпадают
if($password!==$psword)
echo"Введенный пароль неверен!<br><a href='../../index.php'>Вернуться на сайт</a>";
else
{if(isset($groupcost) && $groupcost===1)
{
$mysqli->close();
?>
<form action="avpult.php" method='POST'>
<input type='hidden' name='proven' value="<?php echo $password ?>"/>
<p><input type="submit" value="Войти"/></p>
</form></body></html>
<?php
}}}

if(empty($submit))
echo '
<form name="vhod" method="POST">
<p><h3>Авторизация</h3></p> 
<p>Введите Ваш логин:</p><p><input type="text" name="login" value=""  required  autofocus/></p>
<p>Введите Ваш пароль:</p><p> <input type="password" name="psword" value=""  required  /></p>
<p><input type="submit" name="submit" value="Авторизуйтесь для входа"/></p>
</form>';
?>
<h3>Здесь авторизация админа</h3></body></html>
