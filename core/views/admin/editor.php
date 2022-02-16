<body id="xinoro-global-container">
  <nav>
    <ul id="nav-btn" class="nav p-2 nav-pills justify-content-center">
      <li class="nav-item">
        <a class="nav-link">О проекте</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Заголовок</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Текст</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Картинка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Приемущества</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Колонки</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Разделитель</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Меню</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Подвал</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Видео</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Форма</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" type="other">Другое</a>
      </li>
      <li class="nav-item saveBtn">
        <a class="nav-link" onclick="savePage();">Сохранить</a>
      </li>
    </ul>
    <div class="design-box pt-4 ps-4">
      <div onclick="createNewBox('1','header');" class="box">
        header-1
      </div>
      <div onclick="createNewBox('1','text');" class="box">
        text-1
      </div>
    </div>
  </nav>
  <?php echo $args["page_content"]; ?>
</body>
<script type="text/javascript" src="vendor/js/xinoro_admin_editor.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_getBlocks.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_savePage.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_loadEditor.js"></script>