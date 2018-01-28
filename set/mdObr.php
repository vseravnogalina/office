<?php if(!defined ('BUGIT')) exit ('Ошибка соединения');if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2016 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 0.9.2
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
if(isset($_POST['mymail'])) $mymail=htmlspecialchars($_POST['mymail']);
if(isset($_POST['setmail'])) $setmail=htmlspecialchars($_POST['setmail']);
if (file_exists("../common/mml.php")) include_once "../common/mml.php";
//Сохраняем в файл в папку common
if(isset($mymail))
{$mml="$"."mymail";
if (!file_exists("../common/")) mkdir('../common/');
if (!file_exists("../common/mml.php")) touch('../common/mml.php');
 if (file_exists("../common/mml.php"))
 //Если нет файла  в папке var, создаем его
{$fp = fopen( "../common/mml.php", "w+")or die ( "Не удалось открыть файл" );
//Открываем файл и вписываем в него информацию 
fputs( $fp, "<?php if (!defined ('BUGIT')){exit ('Ошибка соединения');}
$mml='$mymail'; ?>");
fflush($fp);fclose( $fp );}}
?>
<h3>Настройка формы обратной связи</h3>
<form id='sel' action ='' method='POST'>
<p>Введите адрес своей электронной почты</p>
<?php if(isset($mymail))
{
?>
<input type='text' name='mymail' value="<?php echo $mymail ?>">
<input type=submit name='setmail' value='Изменить!'>
<?php
}
else
{
?>
<input type='text' name='mymail' value=''>
<input type=submit name='setmail' value='Установить!'>
<?php
}
?>
</form>
