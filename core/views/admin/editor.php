<body id="xinoro-global-container">
  <nav>
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
      <div onclick="createNewBox();" class="box">
        Test 1
      </div>
    </div>
  </nav>
  <?php echo $args["page_content"]; ?>
</body>

<script type="text/javascript">
  function createNewBox()
  {
    document.getElementById("xinoro-global-container").innerHTML += '<div id="content_first"><div id="introduction"><div class="inner first_intro" id="test-edit-text"><p>OUR COMPANY</p></div><div class="inner second_intro" id="test-edit-text"><p>Bring Your Ideas to Life</p></div><div class="inner third_intro" id="test-edit-text"><p>Everything that you dreamed of can be brought to life exactly at the </p><p>moment when you decide to win</p></div><div id="arrow"><img src="vendor/image/header-fedya-1/arrow.png"></div></div></div>';
    
    // Включаем возможность редактирования текста
    for(let div of document.querySelectorAll("#xinoro_text_ed"))
    {
      div.contentEditable = true;
    }

    createCssLink("header-0.css");

  }

  // Создает временное css подключение(Для отображения)
  function createCssLink(nameCss)
  {
      var a = document.createElement("link");
      a.rel="stylesheet";
      a.href="vendor/assets/XinoroEditor/css/"+nameCss;
      document.getElementsByTagName("head")[0].appendChild(a)
  }
</script>