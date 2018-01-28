<?php if(!defined('BUGIT')) exit ( "Ошибка соединения" );if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
?>
<menu>
   <ul>
     <li>
       <a href="avpult.php">Общее</a>
     </li>
<br>
      <li>
       <a href="avpult.php?unit=common&amp;common=formod.php">Модули</a>
     </li>
<br>
     <li>
       <a href="avpult.php?unit=common&amp;common=templates.php">Шаблоны</a>
     </li>
<br>
     <li>
      <a href="avpult.php?unit=common&amp;common=mn.php">Меню</a>
     </li>
<br>
     <li>
       <a href="avpult.php?unit=common&amp;common=izo.php">Изображения</a>
     </li>
<br>
     <li>
       <a href="avpult.php?unit=common&amp;common=docum.php">Документы</a>
     </li>
<br>
     <!--<li>
       <a href="avpult.php?unit=common&amp;common=logot.php"> Логотип и название</a>
     </li>
<br>-->
      <li>
       <a href="avpult.php?unit=set">Настройки и дополнительные функции модулей</a>
     </li>
<br>
   </ul>
</menu>
