<!DOCTYPE html>
<html lang="en">
<head>
	<base href="/Xinoro/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/css/panel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Админ Панель</title>
</head>
<body>
    <div class="menu">
        <div class="nav">
            <a href="admin/panel"></a>
            <a href="admin/content"></a>
            <a href="admin/database"></a>
            <a href="admin/setting"></a>
        </div>
    </div>
    <div class="content">
        <div class="wrapper">
            <div class="left-sidebar">
                <div class="left-wrapper">
                    <div class="info-box">
                        <h2>Управление в 2 клика</h2>
                        <p>Управление страницами стало удобнее,<br>создание страницы, ограничение прав<br>на просмотр в 2 клика.</p>
                        <div id="createPageBtn" class="create-button">Создать</div>
                    </div>
                    <div class="items-box">
						<?php
							# Передача переменных из routes.json 
							#
							# URL - 0 (string)
							# Controller - 1 (string)
							# Action - 2 (string)
							# Title - 3 (string) 
							#
							# openInEditor() - javascript(func) - Открытие страницы в редакторе
							# pageInfo() - javascript(func) - Открытие информации о странице

							# Получение списка путей
							$pages = json_decode(file_get_contents("config/routes.json"),true);

							# Подсчет количества страниц для n путей
							$countPageBox = count($pages["routes"]);
							$countPage = is_int($countPageBox/6) ? $countPageBox/6 : floor($countPageBox/6)+1;

							# Вывод путей на страницы
							for($i = 0; $i <= $countPage; $i++)
							{
								# Проверяем сколько элементов появится на странице
								$countBoxInPage = $countPageBox >= 6 ? 6 : $countPageBox;

								# Выводим страницы
								if($countBoxInPage != 0)
									echo '<div class="page-section" id="Slider-Page-'.$i.'">';

								# Выводим элементы 
								for($j = 0; $j < $countBoxInPage; $j++)
								{
									echo '<div onclick="showInfo('."'".$pages["routes"][$j][3]."'".', '."'".$pages["routes"][$j][0]."'".', '."'".$pages["routes"][$j][1]."'".', '."'".$pages["routes"][$j][2]."'".')" class="page">'.$pages["routes"][$j][3].'</div>';
								}

								# Отнимаем количество элементов которые уже вывели
								$countPageBox -= $countBoxInPage;

								if($countBoxInPage != 0)
									echo '</div>';
							}
						?>
                    </div>
                    <div class="button-box">
                        <div id="Slider-left-btn" class="left-arrow"></div>
                        <div id="Slider-right-btn" class="right-arrow"></div>
                    </div>
                </div>
            </div>
            <div class="right-sidebar">
				<form id="hideInfo"> <p class="Title">Страница не выбрана</p> </form>
                <form id="showInfo" action="">
					<p class="Title">Информация о странице</p>
					<p>Ссылка</p>
					<input id="url" type="text" readonly>
					<p>Контроллер</p>
					<input id="controller" type="text" readonly>
					<p>Действие</p>
					<input id="action" type="text" readonly>
					<p>Заголовок</p>
					<input id="title_" type="text" readonly>
					<p>Режим отображения</p>
					<div class="activity-btn-box">
						<button>Не активно</button>
						<button class="right">Активно</button>
					</div>
					<div class="tools-box">
						<button>Редактировать</button>
						<button class="right">Удалить</button>
					</div>
                </form>
			</div>
        </div>
    </div>
	<script type="text/javascript">
		// Varables
		let showInfoBox = document.getElementById("showInfo");
		let hideInfoBox = document.getElementById("hideInfo");
		let pageControll = document.getElementById("create-page-controll");
		let inputUrl = document.getElementById("url");
		let inputController = document.getElementById("controller");
		let inputAction = document.getElementById("action");
		let sliderPageCount = <?php echo $countPage ?>;
		let sliderSelectPage = 0;
		
		// hidden
		showInfoBox.hidden = true;
		//pageControll.hidden = true;

		// function`s
		function showInfo(title, url, controller, action)
		{
			showInfoBox.hidden = false;
			hideInfoBox.hidden = true;
			document.getElementById("url").value = url;
			document.getElementById("controller").value = controller;
			document.getElementById("action").value = action;
			document.getElementById("title_").value = title;
		}
		//window.location.href = 'admin/panel?createpage&u='+inputUrl.value+'&c='+inputController.value+'&a='+inputAction.value;
		document.getElementById("createPageBtn").onclick = function(){
			alert("open");
		}

		// Отслеживание нажатий на кнопки
		document.getElementById("Slider-left-btn").onclick = function(){ changeSlider(false); }
		document.getElementById("Slider-right-btn").onclick = function(){ changeSlider(true); }

		// Изменение страниц слайдера
		function changeSlider(state)
		{
			console.log(sliderSelectPage);
			if(!state && sliderSelectPage - 1 >= 0)
			{
				document.getElementById("Slider-Page-"+(sliderSelectPage-1)).hidden = false;
				document.getElementById("Slider-Page-"+sliderSelectPage).hidden = true;
				sliderSelectPage--;
			}
			else if(state && sliderSelectPage + 1 <= sliderPageCount)
			{
				document.getElementById("Slider-Page-"+(sliderSelectPage+1)).hidden = false;
				document.getElementById("Slider-Page-"+sliderSelectPage).hidden = true;
				sliderSelectPage++;
			}
		}

		// Загрузка слайдера
		window.onload = function() {
			for (let index = 1; index <= sliderPageCount; index++) {
				document.getElementById("Slider-Page-"+index).hidden = true;
			}
		}
	</script>
</body>
</html>