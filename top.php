<?php if(!defined ('BUGIT')) exit ('Ошибка соединения');
      if(empty($_SESSION['proven'])) {die("Доступ закрыт");exit;}
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2017 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/

//Переменные сценария

//Главная характеристика контента
if(isset($_GET['unit'])) $unit=addslashes(strip_tags(trim($_GET['unit'])));
   else {$unit="common";$kat="main.php";} 
//Дополнительная характеристика контента
if(isset($unit)) {
       if(isset($_GET[$unit])) $kat=htmlspecialchars(strip_tags(trim($_GET[$unit])));
       else $kat="main.php";} 
//Идентификатор статьи
//if(isset($_POST['id'])) $id=intval($_POST['id']);

//Кнопки!!!!!!!!!!!!!

if(isset($_POST['add'])) $add=htmlspecialchars($_POST['add']);//Кнопка загрузки файлов на сервер
if(isset($_POST['deleatecomment'])) $deleatecomment=htmlspecialchars(strip_tags(trim($_POST['deleatecomment'])));//Кнопка удаления comment
if(isset($_POST['dispose'])) $dispose=htmlspecialchars(strip_tags(trim($_POST['dispose'])));//Кнопка удаления узлов -deluzel
if(isset($_POST['go'])) $go=htmlspecialchars(strip_tags(trim($_POST['go'])));//Кнопка перехода к редактированию
if(isset($_POST['radiobutton'])) $radiobutton=htmlspecialchars(strip_tags(trim($_POST['radiobutton'])));//Радиокнопка
if(isset($_POST['remove'])) $remove=htmlspecialchars(strip_tags(trim($_POST['remove'])));//Кнопка удаления  модуля, шаблона, меню, звена delud
if(isset($_POST['save'])) $save=htmlspecialchars(strip_tags(trim($_POST['save'])));//Кнопка сохранения статьи, в том числе - документы
if(isset($_POST['scour'])) $scour=htmlspecialchars(strip_tags(trim($_POST['scour'])));//Кнопка удаления статьи, в том числе - документы
if(isset($_POST['set'])) $set=htmlspecialchars(strip_tags(trim($_POST['set'])));//Кнопка перехода к настройкам
if(isset($_POST['takeaway'])) $takeaway=htmlspecialchars(strip_tags(trim($_POST['takeaway'])));//Кнопка удаления изображений
if(isset($_POST['tojoin'])) $tojoin=htmlspecialchars(strip_tags(trim($_POST['tojoin'])));//Кнопка Подключить
if(isset($_POST['toleave'])) $toleave=htmlspecialchars(strip_tags(trim($_POST['toleave'])));//Кнопка Отключить

//Метки!!!!!!!!!!!!

if(isset($_POST['designation'])) $designation=htmlspecialchars($_POST['designation']);//Идентификатор типа пакета для загрузок des
if(isset($_POST['inspect'])) $inspect=intval($_POST['inspect']);//Служебные переменные при загрузке prov1
if(isset($_POST['kind'])) $kind=htmlspecialchars(strip_tags(trim($_POST['kind'])));//Характеристика подключаемого файла Служебная переменная chvid
if(isset($_POST['redactor'])) $redactor=intval($_POST['redactor']);//Редактирование или создание

//загрузки!!!!!!!!!!!!!!
if(isset($_FILES['uploadfile']['name'])) { 
    $addfile=basename($_FILES['uploadfile']['name'],".zip"); 

}

if(isset($_POST['imjaruav'])) $imjaruav=htmlspecialchars(strip_tags(trim($_POST['imjaruav'])));//Наименование модуля на русском при загрузке

//Модули!!!!!!!!!!!!!!
//Наименование модуля на русском
if(isset($_POST['imjaru'])) $imjaru=htmlspecialchars(strip_tags(trim($_POST['imjaru'])));
//Имя модуля на латинице
if(isset($_POST['imjaengav'])) $imjaengav=htmlspecialchars(strip_tags(trim($_POST['imjaengav'])));
//Позиция модуля
if(isset($_POST['nomerpos'])) $nomerpos=intval($_POST['nomerpos']);
if(isset($_POST['posicmod'])) $posicmod=htmlspecialchars(strip_tags(trim($_POST['posicmod'])));


//Переход к файлу настроек модуля
if(isset($set) && isset($imjaengav)) {
   @header("Location:avpult.php?page=set&set=$imjaengav.php&proven=".$_SESSION['proven']);
}
//Разница между созданным массивом и папкой модулей  raznica
if(isset($_POST['difference'])) $difference=htmlspecialchars(strip_tags(trim($_POST['difference'])));


//Меню!!!!!!!!!!!!!!!!!
//Название меню bok
if(isset($_POST['side'])) $side=htmlspecialchars(strip_tags(trim($_POST['side'])));

//Шаблон отображения!!!!!!!!!!!!!!!!!
//Название шаблона tem
if(isset($_POST['templ'])) $templ=htmlspecialchars(strip_tags(trim($_POST['templ'])));

//Звено!!!!!!!!!!!!!!!!!
//Имя  звена
if(isset($_POST['amod'])) $amod=htmlspecialchars(strip_tags(trim($_POST['amod'])));

//Изображения(картинки)!!!!!!!!!!!!!!!!
if(isset($_POST['delizo'])) $delizo=htmlspecialchars(strip_tags(trim($_POST['delizo'])));//Имя удаляемого изображения  
//Перевод имени узла для изображений radio
if(isset($radiobutton)) {
      switch($radiobutton){
case "common": $newr="Общее"; break;
case "book": $newr="Блог"; break;
case "book1": $newr="Блог1"; break;
case "book2": $newr="Блог2"; break;
case "book3": $newr="Блог3"; break;
case "book4": $newr="Блог4"; break;
case "freeware": $newr="Скачивания";break;
case "shop": $newr="Магазин"; break;
case "payware": $newr="Платные продукты"; break;
  }
}

//Документы!!!!!!!!!!! poleosn - mess

//Разделы!!!!!!!!!!!!!!!!!
if(isset($_POST['numberpart'])) $numberpart=intval($_POST['numberpart']);//id раздела
if(isset($_POST['part'])) $part=htmlspecialchars(strip_tags(trim($_POST['part'])));//Имя раздела(отдела) 


//Статьи!!!!!!!!!!!!!!!!!
if(isset($_POST['annot'])) $annot=htmlspecialchars(strip_tags(trim($_POST['annot'])));//Аннотация
if(isset($_POST['author'])) $author=htmlspecialchars(strip_tags(trim($_POST['author'])));//Автор
if(isset($_POST['costprod'])) $costprod=$_POST['costprod'];//Цена руб
if(isset($_POST['namearticle'])) $namearticle=htmlspecialchars(strip_tags(trim($_POST['namearticle'])));//Имя статьи
if(isset($_POST['id'])) $id=intval($_POST['id']);
if(isset($_POST['title'])) $title=htmlspecialchars(strip_tags(trim($_POST['title'])));//Имя статьи
if(isset($_POST['keywords'])) $keywords=htmlspecialchars(strip_tags(trim($_POST['keywords'])));//Ключевые слова
if(isset($_POST['listarticle'])) $listarticle=intval($_POST['listarticle']);//Номер сортировки
if(isset($_POST['mess'])) $mess=$_POST['mess'];//Текст

//Организация контента!!!!!!!!!!!!!!!!
if(isset($_POST['afterfasten'])) $afterfasten=htmlspecialchars(strip_tags(trim($_POST['afterfasten'])));
if(isset($_POST['beforefasten'])) $beforefasten=htmlspecialchars(strip_tags(trim($_POST['beforefasten'])));
if(isset($_POST['inpart'])) $inpart=htmlspecialchars(strip_tags(trim($_POST['inpart'])));
if(isset($_POST['picker'])) $picker=$_POST['picker'];
if(isset($_POST['replacement'])) $replacement=htmlspecialchars(strip_tags(trim($_POST['replacement'])));//Переименовать  replpart
if(isset($_POST['simplearticle'])) $simplearticle=htmlspecialchars(strip_tags(trim($_POST['simplearticle'])));
if(isset($_POST['deleatepart'])) $deleatepart=htmlspecialchars(strip_tags(trim($_POST['deleatepart'])));//Удалить раздел

//Информация!!!!!!!!!!!!!
 $today=date("Y-m-d");//Дата опубликования или изменения 
//узлы
$arrblock=array("book"=>"Блог","book1"=>"Блог1","book2"=>"Блог2","book3"=>"Блог3","book4"=>"Блог4","freeware"=>"Скачивания","shop"=>"Магазин","payware"=>"Платные продукты","common"=>"Общие");

//Сканирование директорий
//$kindforskan=array("modules","templates","menus");
if(isset($kindforskan)) { 
$dirskan="../$kindforskan";
//$arrkind="array".$kindforskan;
$fileserial=$kindforskan.".txt";
//$answeraerial="serial".$kindforskan;
$startarray;
}
//Информация - сканирование

$kindforskan="template";
$dirskan="../$kindforskan";
             if(file_exists($dirskan))  {
                 $shabln=array();
                 $dr=$dirskan;
                 $skip = array('.', '..');
                 $sh=scandir($dr);
                     foreach($sh as $temple) {
                        if(!in_array($temple, $skip)) 
                             $shablon[]=$temple;
                }
clearstatcache();
  }

$kindforskan="menu";
$dirskan="../$kindforskan";
             if(file_exists($dirskan))  {
                 $shabln=array();
                 $dr=$dirskan;
                 $skip = array('.', '..');
                 $sh=scandir($dr);
                     foreach($sh as $temple) {
                        if(!in_array($temple, $skip)) 
                          if($temple!=='topmenu') 
                             $mn[]=$temple;
                }
clearstatcache();
  }
$kindforskan="modul";
$dirskan="../$kindforskan";
             if(file_exists($dirskan))  {
                 $shabln=array();
                 $dr=$dirskan;
                 $skip = array('.', '..');
                 $sh=scandir($dr);
                     foreach($sh as $temple) {
                        if(!in_array($temple, $skip)) 
                          if($temple!=='topmenu') 
                             $modulu[]=$temple;
                }
clearstatcache();
  }
