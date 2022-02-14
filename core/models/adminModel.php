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

    		// Запись в db
    		if($this->database->getdate("SELECT * FROM routes WHERE url = '$url'") == null)
    			$this->database->updateDate("INSERT INTO routes (id,url,controller,action,title,visible,library,stylesheet) VALUES(NULL,'$url','$controller','$action','$title',true,'','$controller"."-"."$action')");
    		else return;


			// Получение шаблона
			$TemplateController = file_get_contents('core/core/TemplatePhp/TemplateController.php');
			$TemplateModel = file_get_contents('core/core/TemplatePhp/TemplateModel.php');
			$TemplateView = file_get_contents('core/core/TemplatePhp/TemplateView.php');

			// Шаблон действия
			$TemplateAction = 'function '.$action.'Action()
			{
				$this->view->LoadDesign();
			}

			#input_region#';

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

			// Модель страницы
    		if(!file_exists("core/models/".$controller."Model.php"))
    			file_put_contents("core/models/".$controller."Model.php", $TemplateModel);

			// Визуальная сторона
    		if(!file_exists("core/views/".$controller."/".$action.".php"))
    			file_put_contents("core/views/".$controller."/".$action.".php", $TemplateView);
			
			// Стили страницы
			if(!file_exists("vendor/css/".$controller."-".$action.".css"))
    			file_put_contents("vendor/css/".$controller."-".$action.".css", "");


    		header("location: panel");
		}

		function deletePage($url)
		{
			$this->database->updateDate("DELETE FROM routes WHERE url = '$url'");
		}

		function pageHidden($url,$state)
		{
			if($state)
				$this->database->updateDate("UPDATE routes SET visible = '1' WHERE url LIKE '$url'");
			else
				$this->database->updateDate("UPDATE routes SET visible = '0' WHERE url LIKE '$url'");
		}

		function changeLibrary($url, $libs)
		{
			$this->database->updateDate("UPDATE routes SET library = '$libs' WHERE url LIKE '$url'");
			header("location: panel");
		}

		function openInEditor($url)
		{
			$pageInfo = $this->database->getdate("SELECT * FROM routes WHERE url = '$url'");
			header("location: editor?editor_page=".$pageInfo["id"]);
		}
	}

?> 