<?php if(!defined ('BUGIT')) exit ('Ошибка соединения');if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
if(isset($go)) { 
Article($unit,$redactor,$numberpart,$menupart,$titlelist,$id,$titlear,$kwar,$annotar,$authorar,$datar,$contentar,$part);
 }
if(isset($unit) && isset($menutitle)) {
Unionbutton($unit,$menupart,$menutitle,$menutitlepart);
}
?>
<h3>Администрирование узла Блог- Создание и редактирование статей</h3>
