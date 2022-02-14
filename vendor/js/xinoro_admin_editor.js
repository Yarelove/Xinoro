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