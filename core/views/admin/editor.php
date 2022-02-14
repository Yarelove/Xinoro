<!doctype html>
<html lang="en">
  <head>
    <title>Редактор страниц</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="vendor/css/xinoro_admin_editor.css">
  </head>
  <body id="test12">
    <ul class="nav p-2 nav-pills justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#">О проекте</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Заголовок</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Текст</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Картинка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Приемущества</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Колонки</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Разделитель</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Меню</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Подвал</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Видео</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Форма</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Другое</a>
      </li>
    </ul>
    <div class="design-box pt-4 ps-4">
    	<div onclick="test1();" class="box">
    		Test 1
    	</div>
    	<div onclick="test2();" class="box">
    		Test 2
    	</div>
    </div>
  </body>
  <script type="text/javascript">
  	function test1()
  	{
  		document.getElementById("test12").innerHTML += ' <div class="intro" id="intro"><div class="intro__body"><div class="intro__logo"><img src="vendor/img/logo/Logo.png" alt=""></div><div id="test-edit-text" class="intro__title">Clear, smart, attractive design<p>for your app, logo, website</p></div><div class="intro__button"><button>READ MORE</button></div><div class="intro__arrow"><div class="arrow-img"><img src="vendor/img/logo/Arrow-down.png" alt=""></div></div></div></div>';
      document.getElementById("test-edit-text").contentEditable = true;
    }
  	function test2()
  	{
  		document.getElementById("test12").innerHTML += '<div class="verx"><h1 class="zaglav">Meet Our Leaders</h1></div><div class="seredina"><p>The smartest people work every day to provide the<br>best service and make our clients happy</p></div><content><div class="left"> <!-- левый блок --><div class="onephoto"> <!-- класс первой фотки --><img class="center-pic1" src="vendor/dopfile/1.jpg"> <!-- добовление фотки в левый блок --></div> <div class="txt1-1"> <!-- Класс Первого имени --><h2>Eva Stark</h2>   <!-- имя в первом блоке --></div><div class="txt2-1"> <!-- описание под первой фотографией --><h3>Customer Support</h3></div><div class="txt3-1"><p>Eva is the voice of our brand. She spends hours making our clients feel cared for and enjoying their communication with the company. If you have any suggestions or ideas, you can write to her.</p></div></div><div class="center"> <!-- центральный блок --><div class="twophoto"> <!-- класс второй фотки--><img class="center-pic2" src="vendor/dopfile/3.jpg"> <!-- добавление фотки в центральный блок --></div><div class="txt1-2"> <!-- Класс второго имени --><h2>Julia Bush</h2>  <!-- имя в втором блоке --></div><div class="txt2-2"> <!-- описание под второй фотографией --><h3>Design Director</h3></div><div class="txt3-2"><p>Eva is the voice of our brand. She spends hours making our clients feel cared for and enjoying their communication with the company. If you have any suggestions or ideas, you can write to her.</p></div></div><div class="right"> <!-- правый блок --><div class="threphoto"> <!-- красс третьей фотки --><img class="center-pic3" src="vendor/dopfile/2.jpg"> <!-- добавление фотки в правый блок --></div><div class="txt1-3"> <!-- описание под третьей фотографией --><h2>Max Holden</h2></div><div class="txt2-3"><h3>Founder & Art Director</h3></div><div class="txt3-3"><p>Eva is the voice of our brand. She spends hours making our clients feel cared for and enjoying their communication with the company. If you have any suggestions or ideas, you can write to her.</p></div></div></content>';
    }
  </script>
</html>