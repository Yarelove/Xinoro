<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="/Xinoro/">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="vendor/assets/Bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="vendor/css/xinoro_admin_panel.css">
	<title>Editor</title>
</head>
<body>
	<div class="navigation container-fluid">
		<div class="container p-2">
			<nav>
				<ul class="nav justify-content-center">
				  <li class="nav-item">
				    <a class="nav-link active" aria-current="page" href="#">Обложка</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Контент</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">База</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Настройки</a>
				  </li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="container ms-100 me-100 mt-5">
		<div class="row">
			<div class="col-xxl-6 col-lg-12 d-flex justify-content-xxl-end justify-content-center">
				<div class="wrapper-box">
					<div class="info-box ps-3 pt-2">	
						<img class="people-img" src="vendor/image/people.svg">
						<p class="mb-1">Управление в 2 клика</p>
						<p>Управление страницами стало удобнее,<br>
						создание страницы, ограничение прав<br>
						на просмотр в 2 клика.</p>
						<button data-bs-toggle="modal" data-bs-target="#exampleModal">Создать</button>
					</div>
					<div class="item-box mt-3">
						<?php
							# Передача переменных из routes.json 
							#
							# 	URL - 0 (string)
							# 	Controller - 1 (string)
							# 	Action - 2 (string)
							# 	Title - 3 (string) 
							#
							# openInEditor() - javascript(local func) - Открытие страницы в редакторе
							# showInfo() - javascript(local func) - Открытие информации о странице

							# Получение списка путей
							$pages = json_decode(file_get_contents("config/routes.json"),true);

							# Вывод путей на страницы
							for($i = 0; $i < count($pages['routes']); $i++)
							{
								echo '<div class="item" onclick="showInfo('."'".$pages["routes"][$i][3]."'".', '."'".$pages["routes"][$i][0]."'".', '."'".$pages["routes"][$i][1]."'".', '."'".$pages["routes"][$i][2]."'".')" class="page">'.$pages["routes"][$i][3].'</div>';
							}
						?>
					</div>
					<div class="arrow-flex justify-content-end">
						<div class="left-arrow"></div>
						<div class="right-arrow"></div>
					</div>
				</div>
			</div>
			<div class="col-xxl-6 col-lg-12 d-flex justify-content-xxl-start justify-content-center">
				<div class="writer-box">
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Создание страницы</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <div class="container-fluid">
			    <div class="row">
			    	<div class="col-12">
			    		<form action="admin/panel" method="POST">
				    		<p>Ссылка</p>
				    		<input class="inputed" type="text" name="url" placeholder="example/panel" required>
				    		<p>Контроллер</p>
				    		<input class="inputed" type="text" name="controller" placeholder="example" required>
				    		<p>Действие</p>
				    		<input class="inputed" type="text" name="action" placeholder="example" required>
				    		<p>Заголовок</p>
				    		<input class="inputed" type="text" name="title" placeholder="Example Test" required>
					        <input class="btn btn-primary" type="submit" name="createpage" value="Создать">
			    		</form>
			    	</div>
			    </div>
			</div>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>
<script type="text/javascript" src="vendor/assets/Bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_admin_panel.js"></script>