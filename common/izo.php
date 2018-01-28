<?php if(!defined('BUGIT')) exit ( "Ошибка соединения" );if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
if(isset($radiobutton)) {
if(file_exists("../images/$radiobutton")) {
     $izo=array();$drmod="../images/$radiobutton";$skip=array('.','..');
        if(!empty($drmod)) $mdsh=scandir($drmod);
           foreach($mdsh as $shmod) {
             if(!in_array($shmod, $skip)) $izo[]=$shmod;
            }
     clearstatcache();	
}
?>
<a href="avpult.php?unit=common&common=izo.php">Изменить выбор узла</a>
    <p><mark>
     Имена файлов должны быть записаны на латинице,например, не картинка.jpg, а kartinka.jpg
   </mark></p>
    <h3>Загрузка изображений</h3>
      <h4>Подготавливаются изображения узла <?php echo $newr; ?> </h4>
          <form class="bord" enctype="multipart/form-data" method="POST">
             <input type="hidden" name="kind" value="image">
             <input type='hidden' name='radiobutton' value="<?php echo $radiobutton ?>" />
<?php         for ($i=0; $i<9; $i++) { ?>
               <p>Выбрать файл:
                <input name="download[]" type="file" accept="image/*" />
<?php } ?>
<input type="submit" value="Загрузить" /></p>
</form>
<?php }
if(isset($izo) && count($izo)>0) {
    echo "<h3>Загружены изображения</h3>";
    echo '<form class="bord" method="POST">
            <input type="hidden" name="radiobutton" value="'.$radiobutton.'" />
            <select name="delizo" size=1>';
               foreach($izo as $val) {
                  echo '<option>'.$val.'</option>';
                  }
        echo '</select>
              <input type="submit" name="takeaway" value="Удалить!">
          </form>';
} 
 ?>
     <h3>Загрузка изображений</h3>
<?php if(empty($radiobutton)) {
          selectUnit($arrblock);
        } ?>
<h3>Администрирование узла Общее - страница Изображения</h3>
