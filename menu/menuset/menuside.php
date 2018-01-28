<?php if(!defined ('BUGIT')) exit ('Ошибка соединения');if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
if(file_exists("set/"))   
{
?>
<br>Настройки и дополнительные функции модулей<br>
 <menu>
   <ul>
<?php
       if(isset($setcont) && isset($immod)) {
                 foreach($setcont as $key=>$val) {
                    if(isset($immod[$val]) && isset($immod[$val]["russ"])) {
                       echo '<li>
                          <a href="avpult.php?unit=set&amp;set='.$val.'.php">'.$immod[$val]["russ"].'</a>
                             </li><br>';
                  }
            }
       }
}
?>
   </ul>
</menu>
