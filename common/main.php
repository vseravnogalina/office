<?php if(!defined('BUGIT')) exit ( "Ошибка соединения" );if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
?>
<table class="bord"> 
  <caption class="bord"><h4>Список установленных узлов</h4></caption>
    <tr>
      <td  class="bord"><p>Имя узла</p></td>	
<?php
        if(isset($arrblock)) 
          foreach($arrblock as $k=>$v) 
            if(file_exists("$k")) if($k!=="common") { ?>
              <td  class="bord"><p><?php echo $v ?></p></td>
<?php          } ?>
    </tr>
</table>
<h3>Установка дополнительных узлов</h3> <p>например, магазин</p>

<form class="bord" method="POST" enctype="multipart/form-data" >
  <input type="file" name="uploadfile" >
  <input type="submit" name="add" value="Загрузить">
</form>

<h3>Удаление дополнительных узлов</h3>
<form method='POST'><p>
<?php
if(isset($arrblock))
 foreach($arrblock as $k=>$v) {
  if(file_exists("$k") && $k!=="common" && $k!=="book") {
     echo '<input name="radiobutton" type="radio" value="'.$k.'" />'.$v;
   } 
}
?>
<input type='submit' name='dispose' value="Удалить узел!" />
</form> 
<h3>Администрирование - Главная страница </h3>
