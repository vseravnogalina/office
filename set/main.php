<?php if(!defined ('BUGIT')) exit ('Ошибка соединения');if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2016 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 0.9.2
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
if(file_exists("set/mdObr.php")) include_once "set/mdObr.php";
else echo "Модуль обратной связи отсутствует";
?>
<h3>Настройки модулей</h3>
