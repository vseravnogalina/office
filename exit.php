<?php session_start();
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2016 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 0.9.2
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
//Удаляем сессию админа
if($_SESSION['proven']) unset($_SESSION['proven']);
// Наконец, разрушить сессию.
session_destroy();
//Отправляем на главную
header ("Location: index.php");
?>
