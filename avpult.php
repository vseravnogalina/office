<?php session_start();header("Content-Type: text/html; charset=utf-8");define ( 'BUGIT', true );
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/
if(isset($_POST['proven'])) $_SESSION['proven']=addslashes(strip_tags(trim($_POST['proven'])));
if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
//Подключение базы
include_once "../variables/variac.php";
$mysqli=new mysqli(base64_decode($server),base64_decode($username),base64_decode($parol),base64_decode($datbas));
/* проверка соединения */
if(mysqli_connect_errno()) {
   printf("Соединение не установлено: %s\n", mysqli_connect_error());exit();
} 
//if(file_exists("../upr.php")) include_once "../upr.php";
if(file_exists("lib/library.php")) include_once "lib/library.php";
if(file_exists("lib/pclzip/pclzip.lib.php")) include_once "lib/pclzip/pclzip.lib.php";
if(file_exists("top.php")) require_once "top.php";
if(isset($unit)) if(file_exists("$unit/top.php")) include_once "$unit/top.php";
//ПОДключаем шаблон
if(file_exists("template/admin/admin.php")) include_once "template/admin/admin.php";
////////////////////////////////////////////////////////////////////

