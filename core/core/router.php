<?php 

	/**
	 *  Отвечает за перенаправления на сайте
	 */
	class Router
	{
		protected $settings;
		protected $mysqlConnect;
		protected $isredirect;
		function __construct()
		{
			# import routes
			$this->settings = json_decode(file_get_contents("config/setting.json"),true);
			$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$this->mysqlConnect = new BaseDate();
			echo $this->checkPage();
		}

		# Получение текущего пути
		function getPath() 
		{
			$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$regex = "@\x2F\w*\x2F@";
			$match = [];

			if(preg_match($regex, $path, $match))
				$path = str_replace($match[0],'',$path);

			return $path;
		}

		# Проверка на валидность страницы
		function checkPage()
		{
			foreach($this->mysqlConnect->getAllDate("SELECT * FROM routes") as $value => $items)
			{
				if($items["url"] == $this->getPath())
				{
					if(!$items["visible"])
					{ 
						echo "Страница была отключена"; 
						return exit;
					}
					$isAjax = strstr($items["url"],"ajax") ? true : false;
					$this->runPage($items["controller"],$items['action'],$items["library"],$items["stylesheet"],$isAjax);
					$this->isredirect = true;
					break;
				}
			}
			if(!$this->isredirect) echo "Такой страницы нет, бан";
		}	

		# *
		# $controller - запускаемый контроллер
		# $action - метод в контроллере
		# *
		function runPage($controller, $action, $library, $stylesheet, $isAjax)
		{
			$page_controller = $controller."Controller";
			$page_action = $action."Action";
			generatePageHeader($this->settings['base_url'],$library, $stylesheet, $isAjax);
			require_once("core/controllers/".$page_controller.".php");
			$pageController = new $page_controller($controller, $action);
			$pageController->$page_action();
		}
	}

?>