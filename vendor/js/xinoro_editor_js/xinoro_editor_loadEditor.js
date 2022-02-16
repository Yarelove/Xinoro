// Активация редактора
window.onload = function() {
    let styleLinks = [];

    // Включаем возможность редактирования текста
    for(let div of document.querySelectorAll("#xinoro_text_ed"))
    {
      div.contentEditable = true;
    }

    $('.xinoro-box').each(function(i) {
        styleLinks.push($(this).attr('index')); // Получение id блока
    });

    // Подключение css
    $.each(Array.from(new Set(styleLinks)), function(index,value) {
        createCssLink(value+".css");
    });
};