//шаблоны. Массив 
if(!file_exists("../common/templates.txt") && !isset($imtempl)) {
    $imtempl=array("simple"=>array("join"=>1));
       touch("../common/templates.txt");
        $firstm=serialize($imtempl);
         $paq = fopen( "../common/templates.txt", "w") or die( "Такой позиции не существует");
          fputs( $paq, "$firstm");
          fflush($paq);
          fclose( $paq);        
      @header("Location: ".$_SERVER['HTTP_REFERER']);
    }
  else {
     if(file_exists("../common/templates.txt")) {
        $ct="../common/templates.txt";
        $fon=fopen($ct, "r");
        $imtempl=unserialize(fread($fon, filesize($ct)));
                             if(!is_array ($imtempl)) {
// если что-то прошло не так, инициализировать  массив 
                  $imtempl=array("simple"=>array("join"=>1));
         }
        fflush($fon);
        fclose($fon);clearstatcache();
     }
 } 
//модули. Массив 
if(!file_exists("../common/modulen.txt") && !isset($immod)) {
    $immod=array("modcreg"=>array("pos"=>6,"russ"=>"Модуль входа",'dopcon'=>0),"mdObr"=>array("pos"=>0,"russ"=>"Обратная связь",'dopcon'=>16));
       touch("../common/modulen.txt");
        $firstm=serialize($immod);
         $paq = fopen( "../common/modulen.txt", "w") or die( "Такой позиции не существует");
          fputs( $paq, "$firstm");
          fflush($paq);
          fclose( $paq);
         
      @header("Location: ".$_SERVER['HTTP_REFERER']);
    }
  else {
     if(file_exists("../common/modulen.txt")) {
        $ct="../common/modulen.txt";
        $fon=fopen($ct, "r");
        $immod=unserialize(fread($fon, filesize($ct)));
                             if(!is_array ($immod)) {
// если что-то прошло не так, инициализировать  массив
                  $immod=array("modcreg"=>array("pos"=>6,"russ"=>"Модуль входа",'dopcon'=>0),"mdObr"=>array("pos"=>0,"russ"=>"Обратная связь",'dopcon'=>16));
         }
        fflush($fon);
        fclose($fon);clearstatcache();
     }
 } 
//Массив позиций действующих модулей
if(isset($immod)) {
   foreach($immod as $key=>$val)
      $posone[$key]=$immod[$key]['pos'];
         $pos=array_flip($posone);
}
//Проверка на соответствие массива модулей(шаблонов) и наличия модулей(шаблонов) в папке $modulu-$allitem $immod-arritem

function diffForArr($allitem,$arritem,$kinddif) {
if(isset($_POST['outof'])) $outof=htmlspecialchars(strip_tags(trim($_POST['outof'])));
if(isset($allitem) && isset($arritem)) {
      $keyimmod=array_keys($arritem);
  if(count($allitem) !==count($keyimmod)) { 
          if(count($allitem)>count($keyimmod)) { 
              $differencemore=array_diff($allitem,$keyimmod);
         $difference=1;
         //Найти ключи immod, сравнить с папкой
     }      
         if(count($allitem)<count($keyimmod)) {
              $differencemore=array_diff($keyimmod,$allitem); 
         $difference=2; 
     }
if(isset($difference) && $difference>0 && isset($differencemore) && isset($outof)) {
             switch($kinddif) {
               case "modul":
                 $dir="../modul";
                 $needfile="modulen.txt";
                 $homefile="formod.php";
               break; 
              case "template":
                 $dir="../template";
                 $needfile="templates.txt";
                 $homefile="templates.php";
               break;     
           }
     switch($difference) {
        case "1":
       //Взять массив $modulu//Удалить лишнее
           if(isset($differencemore)) {
             foreach($differencemore as $keydif=>$valdif) {
                  if(file_exists("$dir/$valdif")) {                   
                    $newmodulu[$valdif]=array();
                    $drmod="$dir/$valdif";
                    $skip=array('.','..');
        if(!empty($drmod)) $mdsh=scandir($drmod);
           foreach($mdsh as $shmod) {
             if(!in_array($shmod, $skip)) $newmodulu[$valdif][]=$shmod;
             }   	
           }
clearstatcache();
         }
            if(isset($newmodulu)) 
               foreach($newmodulu as $keyone=>$valueone) {
                 foreach($valueone as $keytwo=>$valuetwo)  {                 
                        if(is_dir("$dir/$keyone/$valuetwo")) {
                    $newonemodul[$keyone][]=$valuetwo;
                          }
                    //else
                    //rmdir("$dir/$keyone");
                              
         }
}
//Далее открыть директорию, если она есть, прочитать ее и очистить
          if(isset($newonemodul))
             foreach($newonemodul as $keydir=>$valdir) {
                 foreach($valdir as $keydiropen=>$valdiropen)                
                  if(file_exists("$dir/$keydir/$valdiropen")) {                   
                    $newdirmodulu[$keydir][$valdiropen]=array();
                    $drmod="$dir/$keydir/$valdiropen";
                    $skip=array('.','..');
        if(!empty($drmod)) $mdsh=scandir($drmod);
           foreach($mdsh as $shmod) {
             if(!in_array($shmod, $skip)) $newdirmodulu[$keydir][$valdiropen][]=$shmod;
             }
     	
             
            if(isset($newdirmodulu[$keydir][$valdiropen])) {
                foreach($newdirmodulu[$keydir][$valdiropen] as $kfile=>$unlfile) 
                   unlink("$dir/$keydir/$valdiropen/$unlfile");
                    rmdir("$dir/$keydir/$valdiropen");
                                                                
             } 
          } 
  }  
             if(isset($newmodulu)) 
               foreach($newmodulu as $keyone=>$valueone) {
                 foreach($valueone as $keytwo=>$valuetwo)  {                 
                  if(is_file("$dir/$keyone/$valuetwo"))
                     unlink("$dir/$keyone/$valuetwo");                         
                          } 
              rmdir("$dir/$keyone");      
         }
           if(isset($allitem)) unset($allitem);
           if(isset($arritem)) unset($arritem);
           if(isset($kinddif)) unset($kinddif);
           if(isset($difference)) unset($difference);
           if(isset($differencemore)) unset($differencemore);
           if(isset($newmodulu)) unset($newmodulu);
           if(isset($outof)) unset($outof);
           if(isset($newonemodul)) unset($newonemodul);
           if(isset($dir)) unset($dir);
           if(isset($newdirmodulu)) unset($newdirmodulu);
      @header("Location: ".$_SERVER['HTTP_REFERER']);
}               
        break;
        case "2":
        //Удалить лишнее
           foreach($differencemore as  $valarr)
             unset($arritem[$valarr]);
              if(isset($arritem)) $savearray=serialize($arritem);
               if(isset($savearray)) {
  $pq=fopen( "../common/$needfile", "w") or die ("Такой позиции не существует");
    fputs( $pq, "$savearray");
    fflush($pq);
    fclose( $pq);
              if(isset($outof)) unset($outof);
     @header("Location:avpult.php?page=common&common=$homefile");
           }
        break;
        }     
}
                   if(isset($difference)) {
 if($difference===1) echo (count($allitem)-count($keyimmod))."Лишний модуль в директории модулей!".var_dump($differencemore);
 if($difference===2) echo (count($keyimmod)-count($allitem))."Лишний модуль в записях!".var_dump($differencemore);
echo "<form method='POST'>
 
          <input type='hidden' name='difference' value='$difference' />
          <input type='submit' name='outof' value='Исправить!' />
</form>"; 
       }
   }

 }
}

