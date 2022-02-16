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
      <li class="nav-item">
        <a class="nav-link" onclick="savePage();">Сохранить</a>
      </li>
    </ul>
    <div class="design-box pt-4 ps-4">
      <div onclick="createNewBox('1','header');" class="box">
        Test 1
      </div>
    </div>
  </nav>
  <?php echo $args["page_content"]; ?>
</body>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_getBlocks.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_savePage.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_loadEditor.js"></script>