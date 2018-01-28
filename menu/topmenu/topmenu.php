<?php if (!defined('BUGIT')) exit ('Ошибка соединения');if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
?>
<nav>
   <ul>
<?php if(file_exists("common/")) { ?>
        <li><a href="avpult.php">Общее</a>
           <ul>
               <li>
                 <a href="avpult.php?unit=common&amp;common=formod.php">Модули</a>
               </li>
      <br> 
<?php if(file_exists("common/formodadm.php")) { ?>
       <li>
         <a href="avpult.php?unit=common&amp;common=formodadm.php">Звенья</a>
       </li>
      <br>
<?php }
if(file_exists("common/templates.php")) { ?>  
        <li>
          <a href="avpult.php?unit=common&amp;common=templates.php">Шаблоны</a>
        </li>
     <br>
<?php }
if(file_exists("common/mn.php")) { ?> 
        <li>
          <a href="avpult.php?unit=common&amp;common=mn.php">Меню</a>
        </li>
     <br>
<?php } ?>
        <li>
          <a href="avpult.php?unit=common&amp;common=izo.php">Изображения</a>
        </li>
     <br>
        <li>
          <a href="avpult.php?unit=common&amp;common=docum.php">Документы</a>
        </li>
     <br>
<?php //if(file_exists("common/logot.php")) { ?>
        <!--<li>
           <a href="avpult.php?unit=common&amp;common=logot.php">Логотип и название</a>
        </li>-->
<?php //} ?>
    </ul>
  </li>
<?php
 }

if(file_exists("book/")) { ?>
   <li>
     <a href="avpult.php?unit=book">Блог</a>
      <ul>
         <li>
           <a href="avpult.php?unit=book&amp;book=pick.php">Организовать контент</a>
       </li>
     </ul>
  </li>
<?php }
if(file_exists("book1/")) { ?>
   <li>
     <a href="avpult.php?unit=book1">Блог1</a>
      <ul>
        <li>
           <a href="avpult.php?unit=book1&amp;book1=pick.php">Организовать контент</a>
        </li>
      </ul>
  </li>
<?php }
if(file_exists("book2/")) { ?>
   <li>
     <a href="avpult.php?unit=book2">Блог2</a>
      <ul>
        <li>
           <a href="avpult.php?unit=book2&amp;book2=pick.php">Организовать контент</a>
        </li>
      </ul>
  </li>
<?php }
if(file_exists("book3/")) { ?>
   <li>
     <a href="avpult.php?unit=book3">Блог3</a>
      <ul>
        <li>
           <a href="avpult.php?unit=book3&amp;book3=pick.php">Организовать контент</a>
        </li>
      </ul>
  </li>
<?php }
if(file_exists("book4/")) { ?>
   <li>
     <a href="avpult.php?unit=book4">Блог4</a>
      <ul>
        <li>
           <a href="avpult.php?unit=book4&amp;book4=pick.php">Организовать контент</a>
        </li>
      </ul>
  </li>
<?php }
if (file_exists("freeware/")) { ?>
    <li>
     <a href="avpult.php?unit=freeware">Скачивания</a>
       <ul>
         <li>
           <a href="avpult.php?unit=freeware&amp;freeware=pick.php">Организовать контент</a>
         </li>
<br>
          <li>
           <a href="avpult.php?unit=freeware&amp;freeware=hranilishe.php">Загрузка файлов</a>
         </li>
<br>
      </ul>
   </li>
<?php } if(file_exists("payware/")) { ?>
   <li>
     <a href="avpult.php?unit=payware">Платные продукты</a>
       <ul>
         <li>
          <a href="avpult.php?unit=payware&amp;payware=pick.php">Организовать контент</a>
         </li>
<br>
    <li>
      <a href="avpult.php?unit=payware&amp;payware=hranilishe.php">Загрузка файлов</a>
    </li>
<br>
     <li>
       <a href="avpult.php?unit=payware&amp;payware=korzinash.php">Компоненты </a>
     </li>
<br>
<?php if(file_exists("kniga/")) { ?>
     <li>
       <a href="avpult.php?unit=kniga&amp;kniga=kniga.php">Книга учета</a>
     </li>
<?php } ?>
   </ul>
 </li>
<?php }
if(file_exists("shop/")) { ?>
   <li>
     <a href="avpult.php?unit=shop">Магазин</a>
       <ul>
         <li>
          <a href="avpult.php?unit=shop&amp;shop=pick.php">Организовать контент</a>
         </li>
<br>
         <li>
           <a href="avpult.php?unit=shop&amp;shop=korzinash.php">Компоненты </a>
         </li>
<br>
         <li>
           <a href="avpult.php?unit=shop&amp;shop=costing.php">Учет и цены </a>
         </li>
<br>
<?php if(file_exists("kniga/")) { ?>
         <li>
          <a href="avpult.php?unit=kniga&amp;kniga=kniga.php">Книга учета</a>
         </li>
<?php } ?>
       </ul>
    </li>
<?php } ?>
  </ul>
</nav>  