//Настройки модулей сканирование
if(file_exists("set/")) {
        $setcont=array();
        $dirskan="set/";
        $skip = array('.', '..');
        $setcontscan=scandir($dirskan);
          foreach($setcontscan as $listset) {
             if(!in_array($listset, $skip)) 
                if($listset!=="mdObr.php") $setcont[]=basename($listset,".php");
    }
}
//Загрузки $add -$addfile-uzfile, $baseaddfile-uzmod,$preliminary-predvzag,$retrieve-tupica, nameupload - imaskach,preliminaryload-predvscach
if(isset($add)) {
  $today=date("Y-m-d");
//Проверить - пустая ли папка, если нет - очистить
  if(!file_exists("../uploads")) mkdir("../uploads");clearstatcache();
      $err=array(); $mistake=count($err); 
      $upload='../uploads/';
    $baseaddfile=basename($_FILES['uploadfile']['name']);
//Загружаем в папку uploads baseaddfile
        $preliminary=$upload.$baseaddfile;
   if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $preliminary)) {
//получаем - preliminary =загруженый zip(архив1)  и одну папку addfile с именем страницы, в папке addfile - архив2-установочный)
      if(file_exists("$preliminary")) $retrieve=new PclZip($preliminary);
          if($retrieve->extract("../uploads/")==0) {
                die("Error:".$retrieve->errorInfo(true));
            } //end retrieve
             if(file_exists("../uploads/$addfile")) {
        //Удалили архив1, осталась папка addfile с архивом установочного файла            
                 if(isset($preliminary)) unlink($preliminary);
                //сканируем папку addfile, чтобы узнать имя установочного файла
                  $nameupload=array();
                  $dr="../uploads/$addfile";
                  $skip = array('.', '..');
                  if(!empty($dr)) $mdsh=scandir($dr);
                    foreach($mdsh as $shmod) {
                      if(!in_array($shmod, $skip)) $nameupload[]=$shmod;
               } // end skan
//Вытащить архив из папки $nameupload[], удалить папку
                 if(file_exists("../uploads/$addfile/$nameupload[0]"))
                    if(copy("../uploads/$addfile/$nameupload[0]","../uploads/$nameupload[0]"))
                        unlink("../uploads/$addfile/$nameupload[0]");
                        rmdir("../uploads/$addfile");
           } //end 
     }//end move


       //Определяем две первые буквы имени загружаемого файла
          $thatstring=$nameupload[0];$thisstring=$thatstring{0}.$thatstring{1};  
           //Контрольная строка 
          $stringcontrol=array("1"=>"md","2"=>"mn","3"=>"tm","4"=>"zv","5"=>"bo","6"=>"fr","7"=>"sh","8"=>"pa");
    if(array_search($thisstring,$stringcontrol)) $ok="ok"; else $err[]="Откуда взямшись?";
           //$designation=$thisstring;
        $mistake=count($err); 
  if(isset($ok) && $ok==="ok"){
   if(isset($thisstring)) 
       switch($thisstring) {
           case "bo": $designation="block";break;
           case "fr": $designation="block";break;
           case "sh": $designation="block";break;
           case "pa": $designation="block";break;
       default: $designation=$thisstring;break;
       }
   }
 
} //end add
////$nameupload  $designation  thisstring
//Установки preliminary($predvzag),$upload,retrieve ($tupica),nameupload($imaskach),
 //if($mistake===0) {
   if(isset($designation) && isset($thisstring) && isset($nameupload)) { 
     if(preg_match("/^($thisstring){1}+(plat){1}+[a-zA-Z]{0,20}+(\.)+(zip)+$/i",$nameupload[0])) 
        $inspect=2; 
      //else $inspect=1;
   $mybasefile=basename($nameupload[0],".zip");
 
     switch($designation) {
           case "block"://Встраиваемый узел 
           if(!file_exists("../$mybasefile")) mkdir("../$mybasefile");                       
            //Создаем файл admin menu
            if(!file_exists("menu/menu$mybasefile")) mkdir("menu/menu$mybasefile");
             //$uploaddir='/';
             $putting=1;//Первое условие установки putting(ustanovka)
             $mounting="blocking";//Второе Условие установки mounting(ustanov)
             break;
          case "md"://Встраиваемый модуль
            //директории установки
             $uploaddir='../modul';
             $putting=0;//Первое условие установки putting(ustanovka)
             $mounting="modul";//Второе Условие установки mounting(ustanov)
             if(isset($inspect) && $inspect===2) $newk="осуществлениеожидаемогои";
             break;
           case "mn"://Боковое меню
           //директории установки
             $uploaddir='../menu/';
             $putting=0;//Первое условие установки putting(ustanovka)
             $mounting="menu";//Второе Условие установки mounting(ustanov)
             if(isset($inspect) && $inspect===2) $newk="Крепковзятьсяза";
             break;
           case "tm"://Шаблон
           //директории установки
             $uploaddir='../template/';
             $putting=0;//Первое условие установки putting(ustanovka)
             $mounting="template";//Второе Условие установки mounting(ustanov)
             if(isset($inspect) && $inspect===2) $newk="Понимающеесердце";
            break; 
           case "zv"://Административный модуль
           //директории установки
             $uploaddir='modul/';
             $putting=0;//Первое условие установки putting(ustanovka)
             $mounting="adminmodul";//Второе Условие установки mounting(ustanov)
             if(isset($inspect) && $inspect===2) $newk="Знаниеделаетнадменным";
            break;             
      } //switch($designation)  
   } //designation
      if(isset($putting) && isset($nameupload) && isset($mybasefile)) {
       $uploadfile="../uploads/".$nameupload[0];//Файл установки 
            if($putting===1) {
                   if(file_exists($mybasefile)) 
                       $err[]="<h3>Файл с таким именем уже существует!</h3>";
             //Распаковать в текущую папку
                    if(file_exists("$uploadfile")) 
                         $retrievenew=new PclZip($uploadfile);
                        if($retrievenew->extract()==0) {
                           die("Error:".$retrievenew->errorInfo(true));
                          } //end retrieve 
                        else unlink($uploadfile);
                     
          if(file_exists("$mybasefile/top.php"))
             if(copy("$mybasefile/top.php","../$mybasefile/top.php")) {
                         unlink("$mybasefile/top.php"); 
                 } 
          if(file_exists("menu/menu$mybasefile"))
             if(copy("$mybasefile/menuside.php","menu/menu$mybasefile/menuside.php")) {
                         unlink("$mybasefile/menuside.php"); 

                 }
  $myvar=compact('mybasefile');
            $dublemyvar=$myvar['mybasefile'];
            $myvarstring=$arrblock[$dublemyvar];
           $mysqli->query("SET NAMES 'utf8'");
              if(!$mysqli->query("CREATE TABLE IF NOT EXISTS $mybasefile(
                id int (10) AUTO_INCREMENT,
                title varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                list int (20),
                content text CHARACTER SET utf8 COLLATE utf8_general_ci,
                author varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci,
                dat date,
                keywords varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                annotation text CHARACTER SET utf8 COLLATE utf8_general_ci,
                idpart int (10),
              PRIMARY KEY (id)) COMMENT='Тексты статей узла $myvarstring'")) {
    echo "Не удалось создать таблицу $myvarstring: (" . $mysqli->errno . ") " . $mysqli->error;
                    }
                 $resu=$mysqli->query("SELECT content FROM $mybasefile WHERE id='1'");
                 $prov=$resu->fetch_array();
                 if(empty($prov['content'])) {
                  $mysqli->query("SET NAMES 'utf8'");
                       if(!$mysqli->query("INSERT INTO $mybasefile(
                   title,list,content,author,dat,keywords,annotation,idpart)
                      VALUES('$myvarstring','1','Приветствую Вас на главной странице узла $myvarstring!','admin','$today','.','.','0')"))                                      {
     echo "Не удалось ввести данные в $myvarstring: (".$mysqli->errno . ")".$mysqli->error;
                }
           }
        else echo "Данные уже введены в таблицу $!";
                $newcomment="feedback".$mybasefile;
                $mysqli->query("SET NAMES 'utf8'");
           if(!$mysqli->query("CREATE TABLE IF NOT EXISTS $newcomment(
              id int (10) AUTO_INCREMENT,
              comment text CHARACTER SET utf8 COLLATE utf8_general_ci,
              namecostomer varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci,
              email varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
              idarticle int(10),
              namearticle varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
              dat date,
              moder tinyint(4),
       PRIMARY KEY (id)) COMMENT='Комментарии к статьям узла $myvarstring'")) {
         echo "Не удалось создать таблицу $myvarstring: (".$mysqli->errno.")".$mysqli->error;
              }
                $newpart="part".$mybasefile;
                $mysqli->query("SET NAMES 'utf8'");
           if(!$mysqli->query("CREATE TABLE IF NOT EXISTS $newpart(
              id int (10) AUTO_INCREMENT,
              title varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci,
              list int (20),
              PRIMARY KEY (id)) COMMENT='Разделы узла $myvarstring'")) {
echo "Не удалось создать таблицу $myvarstring: (".$mysqli->errno.")" . $mysqli->error;
              }
         if(isset($mybasefile) && isset($thisstring)) { 
//Переместить файлы//Создать таблицы
               switch($thisstring) {
                 case "fr":
//директории установки
         if($mybasefile==="freeware") {
            if(!file_exists("../$mybasefile/")) mkdir("../$mybasefile/");
              if(!file_exists("../$mybasefile/download")) mkdir("../$mybasefile/download");
                  if(file_exists("../$mybasefile")) {
                   if(file_exists("../$mybasefile/download"))
                   if(file_exists("$mybasefile/download")) 
                     if(file_exists("$mybasefile/download/freeware.php"))
                       if(copy("$mybasefile/download/freeware.php","../$addfile/download/freeware.php")) {
                         unlink("$mybasefile/download/freeware.php"); 
                         rmdir("$mybasefile/download");
                 } 
                   if(file_exists("$mybasefile/freeload.php"))
                     if(copy("$mybasefile/freeload.php","../$mybasefile/freeload.php")) {
                         unlink("$mybasefile/freeload.php"); 
                 } 
              }
          }
                  break;
                 case "pa":
//директории установки
          if($mybasefile==="payware") {
            if(!file_exists("../$mybasefile/")) mkdir("../$mybasefile/");
              if(!file_exists("../$mybasefile/download")) mkdir("../$mybasefile/download");
                   $accountingtablenew="accountingpayware";
                     $mysqli->query("SET NAMES 'utf8'");
                     if(!$mysqli->query("CREATE TABLE IF NOT EXISTS $accountingtablenew(
                      id int(10),
                      title varchar(128), 
                      kodproduct int(10),
                      cost decimal(9,2),
                      saldo decimal(9,2),
                      debet decimal(9,2),
                      kredit decimal(9,2),
                      month varchar(128),
                   PRIMARY KEY (id)) COMMENT='Учет $myvarstring'")) {
                    echo "Не удалось создать таблицу Учет $myvarstring: (".$mysqli->errno.")".$mysqli->error;
                }
          }
                  break;
                 case "sh":
//директории установки
            if(!file_exists("../$mybasefile/")) mkdir("../$mybasefile/");
                 if($mybasefile==="shop") {
                   $accountingtablenew="accountingshop";
                     $mysqli->query("SET NAMES 'utf8'");
                     if(!$mysqli->query("CREATE TABLE IF NOT EXISTS $accountingtablenew(
                      id int(10),
                      title varchar(128), 
                      kodproduct int(10),
                      cost decimal(9,2),
                      saldo decimal(9,2),
                      debet decimal(9,2),
                      kredit decimal(9,2),
                      month varchar(128),
                   PRIMARY KEY (id)) COMMENT='Учет $myvarstring'")) {
                    echo "Не удалось создать таблицу Учет $myvarstring: (".$mysqli->errno.")".$mysqli->error;
                }
          }


                  break;
       }          
     }
  }
                        if($putting===0) { 
             //Распаковать в указанную директорию//Создать ключи
                     if(file_exists("$uploadfile")) $retrievenew1=new PclZip($uploadfile);
                        if($retrievenew1->extract($uploaddir)==0) {
                           die("Error:".$retrievenew1->errorInfo(true));
                     } //end retrieve
                        else unlink($uploadfile);
                             if(isset($inspect) && $inspect===2)  { 
                              if(file_exists("$uploaddir/$mybasefile/key.php"))
                                  include_once "$uploaddir/$mybasefile/key.php";

                              if(isset($newnewkey) && $newnewkey==="OK") {
                                 $f1="$"."keyust";
                                if(!file_exists("$uploaddir/$mybasefile/newkey.php"))  
                                 touch("$uploaddir/$mybasefile/newkey.php"); {
                                 $pd=fopen("$uploaddir/$mybasefile/newkey.php", "wb")or die (". Такой позиции не существует");
                                  flock($pd, 2); // Полная блокировка
                                  fputs($pd, "<?php if(!defined('BUGIT')) exit ('Ошибка соединения');$f1='$ewkey'; ?>");
                                  fflush($pd);
                                  flock($pd, 3); // Снятие блокировки
                                  fclose($pd);
                                }
                          if(file_exists("$uploaddir/$mybasefile/key.php"))
                              unlink("$uploaddir/$mybasefile/key.php");
                     }
                 else $err[]="Нет ключа";
                 }
            }
       }
   if(isset($mounting)) {
       if($mounting==="modul") {
//Добавить настройки
   if(isset($uploaddir) && $uploaddir==="../modul") {
//При наличии дополнительной функциональности - загружаем файл настроек в папку настроек
     if(file_exists("$uploaddir/$mybasefile/$mybasefile.php")) {
        if(!file_exists("set")) mkdir("set");
        if(copy("$uploaddir/$mybasefile/$mybasefile.php", "set/$mybasefile.php"))
           unlink("$uploaddir/$mybasefile/$mybasefile.php"); 
         }
//Для модуля постоянного подключения извлекаем позицию подключения
      if(file_exists("$uploaddir/$mybasefile/kon.php")) {
         include_once("$uploaddir/$mybasefile/kon.php");//$const=$con;
     }
//Для переменного - задаем позиции значение 0
   else $conwith=0;
//Добавляем данные в массив модулей и сохраняем массив 
     if(isset($immod)) {
       $immod[$mybasefile]=array('pos'=>0,'russ'=>$imjaruav,'dopcon'=>$conwith);
         if(isset($immod)) $vsuload=serialize($immod);
           $ps=fopen( "../common/modulen.txt", "wb")or die ("Такой позиции не существует");
           fputs( $ps, "$vsuload");
           fflush($ps);
           fclose( $ps);
//Удаляем вспомогательный файл с позицией модуля, если он есть
        if(file_exists("$uploaddir/$mybasefile/kon.php"))
            unlink("$uploaddir/$mybasefile/kon.php");
            }
         }

      }
       if($mounting==="template") {
//Добавляем данные в массив модулей и сохраняем массив 
     if(isset($imtempl)) {
       $imtempl[$mybasefile]=array("join"=>0);
         if(isset($imtempl)) $vsuload=serialize($imtempl);
           $ps=fopen( "../common/templates.txt", "wb")or die ("Такой позиции не существует");
           fputs( $ps, "$vsuload");
           fflush($ps);
           fclose( $ps);
            }
      }
@header("Location: ".$_SERVER['HTTP_REFERER']);
   }
