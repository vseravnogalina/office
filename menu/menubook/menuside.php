<?php 
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
if(!defined('BUGIT')) exit ('Ошибка соединения');
//Запрет доступа
if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;} ?>
<menu>
   <ul>
     <li>
       <a href="avpult.php?unit=book">Блог</a>
     </li>
      <br>
     <li>
       <a href="avpult.php?unit=book&amp;book=pick.php">Организация контента</a>
    </li>
     <br>
<?php if(isset($pos) && isset($pos[12]))
        if(file_exists("set/$pos[12].php")) { ?>
     <li>
       <a href="avpult.php?unit=set&amp;set=<?php echo $pos[12] ?>.php">Комментарии</a>
     </li>
<?php } ?>
   </ul>
</menu>
