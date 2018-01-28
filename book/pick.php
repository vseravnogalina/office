<?php if(!defined ('BUGIT')) exit ('Ошибка соединения');if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
//Действие становится доступным после появления хотя бы одного раздела
//if(file_exists("common/picker.php")) include_once "common/picker.php";
Picker($menupart,$menutitle,$menutitlepart);
?>
<h3>Администрирование узла Блог - Организация контента</h3>


