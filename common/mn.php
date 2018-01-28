<?php if(!defined('BUGIT')) exit ( "Ошибка соединения" );if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
?>
<h3>БОКОВОЕ МЕНЮ</h3>
<?php
if(file_exists("../variables/menusd.php")) {
     include_once  '../variables/menusd.php';
       echo "<h4>В настоящий момент установлено боковое меню $menusd</h4>";
} 
else $menusd="menusimple";
?>
<h3>Установка меню</h3>
    <form class="sel" method="POST" enctype="multipart/form-data">
        <p>
          <input type="file" name="uploadfile"><input type="submit" name="add" value="Загрузить меню"></p></form>
<h3>Список установленных меню</h3>
<?php //Выводим список установленных меню
            if(isset($mn)) {
               foreach($mn as $key=>$val) { ?>
                   <form class="bord" method="POST">
                         Наименование<input type="text" name="side" value="<?php echo $val ?>">
                         <input class="two" type="hidden" name="kind" value="menu">
<?php
//Кнопки
   if(isset($menusd)) {
        if($val!==$menusd) { ?>
           <input type="submit" name="tojoin" value="Подключить" >
<?php
        }
      else { ?>
          <input type="submit" name="toleave" value="Отключить" >
<?php       }
   }

         if(isset($val) && $val!=="menusimple") {
?>
          <input type="submit" name="remove" value="Удалить" ><br><?php
       } ?>
      </form>
<?php }
} ?><h3>Администрирование узла Общее - страница Меню</h3>