if(isset($err) && isset($mistake) && $mistake!==0 && isset($add)) {
     echo "<b>При установке произошли следующие ошибки:</b><br>";
       foreach($err as $error) echo $error."<br>";
}
else { 
if(isset($baseaddfile)) unset($baseaddfile);if(isset($add)) unset($add);if(isset($mounting)) unset($mounting);if(isset($designation)) unset($designation);if(isset($uploaddir)) unset($uploaddir);if(isset($inspect)) unset($inspect);if(isset($thisstring)) unset($thisstring);if(isset($nameupload)) unset($nameupload);if(isset($newcomment)) unset($newcomment);if(isset($uploadfile)) unset($uploadfile);if(isset($conwith)) unset($conwith);if(isset($newpart)) unset($newpart);if(isset($myvarstring)) unset($myvarstring);if(isset($_FILES['uploadfile']['name'])) unset($_FILES['uploadfile']['name']);if(isset($mybasefile)) unset($mybasefile);clearstatcache();

  }
//} //end add
//Подключения - отключения $tojoin , $toleave!!!!!!!!!!
if(isset($tojoin)) {
    if(isset($kind)) 
        switch($kind) { 
              case "modul"://Подключаем - вводим в массив позицию модуля
            if(isset($immod) && isset($imjaengav)) if($immod[$imjaengav]["dopcon"]!==0) 
                  $nomerpos=$immod[$imjaengav]["dopcon"];
               if(isset($nomerpos)) {
                 if(isset($imjaengav) && isset($immod)) {
                      $immod[$imjaengav]["pos"]=$nomerpos;
                      $vsul=serialize($immod);
                     }
                clearstatcache();
                 }
               break;
             case "template":
            if(isset($imtempl)) if($imtempl[$templ]["join"]===0) 
                      
                        foreach($imtempl as $k=>$v) {
                             if($k!==$templ)
                               $imtempl[$k]["join"]=0;
                             else $imtempl[$k]["join"]=1;
                          }
                      $vsultempl=serialize($imtempl);
 
                break;
              case "menu":
                if(isset($side)) { //Подключение меню
                      $filename="$"."menusd";
                      $fp=fopen( "../variables/menusd.php", "w+")or die ("Не удалось открыть файл");
                      fputs($fp, "<?php if(!defined('BUGIT')) exit('Ошибка соединения'); $filename='$side'; ?>");
                      fclose( $fp );
           
                   }
                 break;
    }@header("Location: ".$_SERVER['HTTP_REFERER']);
}
//-отключение
if(isset($toleave)) {
         if(isset($kind)) 
             switch($kind) {
                case "modul":
                    $immod[$imjaengav]["pos"]=0;
                    $vsul=serialize($immod);
                 break;
                case "menu":
                  if(isset($side)) {
                    if(file_exists("../variables/menusd.php"))
                      unlink("../variables/menusd.php");clearstatcache();
                    @header("Location: avpult.php?page=common&common=mn.php");
                     }
                 break;
        }
}
//Удаление модуля, шаблона, звена, меню,  $kind - remove
if(isset($remove)) {
    if(isset($kind)) {
//Если это модуль, удаляем из списка модулей и перезаписываем, если шаблон, удаляем папку макета
          switch($kind) {
case "template":
     if(isset($templ)) {
           if($osnova===$templ) {
             die("Пожалуйста, подключите сначала другой шаблон, после чего переходите к удалению. <a href='$_SERVER[HTTP_REFERER]'>Вернуться</a>");
                }
                else {
                 if(file_exists("../template/$templ/maket/")) {
                      $kb="../template/$templ/maket";
                       //Открываем папку
                           $dkb=opendir($kb) or die("Не удалось открыть каталог $c");
                       //В цикле читаем
                              while(FALSE!==($opb=readdir($dkb))) {
                                    if($opb!= "." && $opb != "..") unlink("$kb/$opb");
                                         }
                                        closedir($dkb);rmdir("../template/$templ/maket");
          } 
        if(isset($imtempl)) 
              if(isset($imtempl[$templ])) 
                    unset($imtempl[$templ]);
                        //Сохраняем массив
                      $vsultempl=serialize($imtempl);
        } 
       $mytem=$templ;$dirdel="../template";
     }
    break;
case "modul":
    if(isset($imjaengav)) {
       if($imjaengav==='modcreg') die ("Модуль не подлежит удалению!".$immod[$imjaengav]["russ"]);
       else {
         if(isset($immod)) 
              if(isset($immod[$imjaengav])) 
                    unset($immod[$imjaengav]);
                        //Сохраняем массив
                    $vsul=serialize($immod);
             }
          if(file_exists("set/$imjaengav.php")) {//Удаляем настройки модуля,если они существуют
              if(unlink("set/$imjaengav.php")) {
                       if(file_exists("../common/mml.php")) unlink("../common/mml.php");
                }
             }
       $mytem=$imjaengav;
       $dirdel="../modul";
}
break;
case "zveno": if(isset($amod)) $mytem=$amod;$dirdel="modul";
break;
case "menu": 
          if(isset($side)){
            if($side==="menusimple") die("Это меню не подлежит удалению. <a href='$_SERVER[HTTP_REFERER]'>Вернуться</a>");
             else {
                 $mytem=$side;
                 $dirdel="../menu";
             }
          }
break;
       }
//Сканируем и удаляем файлы указанной директории
if(isset($mytem) && isset($dirdel)) {
   if(file_exists("$dirdel/$mytem"))
//Открываем каталог//Формируем массив 
               $zvdeleate=array();$dr="$dirdel/$mytem";$skip=array('.','..');
                     if(!empty($dr)) $mdsh = scandir($dr);
                              foreach($mdsh as $shmod) {
                           if(!in_array($shmod, $skip)) $zvdeleate[]=$shmod;
                          }
                        clearstatcache();
                  if(isset($zvdeleate)) {
                       foreach($zvdeleate as $key=>$val) 
                                 unlink("$dirdel/$mytem/$val");
                         }
                     if(rmdir("$dirdel/$mytem")) {
                             clearstatcache();
                           if(isset($dirdel)) unset($dirdel);
                           if(isset($mytem)) unset($mytem);
                           if(isset($kind)) unset($kind);
                           if(isset($remove)) unset($remove);
                     @header("Location: ".$_SERVER['HTTP_REFERER']);
              }
            else echo "Ошибка удаления $mytem";
       } 
    }
}
//Массив модулей сохранение!!!!!!!!!!!!!!!!!
if(isset($vsul)) {
  $ps=fopen( "../common/modulen.txt", "w") or die ("Такой позиции не существует");
    fputs( $ps, "$vsul");
    fflush($ps);
    fclose( $ps);
              if(isset($outof)) unset($outof);
     @header("Location:avpult.php?page=common&common=formod.php ");
}
//Массив templates сохранение!!!!!!!!!!!!!!!!!
if(isset($vsultempl)) {
  $ps=fopen( "../common/templates.txt", "w") or die ("Такой позиции не существует");
    fputs( $ps, "$vsultempl");
    fflush($ps);
    fclose( $ps);

     @header("Location:avpult.php?page=common&common=templates.php ");
}
//Загрузка отдельных файлов()!!!!!!!!!!!
if(isset($_FILES['download']['name']) && $_FILES['download']['name']!=="") {
      if(isset($kind)) 
        switch($kind) {
          case "image":
   if(!file_exists("../images/"))  mkdir("../images/");clearstatcache();
      if(isset($radiobutton)) { 
   $uploaddir="../images/$radiobutton/";
      if(!file_exists("../images/$radiobutton"))  mkdir("../images/$radiobutton");clearstatcache();
      if(!file_exists("images/")) mkdir("images/");clearstatcache();
      if(!file_exists("images/$radiobutton"))  mkdir("images/$radiobutton");clearstatcache();
         }
           break;
          case "load":
           if(!file_exists("../modul/mdfreeload/$radiobutton")) mkdir("../modul/mdfreeload/$radiobutton");
                 if(isset($radiobutton))  
                  $uploaddir="../modul/mdfreeload/$radiobutton/";
           break;
          case "video":
if(isset($_POST['modulname'])) $modulname=htmlspecialchars($_POST['modulname']);
           if(!file_exists("../modul/$modulname/$radiobutton")) mkdir("../modul/$modulname/$radiobutton");
                 if(isset($radiobutton))  
                  $uploaddir="../modul/$modulname/$radiobutton/";               
           break;
            }

   foreach($_FILES['download']['name'] as $k=>$v) { 
         if(isset($_FILES['download']['name'][$k])) {
             $uplo[$k]=basename($v);
             $uploadfile[$k]=$uploaddir.$uplo[$k]; 
        if(move_uploaded_file($_FILES['download']['tmp_name'][$k], $uploadfile[$k])) {
         if(isset($kind) && $kind==="image")
          copy($uploadfile[$k],"images/$radiobutton/$uplo[$k]"); 
         else clearstatcache();           
                }
           }    
      }

      if(isset($radiobutton)) unset($radiobutton); 
      if(isset($uploaddir)) unset($uploaddir);
      if(isset($_FILES['download']['name'])) unset($_FILES['download']['name']);
       @header("Location: ".$_SERVER['HTTP_REFERER']);    
}
//Удаления1-узел 
if(isset($dispose)) {
 if(isset($radiobutton)) {
      switch($radiobutton) {
       case "freeware":
//Удалить файлы
         if(is_dir("../$radiobutton/download/")) { 
            $uzzagrone=array();
            $drz="../$radiobutton/download/";
            $skip=array('.', '..');
            $uzzg = scandir($drz);
             foreach($uzzg as $el) {
                if(!in_array($el, $skip)) $uzzagrone[]=$el;
                } clearstatcache();	
           }
if(isset($uzzagrone)) {
   foreach($uzzagrone as $val) { //Копируем остальные файлы в созданную папку
       if(file_exists("../$radiobutton/download/$val"))  {
           unlink("../$radiobutton/download/$val");
               } 
            }
        rmdir("../$radiobutton/download/");clearstatcache();
      }
         if(file_exists("../$radiobutton/freeload.php"))  {
           unlink("../$radiobutton/freeload.php");
               }
       break;
       case "payware" :
//Проверка
if(is_dir("../basket/basketpw") || is_dir("../basket/modValut") || is_dir("../basket/pay"))
     die("<h3>Сначала требуется удалить установленные компоненты!</h3>");
//Удалить файлы
         if(is_dir("../$radiobutton/res")) rmdir("../$radiobutton/res");
         if(is_dir("../$radiobutton/respredv")) rmdir("../$radiobutton/respredv");
         if(is_dir("../$radiobutton/download/")) { 
            $uzzagrone=array();
            $drz="../$radiobutton/download/";
            $skip=array('.', '..');
            $uzzg = scandir($drz);
             foreach($uzzg as $el) {
                if(!in_array($el, $skip)) $uzzagrone[]=$el;
                }	
           }
if(isset($uzzagrone)) {
   foreach($uzzagrone as $val) { //Копируем остальные файлы в созданную папку
       if(file_exists("../$radiobutton/download/$val"))  {
           unlink("../$radiobutton/download/$val");
               }
            }
        rmdir("../$radiobutton/download/");clearstatcache();
      }
//Удалить таблицы
  $accountingdeleate="accounting".$radiobutton;
$query="DELETE LOW_PRIORITY QUICK FROM $accountingdeleate";
  $result=$mysqli->query($query);
     if($result==true) {
       $querydel="DROP TABLE $accountingdeleate";
       $resultdel=$mysqli->query($querydel);
         if($resultdel==false)
         echo "Ошибка!<br>(".$mysqli->errno.")".$mysqli->error;
         }
    else echo "Ошибка!<br>(".$mysqli->errno.")".$mysqli->error;
       break;
       case "shop" :
//Проверка
if(is_dir("../basket/basketshop") || is_dir("../basket/modValut") || is_dir("../basket/payshop") || is_dir("accounting"))
     die("<h3>Сначала требуется удалить установленные компоненты!</h3>");
//Удалить файлы
         if(is_dir("../$radiobutton/res")) rmdir("../$radiobutton/res");
         if(is_dir("../$radiobutton/respredv")) rmdir("../$radiobutton/respredv");      
//Удалить таблицы
  $accountingdeleate="accounting".$radiobutton;
$queryaccount="DELETE LOW_PRIORITY QUICK FROM $accountingdeleate";
  $resultaccount=$mysqli->query($queryaccount);
     if($resultaccount==true) {
       $querydel="DROP TABLE $accountingdeleate";
       $resultdel=$mysqli->query($querydel);
         if($resultdel==false)
         echo "Ошибка!<br>(".$mysqli->errno.")".$mysqli->error;
         }
        else echo "Ошибка!<br>(".$mysqli->errno.")".$mysqli->error;
       break;
     default:
//Удалить таблицы
  $deleatetable=$radiobutton;
  $deleateparttable="part".$radiobutton;
  $deleatefeedtable="feedback".$radiobutton;
  $querymain="DELETE LOW_PRIORITY QUICK FROM $deleatetable";
   $resultmain=$mysqli->query($querymain);
     if($resultmain==true) {
         $querymain2="DROP TABLE $deleatetable";
         $resultmain2=$mysqli->query($querymain2);
           if($resultmain2==false)
              echo "Ошибка!<br>(".$mysqli->errno.")".$mysqli->error;
              }
             else
          echo "Ошибка!<br>(".$mysqli->errno.")".$mysqli->error;
  $partquery="DELETE LOW_PRIORITY QUICK FROM $deleateparttable";
   $partresult=$mysqli->query($partquery);
     if($partresult==true) {
         $partquery2="DROP TABLE $deleateparttable";
         $partresult2=$mysqli->query($partquery2);
           if($partresult2==false)
              echo "Ошибка!<br>(".$mysqli->errno.")".$mysqli->error;
              }
             else
          echo "Ошибка!<br>(".$mysqli->errno.")".$mysqli->error;
  $feedquery="DELETE LOW_PRIORITY QUICK FROM $deleatefeedtable";
   $feedresult=$mysqli->query($feedquery);
     if($feedresult==true) {
         $feedquery2="DROP TABLE $deleatefeedtable";
         $feedresult2=$mysqli->query($feedquery2);
           if($feedresult2==false)
              echo "Ошибка!<br>(".$mysqli->errno.")".$mysqli->error;
              }
             else
          echo "Ошибка!<br>(".$mysqli->errno.")".$mysqli->error;
//Удалить папки и файлы админки
if(file_exists("menu/menu$radiobutton/")) {
  if(file_exists("menu/menu$radiobutton/menuside.php"))
     if(unlink("menu/menu$radiobutton/menuside.php"))
           rmdir("menu/menu$radiobutton/");clearstatcache();  
         }	
       
if(file_exists("$radiobutton/")) {  //Открыть и прочитать папку admin узла
 $uzadm=array();
 $drmn="$radiobutton/";
 $skip = array('.', '..');
 $uzam = scandir($drmn);
   foreach($uzam as $el) {
     if(!in_array($el, $skip)) $uzadm[]=$el;
       }	
   }
if(isset($uzadm)) {
  foreach($uzadm as $val) {
    if(file_exists("$radiobutton/$val")) 
         unlink("$radiobutton/$val");
         }
    if(rmdir("$radiobutton/")) clearstatcache();
    }
if(file_exists("images/$radiobutton/")) {  //Открыть и прочитать папку admin/images узла
 $uzadmimage=array();
 $drimage="images/$radiobutton/";
 $skip = array('.', '..');
 $uzamimage = scandir($drimage);
   foreach($uzamimage as $elimage) {
     if(!in_array($elimage, $skip)) $uzadmimage[]=$elimage;
       }	
   }
if(isset($uzadmimage)) {
  foreach($uzadmimage as $val) {
    if(file_exists("images/$radiobutton/$val")) 
         unlink("images/$radiobutton/$val");
         }
    if(rmdir("images/$radiobutton/")) clearstatcache();
    }
//Удалить папки и файлы корня
  if(file_exists("../images/$radiobutton/")) {  //Открыть и прочитать папку admin/images узла
 $uzimage=array();
 $drimages="../images/$radiobutton/";
 $skip = array('.', '..');
 $uzimage = scandir($drimages);
   foreach($uzimage as $elimages) {
     if(!in_array($elimages, $skip)) $uzimages[]=$elimages;
       }	
   }
if(isset($uzimages)) {
  foreach($uzimages as $val) {
    if(file_exists("../images/$radiobutton/$val")) 
         unlink("../images/$radiobutton/$val");
         }
    if(rmdir("../images/$radiobutton/")) clearstatcache();
    }
//К моменту удаления должны быть пусты
if(file_exists("../$radiobutton/")) {
      if(rmdir("../$radiobutton/")) clearstatcache();
     @header("Location:avpult.php");
           }
       break;
       } //switch
    }
}

