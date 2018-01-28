<?php if(!defined ( 'BUGIT')) exit ('Ошибка соединения');
if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
?>
<!DOCTYPE HTML>
  <html>
    <head>
     <meta name="Robots" content="noindex,nofollow">
     <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel=stylesheet TYPE="text/css" HREF="template/admin/css/admin.css">
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> 
      <title>Мастерская</title>
    </head>
 
    <body>

     <section id='shapo'>

      <div id="logotp">
<?php //if(isset($logotype)) 
      echo'<img src="../images/logotype.png" alt="картинка" width="" height=""/>';?>
      </div>

     <header>
        <h2>Пульт управления. Мастерская</h2>
     </header>

    </section>
    <div class="cen"></div>
<?php
if (file_exists("menu/topmenu/topmenu.php")) include_once "menu/topmenu/topmenu.php";
?>
    <div class="cen"></div>

    <section id='wrp'>
          <div id="centr">
<?php
                if(isset($unit)){
                        if(isset($kat)) {
                           if(file_exists("$unit/$kat")) include_once "$unit/$kat";
               }
         } 
?>
         </div>
         <div id='left'>
             <p>
                <a href="exit.php">Выход</a>
             </p>
<?php
             if(isset($unit)) {
                  if(file_exists("menu/menu$unit/menuside.php")) include_once "menu/menu$unit/menuside.php";
       } 
      else {
                 if(file_exists("menu/menucommon/menuside.php")) include_once "menu/menucommon/menuside.php";
      }

 ?>
        </div>
    </section>

    <footer>
      <p>Административная панель CMS KALINKA. Copyright © 2013- 2017 Родионова Галина Евгеньевна. Все права защищены.</p>
    </footer>
 <a id="leftfora" href="../index.php" target="_blank">Перейти на сайт</a>
<?php
  if(file_exists("../lib/jquery/jquery-3.1.1.min.js")) {
       echo '<script type="text/javascript" src="../lib/jquery/jquery-3.1.1.min.js"></script>';		
       echo "<noscript> <p class='p1'>Включите, пожалуйста, в Вашем Web-браузере поддержку JavaScript, если хотите что-либо скачать или прокомментировать на нашем сайте</p> 
</noscript>";
   
   }
?>
    <script type="text/javascript" src="lib/javascriptadm.js"></script>

  </body>

</html>
