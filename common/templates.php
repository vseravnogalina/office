<?php if (!defined('BUGIT')) exit ('Ошибка соединения');if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
//Выводим информацию и формы
if(isset($recomend) && $recomend==="YES") echo "Переключите шаблон перед удалением!";
?>
<h3>ШАБЛОНЫ</h3>
<?php
if(isset($imtempl)) 
  foreach($imtempl as $k=>$v)
   if(isset($imtempl[$k]["join"])) 
    if($imtempl[$k]["join"]===1) 
      $osnova=$k;
else $osnova="simple";

  echo "<h4>В настоящий момент установлен шаблон $osnova</h4>";

?>
<h3>Установка шаблона</h3>
  <form class="sel" method="POST" enctype="multipart/form-data">
    <p><input type="file" name="uploadfile"><input type="submit" name="add" value="Загрузить шаблон"></p>
  </form>
<h3>Список шаблонов</h3>
<?php if(isset($shablon)) {
           foreach($shablon as $key=>$val) { ?>
             <form class="bord" method="POST"><?php if($val!=='simple') { ?>
                 <input class="knopdel" type="submit" name="remove" value="Удалить" >
<?php                 } ?>
                 Наименование<input type="text" name="templ" value="<?php echo $val ?>">
                  <input type="hidden" name="kind" value="template">
                 <a title="щелкните по ссылке, чтобы посмотреть макет с указанием позиций модулей" href="../template/<?php echo $val ?>/maket/maket_<?php echo $val ?>.php">Посмотреть макет</a>
<?php
              if(isset($osnova) && $val!==$osnova) { ?>
                    <input class="knop" type="submit" name="tojoin" value="Подключить" >
<?php
                        }
?>
              </form>
<?php }
  } 
echo "<br>";
diffForArr($shablon,$imtempl,"template");
?><h3>Администрирование узла Общее - страница Шаблоны</h3>
