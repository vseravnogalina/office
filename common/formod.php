<?php if(!defined('BUGIT')) exit ( "Ошибка соединения" );if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;} 
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2016 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 0.9.2
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
//Подключаем модуль переменного подключения//Если модуль постоянного подключения - вызываем позицию из массива
if(isset($tojoin)) {
  if(isset($imjaengav)) {
    if(isset($immod[$imjaengav]["dopcon"]) && $immod[$imjaengav]["dopcon"]===0) { //Выводим выбор позиции
      if(isset($imjaru)) { //Выбираем номер позиции
          $number=range(1,10);
          echo "<b>Выбор позиции модуля $imjaru</b>";
?>
         <form method=POST>
           <input class="two" type="hidden" name="kind" value="modul">
           <input class="two" type="hidden" name="tojoin" value="<?php echo $tojoin; ?>" >    
           <input type="hidden" name="imjaengav" value="<?php echo $imjaengav ?>">
           <input type="text" name="imjaru" value="<?php echo $imjaru ?>" readonly >
               <select name="nomerpos" size=1>
<?php //В цикле вставляем функцию rang
                  foreach($number as $val) {
                    echo '<option>'.$val.'</option>';
                     }
 ?>
               </select>
           <input type="submit" name="" value="Установить модуль в позицию!">
        </form>
<?php
           }
       }
    }
}

//Выводим информацию на монитор, а также форму загрузки
?>
    <h3> МОДУЛИ САЙТА</h3>
      <h4>Позиции модулей в зависимости от блока</h4>
       <table class="bord">
         <tr>
          <td>Общие(Для <br>всех блоков):<br> 2, 3, 5 6</td>
           <td>Главная,<br> Статьи:<br>4, 7, 10 </td>
            <td><br>Скачивания:<br> 1, 8, 9</td>
            <td><br>Купить:<br>1, 9</td>
            <td><br>Магазин:<br>1, 9</td>
           </tr>
        </table>
   <h4>Модули постоянного подключения(позиции)</h4>
     <table class="bord">
        <tr>
          <td><br>Комментарии:<br>12</td>
          <td>Кнопка навигации<br>по вертикали):<br>15</td>
          <td>Обратная<br>связь:<br>16</td>
          <td><br>Видео:<br>17</td>
          <td>Кнопка навигации<br>между страницами:<br>18</td>
          <td><br>Скачивания:<br>19</td>
        </tr>
     </table>
<div class="model">
<h3>Добавить модуль</h3>
  <p>** Поле, обязательное для заполнения!</p>
   <form method='POST' enctype='multipart/form-data'>
      <p title="Введите любое, удобное для Вас, название">Имя модуля на русском языке**</p>
       <p><input  type='text' name='imjaruav' value='' required ></p>
       <p><input type='file' name='uploadfile'>
       <input type='submit' name='add' value='Загрузить' ></p>
   </form>
</div>

 <h3>Список модулей</h3>
<?php //Форма со списком модулей, кнопками подключения, отключения и удаления
if(isset($immod)) {
  foreach($immod as $key=>$value) { ?>
    <form class="bord" method="POST">
      <input class="knopdel" type="submit" name="remove" value="Удалить" >
   Имя<input class="two" type="text" name="imjaru" value="<?php echo $immod[$key]['russ'] ?>" readonly>
   Транслит<input class="two" type="text" name="imjaengav" value="<?php echo $key ?>" readonly>
Поз.<input class="one" type="text" name="posicmod" value="<?php echo $immod[$key]['pos'];?>" readonly >
    <input type="hidden" name="kind" value="modul">
<?php
       if(file_exists("../common/modulen.txt")) {
                      if($immod[$key]['pos']===0) { ?>
               <input class="knop" type="submit" name="tojoin" value="ВКЛ ." >
<?php     }
         else { ?> 
               <input class="knopdel" type="submit" name="toleave" value="ВЫКЛ" ><?php
              }
      }
    if(file_exists("set/$key.php")) { ?>
              Настраиваемый  <?php 
             }
?> </form>
<?php
   }
}
echo "<br>";
if(isset($modulu))
  $allitem=$modulu;
if(isset($immod))
  $arritem=$immod;
$kinddif="modul";
if(isset($allitem) && isset($arritem) && isset($kinddif))
diffForArr($modulu,$immod,$kinddif);
//if(isset($allitem) && isset($arritem)) { echo "YES";
                   /* if(isset($difference)) {
echo "<form method='POST'>
          <input type='hidden' name='kind' value='modul'>
          <input type='hidden' name='difference' value='$difference' />
          <input type='submit' name='outof' value='Исправить!' />
</form>";
  } */
//}
?><h3>Администрирование узла Общее - страница Модули</h3>	
