<?php 

	/*
		Admin controller
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/xinoro
	
	*/

	class adminModel extends Model 
	{
		function createPage($url, $controller, $action, $title)
		{
			if(empty($url) or empty($controller) or empty($action) or empty($title))
				return;

			// Получение шаблона
			$TemplateController = file_get_contents('core/core/TemplatePhp/TemplateController.php');
			$TemplateModel = file_get_contents('core/core/TemplatePhp/TemplateModel.php');
			$TemplateView = file_get_contents('core/core/TemplatePhp/TemplateView.php');

			// Шаблон действия
			$TemplateAction = '
				function '.$action.'Action()
				{
					$this->view->LoadDesign();
				}

				#input_region#
			';

			// Подмена шаблона
			$TemplateController = str_replace('$change$', $controller, $TemplateController);
			$TemplateController = str_replace('#input_region#',$TemplateAction, $TemplateController);
			$TemplateModel = str_replace('$change$', $controller, $TemplateModel);
			$TemplateView = str_replace('$change$', $action, $TemplateView);

			// Создание файлов
			if(!is_dir("core/views/".$controller)) 
    			mkdir("core/views/".$controller);

    		if(!file_exists("core/controllers/".$controller."Controller.php"))
    		{
    			file_put_contents("core/controllers/".$controller."Controller.php", $TemplateController);
    		}
    		else
    		{
    			$TemplateController = file_get_contents("core/controllers/".$controller."Controller.php");
    			$TemplateController = str_replace('#input_region#',$TemplateAction, $TemplateController);
    			file_put_contents("core/controllers/".$controller."Controller.php", $TemplateController);
    		}

    		if(!file_exists("core/models/".$controller."Model.php"))
    			file_put_contents("core/models/".$controller."Model.php", $TemplateModel);

    		if(!file_exists("core/views/".$controller."/".$action.".php"))
    			file_put_contents("core/views/".$controller."/".$action.".php", $TemplateView);

    		// Запись в json
    		$routes = json_decode(file_get_contents("config/routes.json"),true);
    		array_push($routes["routes"],array($url,$controller,$action,$title,true));
    		file_put_contents("config/routes.json", json_encode($routes));

    		header("location: panel");
		}

		function saveEditPage($controller, $action, $content)
		{
			file_put_contents("core/views/".$controller."/".$action.".php", $content);
		}

		function deletePage($url)
		{
			echo "В разработке 0_0 (Удалять захотев зараза!!!!)";
		}

		function pageHidden($url,$state)
		{
			$json = json_decode(file_get_contents("config/routes.json"),true);
			foreach($json["routes"] as $key => $value)
			{
				if($value[0] == $url)
				{
					$json["routes"][$key][4] = $state;
				}
			}
			file_put_contents("config/routes.json", json_encode($json));
		}
	}

?> 