//Удаление отдельных файлов(изображения, скачивания)
if(isset($takeaway)) {
  if(isset($radiobutton)) {
      if(isset($kind)) 
        switch($kind) {
          case "image":
               $ourdir="../images";
           break;
          case "load":
               $ourdir="../modul/mdfreeload";                
           break;
          case "video":
               $ourdir="../modul/mdvideo";                
           break;
            }
    if(file_exists("$ourdir/$radiobutton/"))
     if(file_exists("$ourdir/$radiobutton/$delizo"))
       if(unlink("$ourdir/$radiobutton/$delizo")) {
        unset($radiobutton);unset($delizo);
          }
@header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}

//БД!!!!!!!!!!!!
if(isset($unit) && $unit!=="set") {
                           $maintable=$unit;
                           $parttable="part".$unit;
                   if($unit==="payware" || $unit==="shop")
                           $accountingtable="accounting".$unit;
      //Проверка записей в таблице Статьи*************************
  $mysqli->query("SET NAMES 'utf8'");
  if(isset($maintable))
   if($articfirst=$mysqli->query("SELECT id FROM $maintable")) {
      $num=$articfirst->num_rows; 
        if(isset($num) && $num>0) $idartic="YES";
       } 
     else $idartic="No";
   if($articfirst) $articfirst->close();
       // проверка на наличие разделов********************
    if(isset($parttable))
      if($partfirst=$mysqli->query("SELECT id FROM $parttable")) {
        $num=$partfirst->num_rows; 
          if(isset($num) && $num>0) $idfirst="YES";
          } 
        else $idfirst="No";
     if($partfirst) $partfirst->close();

        //Подготовленные выражения
 //Разделы
//Создание имени раздела
if(isset($parttable)) {
$mysqli->query("SET NAMES 'utf8'");
  $insertrazd=$mysqli->prepare("INSERT INTO $parttable (title) VALUES (?)");
    $insertrazd->bind_param('s',$nmn);
//Изменить номер сортировки  раздела
$mysqli->query("SET NAMES 'utf8'");
  $uppart=$mysqli->prepare("UPDATE $parttable SET list=? WHERE id=?");
    $uppart->bind_param('ii',$uplstpart,$upidpart);
}
// Обновление имени раздела
if(isset($parttable) && isset($idfirst) && $idfirst="YES") {
$mysqli->query("SET NAMES 'utf8'");
  $querypart="UPDATE $parttable SET title=? WHERE id=?";
    $strazdel=$mysqli->prepare($querypart);
      $strazdel->bind_param('si',$mqrazdel,$mqoldrazdel);
}


//Вставить статью
$mysqli->query("SET NAMES 'utf8'");
$insertarticl=$mysqli->prepare("INSERT INTO $maintable (title,content,author,dat,keywords,annotation,idpart) VALUES (?,?,?,?,?,?,?)");
$insertarticl->bind_param('ssssssi',$tit,$mss,$avt,$dt,$kw,$antc,$idrz);
//Изменить номер сортировки статьи
$mysqli->query("SET NAMES 'utf8'");
$updarticle=$mysqli->prepare("UPDATE $maintable SET list=? WHERE id=?");
$updarticle->bind_param('ii',$upspartcl,$upidartcl);
//Изменение данных статьи
$mysqli->query("SET NAMES 'utf8'");
$upallarticl=$mysqli->prepare("UPDATE $maintable SET title=?,list=?,content=?,author=?,dat=?,keywords=?,annotation=?,idpart=? WHERE id=?");
$upallarticl->bind_param('sisssssii',$tit,$upspartcl,$mss,$avt,$dt,$kw,$antc,$idrz,$totid);

//accountingtable
                   if($unit==="payware" || $unit==="shop") {
  $insertacc=$mysqli->prepare("INSERT INTO $accountingtable (id,title,kodproduct,cost,saldo,debet,kredit,month) VALUES (?,?,?,?,?,?,?,?)");
  $insertacc->bind_param('isidddds',$idacc,$titass,$kd,$cst,$insertsal,$insertdeb,$insertkred,$insertmes);

$updass=$mysqli->prepare("UPDATE $accountingtable SET title=? WHERE id=?");
$updass->bind_param('si',$upass,$upidacc);
}
//Организация контента
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$insertpart=$mysqli->prepare("UPDATE $maintable SET idpart=?,list=? WHERE id=?");
$insertpart->bind_param('iii',$bdidpart,$bdlistart,$bdidarticle);
$updarticlesimple=$mysqli->prepare("UPDATE $maintable SET idpart=? WHERE id=?");
$updarticlesimple->bind_param('ii',$upspartclsimpl,$upidartclsimpl);

//Выборка данных разделов*********************************
$mysqli->query("SET NAMES 'utf8'");
if(isset($idfirst) && $idfirst==="YES") {
    if($res=$mysqli->query("SELECT * FROM $parttable ORDER BY list")) while($menupt=$res->fetch_assoc()) {
       if(isset($menupt["id"])) $forcontent=$menupt["id"];
         $menupart[$forcontent]=$menupt["title"];
         $listpart[$forcontent]=$menupt["list"];
        }
   if(isset($res)) $res->close();if(isset($forcontent)) unset($forcontent);
     }
//Все статьи выборка idpart***********************************
$mysqli->query("SET NAMES 'utf8'");
if(isset($maintable)) if(isset($idartic) && $idartic==="YES") {
   if($selmainmenu=$mysqli->prepare("SELECT id,title,idpart,list FROM $maintable ORDER BY list ")) {
      $selmainmenu->execute(); 
      $selmainmenu->bind_result($idmain,$titlemain, $idpartmain,$titlelistfor); 
          while($selmainmenu->fetch()) {
             $idpart[$idmain]=$idpartmain;
             $titlelist[$idmain]=$titlelistfor;
             } 
     if(isset($selmainmenu)) $selmainmenu->close();
      }
   }

//Простые статьи выборка заголовков**************************
$mysqli->query("SET NAMES 'utf8'");
if(isset($maintable)) if(isset($idartic) && $idartic==="YES") {
if($selkeymenu=$mysqli->prepare("SELECT id,title FROM $maintable WHERE idpart=0  ORDER BY list ")) {
     $selkeymenu->execute(); 
     $selkeymenu->bind_result($idkey,$titlekey); 
         while($selkeymenu->fetch()) {
             $menutitle[$idkey]=$titlekey;
               } 
    if(isset($selkeymenu)) $selkeymenu->close();
          }
       } 
//Если  номер раздела имеется выводим контент вложенных в раздел статей
if(isset($idpart))
       foreach($idpart as $keypart=>$valpart) { 
                  $mysqli->query("SET NAMES 'utf8'");
          if(isset($maintable)) if(isset($idartic) && $idartic==="YES") {
             if($selmenupart=$mysqli->prepare("SELECT id,title FROM $maintable WHERE idpart='$valpart' ORDER BY list")) {
                 $selmenupart->execute(); 
                 $selmenupart->bind_result($idpt,$titlekeypt); 
                    while($selmenupart->fetch()) {
                         $menutitlepart[$valpart][$idpt]=$titlekeypt;
                        } 
         if(isset($selmenupart)) $selmenupart->close();
          }
        }
   }

//Организация контента !!!!!!!!!!!!!
//Переместить простую статью или статью другого раздела в выбранный раздел с изменением номера сортировки
if(isset($inpart)) {
   if(isset($picker)) {
            $mysqli->query("SET NAMES 'utf8'");
                   if(isset($maintable)) {
                      foreach($picker as $key=>$value) {
                        $newneed=$titlelist[$value];
                        $plus=($key*10)+$value; 
                        $bdidpart=$numberpart;
                        $listforchange=$newneed+$plus;
                        $bdlistart=$listforchange;
                        $bdidarticle=$value;
                              $insertpart->execute();
                               } 
                           }
               if(isset($insertpart)) $insertpart->close(); 
                  @header("Location: avpult.php?unit=".$unit."&amp;".$unit."=pick.php");
        }
  }
//Статью раздела сделать простой - выбранную статью или статьи - добавить 0 и удалить из разделов, статьи раздела исчезнут $picker - массив статей, которые делаем простыми
if(isset($simplearticle)) {
          if(isset($picker)) {
        $mysqli->query("SET NAMES 'utf8'");
           foreach($picker as $key=>$value) {
                              if(isset($value)) {
                                    $upspartclsimpl=0;
                                    $upidartclsimpl=$value;
                                      }
                              }
             if($updarticlesimple->execute())
               if(isset($updarticlesimple)) $updarticlesimple->close();
                  @header("Location: avpult.php?unit=".$unit."&amp;".$unit."=pick.php");
              }
          } 
//ПЕРЕИМЕНОВАТЬ РАЗДЕЛ
$mysqli->query("SET NAMES 'utf8'");
if(isset($replacement)) {
    if(isset($numberpart)) {
               $mqrazdel=$part;
               $mqoldrazdel=$numberpart;
                  $strazdel->execute();
            }

      if(isset($strazdel)) $strazdel->close();
                  @header("Location: avpult.php?unit=".$unit."&amp;".$unit."=pick.php");
    } 
//ПЕРЕМЕСТИТЬ РАЗДЕЛ 
 $mysqli->query("SET NAMES 'utf8'");
if(isset($beforefasten) || isset($afterfasten)) {
    if(isset($numberpart)) {
             if(isset($part) && isset($menupart)) $adonde=array_search($part,$menupart);
               if(isset($menupart)) $andlist=$listpart[$adonde];
               if($beforefasten) $b=$andlist-1;
               if($afterfasten) $b=$andlist+1;
                  $uplstpart=$b;
                  $upidpart=$numberpart;
                  $uppart->execute();

            }

      if(isset($uppart)) $uppart->close();
                  @header("Location: avpult.php?unit=".$unit."&amp;".$unit."=pick.php");
    } 
} //end $unit table

//Создание и редактирование!!!!!!!!!!!!
//Сохранение!!!!!!THIS WITH DOCUM
if(isset($save)) {
  if(isset($unit)) { 
    if(isset($part) && $part!=="0") {
//Если раздел уже существует, то он существует, если же его еще нет - нужно его создать
      if(isset($menupart[$numberpart])) {
                     $thisidpart=$numberpart;
                   }
        else $nmn=$part;
          }
         else $thisidpart=0;
 
     if(isset($redactor)) 
          switch($redactor) {
               case 0://Новая статья
//Раздел равен 0 idpart=0, иначе -  проверяем наличие раздела
               
                    if(isset($nmn)) {
                  $mysqli->query("SET NAMES 'utf8'");
                       $insertrazd->execute();
                       $lastpart=$mysqli->insert_id;
                       $thisidpart=$lastpart;
                       $newlist=$lastpart*100;
                       $uplstpart=$newlist;
                       $upidpart=$lastpart;
                       $uppart->execute();
                        }

  $mysqli->query("SET NAMES 'utf8'");
    $tit=$title;
    $mss=$mess;
    $avt=$author;
    $dt=$today;
    $kw=$keywords;
    $antc=$annot;
    $idrz=$thisidpart;


  if($insertarticl->execute()) {
      $lastst=$mysqli->insert_id;
      $newlast1=$lastst*10000;
      $upspartcl=$newlast1;
      $upidartcl=$lastst;
        }

   if($updarticle->execute()) {
     if($unit==="payware" || $unit==="shop") {
           $idacc=$lastst;
           $titass=$title;
           $kd=0;
           if(isset($costprod)) $cst=$costprod; 
           else $cst=0;
           $insertsal=0;
           $insertdeb=0;
           $insertkred=0;
           $insertmes=date("m");    
               $insertacc->execute();
        if(isset($insertacc)) $insertacc->close();
       }

   if(isset($insertrazd)) $insertrazd->close();
   if(isset($uppart)) $uppart->close();
   if(isset($insertarticl)) $insertarticl->close();
   if(isset($updarticle)) $updarticle->close();
   header("Location:avpult.php?unit=$unit");
  }
 break;
    case 1://Редактирование

$mysqli->query("SET NAMES 'utf8'");
    $tit=$title;
    $upspartcl=$listarticle;
    $mss=$mess;
    $avt=$author;
    $dt=$today;
    $kw=$keywords;
    $antc=$annot;
    $idrz=$thisidpart;
    $totid=$id;
  if($upallarticl->execute()) {
    if($unit==="payware" || $unit==="shop") {
       $upidacc=$id;
       $upass=$title;
     $updass->execute();
    if(isset($updass)) $updass->close();
     }

if(isset($upallarticl)) $upallarticl->close();
header("Location: ".$_SERVER['HTTP_REFERER']);
    }
break;
  }
 }
} //end save
//Стартовая кнопка
if(isset($go)) {
      if(isset($numberpart) && $numberpart>0) 
          $part=$menupart[$numberpart];
       else         
          $part="0";
//Нет статьи
    if(!isset($namearticle) /*&& $namearticle=""*/) {
      $redactor=0;
      $id="";
       }
      else { 
           if(!isset($id))
                  $id=1;
             $redactor=1;
      }
}
if(isset($unit) && $unit!=="set") {
//Отображение----------------------------------
  $mysqli->query("SET NAMES 'utf8'");
    if(isset($id)) {
      if($selarticle=$mysqli->prepare("SELECT title, content,author,dat,keywords,annotation FROM $maintable WHERE id=? ORDER BY list ")) {
         $selarticle->bind_param('i',$id); 
         $selarticle->execute(); 
         $selarticle->bind_result($titleart,$contentart,$authorart,$datart,$kwart,$annotart); 
                       while($selarticle->fetch()) {
                               $titlear[$id]=$titleart;
                               $contentar[$id]=$contentart;
                               $authorar[$id]=$authorart;
                               $datar[$id]=$datart;
                               $kwar[$id]=$kwart;
                               $annotar[$id]=$annotart;
                                 } 
                           if(isset($selarticle)) $selarticle->close();
       }


   }
 }
//feedbacktable
if(isset($radiobutton)) {
$feedbacktable="feedback".$radiobutton;
    if(isset($feedbacktable)) {
      if($feedfirst=$mysqli->query("SELECT id FROM $feedbacktable")) {
        $num=$feedfirst->num_rows; 
          if(isset($num) && $num>0) $feed="YES";
          } 
        else $feed="No";
     if(isset($feedfirst)) $feedfirst->close();
if(isset($feed) && $feed="YES") {
//Изменение данных
$mysqli->query("SET NAMES 'utf8'");
$upallfeed=$mysqli->prepare("UPDATE $feedbacktable SET comment=?,dat=?,moder=? WHERE id=?");
$upallfeed->bind_param('ssii',$upfeedcomment,$upfeeddt,$upfeedmoder,$uptotid);
 $mysqli->query("SET NAMES 'utf8'");
      if($commentfeed=$mysqli->prepare("SELECT id,comment,namecostomer,email,idarticle,namearticle,dat FROM $feedbacktable WHERE moder=0")) {
         
         $commentfeed->execute(); 
         $commentfeed->bind_result($idcomm,$comm,$feedname,$feedemal,$feedidarticle,$feednameart,$feeddatcomm); 
                       while($commentfeed->fetch()) {
                               $commentary[$idcomm]=$comm;
                               $withcostomer[$idcomm]=$feedname;
                               $withmailcostomer[$idcomm]=$feedemal;
                               $withidarticle[$idcomm]=$feedidarticle;
                               $withnamearticle[$idcomm]=$feednameart;
                               $withdat[$idcomm]=$feeddatcomm;
                                 } 
                           if(isset($commentfeed)) $commentfeed->close();
     } 
   }
//DELEATE comment deleatecomment 
if(isset($deleatecomment) && isset($id)) {
         $queryfeed="DELETE FROM $feedbacktable WHERE id=$id";
           $resultcomm=$mysqli->query($queryfeed);
       if($resultcomm==true) header("Location:".$_SERVER['HTTP_REFERER']);

}
 
  } 
}
/*if($unit==="payware" || $unit==="shop") {
     if($selcost=$mysqli->prepare("SELECT cost FROM $accountingtable WHERE id=?")) {
          $selcost->bind_param('i',$id);
           $selcost->execute();
           $selcost->bind_result($costart);
             while($selcost->fetch()) { 
                $thiscost[$id]=$costart;
              } 
      if(isset($selcost)) $selcost->close(); 
       }
     }*/

//DELEATE ARTICLE delst
if(isset($scour) && isset($id)) {
   if(isset($id) && $id>1) {
         $queryscour="DELETE FROM $maintable WHERE id=$id";
           $resultart=$mysqli->query($queryscour);
       if($resultart==true) header("Location:".$_SERVER['HTTP_REFERER']);
    }
else die("<h3>Первую статью не удаляем!</h3><a href='avpult.php?unit=$unit'>Начать сначала</a>");
}

//Удалить раздел $deleatepart
if(isset($deleatepart) && isset($numberpart)) {
         $querydeleatepart="DELETE FROM $parttable WHERE id=$numberpart";
           $resultartd=$mysqli->query($querydeleatepart);
       if($resultartd==true) header("Location:".$_SERVER['HTTP_REFERER']);    
}

//function
//Обобщенная кнопка создания и редактирования статей
function Unionbutton(&$unit,&$menupart,&$menutitle,&$menutitlepart) { 
?>
<br>
          <section class="fifty"><!--fifty-->    <div class="knop">
           <h3>Создание статьи</h3>
             <div id="pickarticle"><!--pickarticle-->
          <?php if(isset($menupart) && count($menupart)!==0) { ?>
                <select id="partselect">
                  <option>Выбрать Раздел</option>
                     <?php if(isset($menupart)) 
                         foreach($menupart as $key=>$val) {
                ?><option value="<?php echo $key;?>"><?php echo $val;?></option><?php } ?>
              </select> <?php } ?>
            <form class="knop" method="POST" title="Чтобы создать статью раздела - выбирай раздел, чтобы создать простую статью или новый раздел - не выбирай раздела и нажми кнопку Создать статью">
                <p><input class="part" type="hidden" name="numberpart" value="0" placeholder="id раздела" readonly /></p>
                      <input type="hidden" name="id" value=""  />
                  <input type="submit" name="go" value="Создать статью" >
             </form>
            </div><!--pickarticle--> </div> 
          </section><!--fifty-->

          <section class="fifty"><!--fifty--> <br>
           <h3>Редактирование статьи</h3>
<?php  if(isset($menutitle)) { ?>
                   <details title="Выбери статью и нажми Редактировать">
             <summary> 
               Статьи вне разделов
            </summary>
   <?php foreach($menutitle as $keys=>$values) { 
?>
             <form class="knop" method="POST">                             

                    <input type="hidden" name="numberpart" value="0" readonly />   
                      <input type="text" name="namearticle" value=" <?php echo $values; ?>" readonly /> 
                      <input type="hidden" name="id" value=" <?php echo $keys; ?>"  />
                <input type="submit" name="go" value="Редактировать" > 
                               
            </form>
 <?php
               //  }
   } 
} ?>
        </details><br> 
 <?php  if(isset($menupart) && count($menupart>=1))
          foreach($menupart as $key=>$value) {
              if(isset($menutitlepart[$key]) && count($menutitlepart[$key]>=1)) {         
          ?>
           <details title="Выбери статью и нажми Редактировать">
             <summary> 
               <?php  echo $menupart[$key] ?>
            </summary><?php
              foreach($menutitlepart[$key] as $k=>$v) {  
                               ?>

             <form class="knop" method="POST">                             
                     <input type="hidden" name="part" value="<?php echo $value; ?>" readonly /> 
                    <input type="hidden" name="numberpart" value="<?php echo $key; ?>"  />   
                      <input type="text" name="namearticle" value=" <?php echo $v; ?> " readonly /> 
                      <input type="hidden" name="id" value=" <?php echo $k; ?>" readonly />
                <input type="submit" name="go" value="Редактировать" > 
                               
            </form>
                <?php }  ?>
        </details><br>
        <?php } 
     }
?>
       </section><!--fifty-->

    <div class="cen"></div>
 <?php  }
//Форма статьи!!!!!!THIS WITH DOCUM
function Article(&$unit,&$redactor,&$numberpart,&$menupart,&$titlelist,&$id,&$titlear,&$kwar,&$annotar,&$authorar,&$datar,&$contentar,&$part) {

          if(isset($titlelist) && isset($id)) {
             if($id==="")
              $listarticle=0;
             else 
              $listarticle=$titlelist[$id];
            }
          if(isset($numberpart) && $numberpart!==0) $part=$menupart[$numberpart];
            else $part="0";
          if(isset($id) && isset($titlear)) $titlearticle=$titlear[$id];
         if(isset($id) && isset($kwar)) $kwordarticle=$kwar[$id];
         if(isset($id) && isset($annotar)) $annotacarticle=$annotar[$id];
         if(isset($id) && isset($authorar)) $authorarticle=$authorar[$id];
         if(isset($id) && isset($datar)) $datarticle=$datar[$id];
         if(isset($id) && isset($contentar)) $contentarticle=$contentar[$id];
?>
<div id="tovar" >
    <p><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Отказаться</a></p>
       <a class="show" href="#">Показать номера сортировки</a>
         <div id="blockim">
            <a href="#" class="close">Свернуть</a><br>
<?php    
          if(isset($titlelist)) 
            foreach($titlelist as $keylist=>$val) {
               echo "<br>Статья: ".$keylist." Номер сортировки: ".$val."<br>";
          } ?>
        </div>

        <script src="ckeditor/ckeditor.js"></script>

        <h3>Статья:<?php 

             if(!isset($titlearticle))  echo "Новая статья"; else echo $titlearticle; ?></h3>
        <form method='POST'><?php
          if(isset($redactor) && $redactor===1) { 
              if(isset($titlelist)) {
                 ?><p>Номер сортировки: </p>
            <p><input type='text' name='listarticle' value="<?php if(isset($listarticle)) echo $listarticle ?>"  /></p>
            <p><input type='hidden' name='id' value="<?php if(isset($id)) echo $id; ?>"/></p>
          <?php }
          }

         if(isset($redactor)) {  ?>
            <p><input type='hidden' name='redactor' value="<?php echo $redactor ?>" required /></p><?php }  ?>
           <p>Раздел: </p>
<?php

             if($redactor===0) { //Создать статью
                if(isset($part)) { 
                  if(isset($numberpart) && $numberpart!==0) { //Если раздел существует
?>
              <p>
               <input type='hidden' name='numberpart' value="<?php echo $numberpart ?>"   placeholder="id раздела" />
             </p><?php               

      }
    else {
?>
              <p>
               <input type='hidden' name='numberpart' value=""  placeholder="id раздела или ничего" />
             </p><?php          
    }
?>
              <p>
               <input type='text' name='part' value="<?php echo $part ?>" required  placeholder="Имя раздела или 0" title="Если разделы не нужны, оставляем 0, если пишем первую статью нового раздела - указываем имя раздела" />
             </p><?php 
     } 
  }
 else { //Редактировать статью 

                 if(isset($numberpart) && $numberpart!==0) { //Если раздел существует
?>
              <p>
               <input type='hidden' name='numberpart' value="<?php echo $numberpart ?>" required  placeholder="id раздела" />
             </p><?php               

      }
    else {
?>
              <p>
               <input type='hidden' name='numberpart' value=""  placeholder="Номер раздела или ничего" />
             </p>          
<?php    } ?>
      <p>
       <input type='text' name='part' value="<?php echo $part ?>" required  placeholder="Имя раздела или 0" title="Изменяем имя раздела командой 'Переименовать раздел'" readonly />
     </p> <?php 
     }

     if(isset($titlearticle)) { ?>
        <p>Заголовок**:</p>
         <p> 
          <input type='text' name='title' value="<?php echo $titlearticle?>" required/>
         </p><?php 
    }
   else { ?>
      <p>Заголовок**:</p>
        <p> 
         <input type='text' name='title' value='' placeholder="Заголовок статьи" required/>
       </p> <?php 
    }

   
if(isset($kwordarticle)) { ?>
      <p>Ключевые слова:</p>
      <p> 
       <input type='text' name='keywords' value="<?php echo $kwordarticle ?>" />
      </p><?php 
    }
   else { ?>
      <p>Ключевые слова:</p>
      <p>
       <input type='text' name='keywords' value='' placeholder="Ключевые слова" >
     </p> <?php 
    }
if(isset($annotacarticle)) { ?>
        <p>Аннотация:</p>
        <p> 
          <textarea cols='40' rows='10' name='annot' value="<?php echo $annotacarticle ?>" /><?php echo $annotacarticle ?></textarea>
       </p> <?php
  }
 else { ?> 
     <p>Аннотация:</p>
     <p> 
       <textarea cols='40' rows='10' name='annot' value=''/></textarea>
    </p><?php 
  } 
if(isset($authorarticle)) { ?>
     <p>Автор:</p>
     <p>
      <input type='text' name='author' value="<?php if(isset($authorarticle)) echo $authorarticle; ?>"/>
    </p> <?php
  } 
 else { ?>
   <p>Автор:</p>
   <p>
    <input type='text' name='author' value=""/>
   </p> <?php
 }
if(isset($datarticle)) { ?>
   <p>Дата публикации:</p>
   <p>
    <input type='text' name='dat' value="<?php if(isset($datarticle)) echo $datarticle; ?>"/>
   </p> <?php
 } ?>
     <p>ТЕКСТ**:</p> <?php 
if(isset($contentarticle)) { ?>
    <textarea id='editor1' name='mess'><?php echo $contentarticle; ?></textarea><?php
 }
 else { ?>
    <textarea id='editor1' name='mess'></textarea><?php
 } ?>

  <script>var ckeditor1 = CKEDITOR.replace('editor1');</script>
     <br>
    <input class='knop' type='submit' value="Сохранить статью" name='save'/>
<?php if(isset($redactor) && $redactor===1 && isset($id) && $id!==1) { ?>
      <br>
      <input class='knopdel' type='submit' value="Удалить статью" name='scour'/>

<?php }  ?>
  </form>
<?php if(isset($id)) echo "Внесение изменений. Статья №".$id;
else echo "Создание новой статьи";
?>
</div> 
<?php
}
//Организация контента
function Picker(&$menupart,&$menutitle,&$menutitlepart) {
?>
<br>
           <h3> Организация контента</h3>

                 <?php if(isset($menupart) && count($menupart)!==0) { ?>
                     <select id="partselect">
                         <option>Выбрать Раздел</option>
                             <?php if(isset($menupart)) 
                                        foreach($menupart as $key=>$val) {
                ?><option value="<?php echo $key;?>"><?php echo $val;?></option><?php 
                       } ?>
                    </select> <?php 
             } ?>
          <div id="pickarticle"><!--pickarticle-->
                 <?php if(isset($menupart) && count($menupart)!==0) { ?>
<h3>Переименовать раздел</h3>
            <form class="knop" method="POST" title="Ввести новое имя раздела в соответствующее поле и нажать Переименовать раздел">
                <p>
                  <input class="part" type="text" name="numberpart" value="0" placeholder="id раздела" readonly />
                   <input type="text" name="part" value="" placeholder="Новое имя раздела" />
                  <input type="submit" name="replacement" value="Переименовать раздел" >
                </p>
             </form>
<h3>Переместить раздел</h3>
<p>Из выпадающего списка выбрать перемещаемый раздел, в поле До или после рараздела вписать имя того раздела, до или после которого установить выбранный</p>
            <form class="knop" method="POST" title="Ввести имя, после которого или перед которым поставить выбранный, в соответствующее поле, выбрать из выпадающего списка пеперемещаемый раздел и нажать До или После раздела">
                <p>
                  <input class="part" type="text" name="numberpart" value="0" placeholder="id раздела" readonly />
                   <input type="text" name="part" value="" placeholder="До или после рараздела" />
                  <input type="submit" name="beforefasten" value="До раздела" >
                  <input type="submit" name="afterfasten" value="После раздела" >
                </p>
             </form>
<?php 
             } ?>
           <h3>Перемещение статьи</h3>
          <section class="fifty"><!--fifty--> <br>
<?php           if(isset($menutitle)) { ?>
                   <details title="Выбери статью или статьи и нажми кнопку">
                     <summary> 
                        Статьи вне разделов
                    </summary><p>Выбрать раздел из выпадающего списка, выбрать статью или статьи и нажать кнопку</p>
             <form class="knop" method="POST">                             
                    <input class="part" type="hidden" name="numberpart" value="0" readonly /> 
   <?php          foreach($menutitle as $keys=>$values) { 
                                            if($keys!==1) { ?>

                 <p>  
                   <input type="checkbox" name="picker[]" value="<?php echo $keys; ?>" readonly /><?php echo $values; ?>
                 </p>  
 <?php
           }
       } ?>
                   <input class="knopdel" type="submit" value="В раздел" name="inpart" />
                 </p>                                
            </form> 
<?php   } ?>
        </details><br> 
     </section><!--fifty-->
     <section class="fifty"><!--fifty--> <br>
 <?php  if(isset($menupart) && count($menupart>=1))
          foreach($menupart as $key=>$value) {
              if(isset($menutitlepart[$key]) && count($menutitlepart[$key]>=1)) {         
          ?>
           <details title="Выбери раздел, если В раздел, не выбирай ничего, если Из раздела">
             <summary> 
               <?php  echo $menupart[$key] ?>
            </summary><p>Выбрать раздел из выпадающего списка, если В раздел, не выбирай ничего, если Из раздела</p>
             <form class="knop" method="POST"> 
                   <input class="part" type="hidden" name="numberpart" value="" readonly />  
<?php
              foreach($menutitlepart[$key] as $k=>$v) {  
                               ?>
                 <p> 
                   <input type="checkbox" name="picker[]" value="<?php echo $k; ?>" readonly /><?php echo $v; 
           }  ?>
          <p>    
            <input class="knopdel" type="submit" name="inpart" value="В раздел" />
            <input class="knopdel" type="submit" name="simplearticle" value="Из разделов" />
          </p>   
      </form>
   </details><br>

        <?php } 
     }
?>
     </section><!--fifty-->
    <div class="cen"></div>
<?php if(isset($menupart) && count($menupart)!==0) { ?>
<h3>Удалить раздел</h3>
            <form class="knop" method="POST" title="Выбрать раздел и нажать кнопку">
                <p>
                  <input class="part" type="text" name="numberpart" value="0" placeholder="id раздела" readonly />

                  <input type="submit" name="deleatepart" value="Удалить раздел" >
                </p>
             </form>
<?php } ?>
</div>

    <div class="cen"></div>
<?php
} //end picker
//Выбор узла
function selectUnit(&$arrblock) {
 ?>
     <h3>Выбор узла</h3>
      <form class="bord" method='POST'><p>
<?php
       if(isset($arrblock))
         foreach($arrblock as $k=>$v) {
                        if($k!=="common") {              
                    if(file_exists("$k")) {
                       if($k==="book")
                 echo '<input name="radiobutton" type="radio" value="'.$k.'" checked/> '.$v;
                       else
                 echo '<input name="radiobutton" type="radio" value="'.$k.'" /> '.$v;
                               }
                           }
                        }
?>
                       <input type='submit' value="Выбрать узел!" />
      </form> <?php
}
