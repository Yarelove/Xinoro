<?php 

	/*
		Admin controller
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/xinoro

	*/

	class adminController extends Controller 
	{
		public function panelAction()
		{
			// Создание страницы
			if(isset($_POST['createpage']))
				$this->model->createPage($_POST["url"],$_POST["controller"],$_POST["action"],$_POST["title"]);

			// Удаление страницы
			if(isset($_POST['deletePage']))
				$this->model->deletePage($_POST["selected_url"]);

			// Включение/Отключение страницы
			if(isset($_POST['pageDeactivation']) && isset($_POST["selected_url"]))
				$this->model->pageHidden($_POST["selected_url"],false);

			if(isset($_POST['pageActivation']) && isset($_POST["selected_url"]))
				$this->model->pageHidden($_POST["selected_url"],true);

			$this->view->LoadDesign();
		}

		public function contentAction()
		{
			$this->view->LoadDesign();
		}

		
		function editorAction()
		{
			if(isset($_POST['savepages']))
			{
				$this->model->saveEditPage($_GET["c"],$_GET["a"],$_POST['file']);
			}
			$this->view->LoadDesign();
		}

		
		function databaseAction()
		{
			$this->view->LoadDesign();
		}

		
		function settingAction()
		{
			$this->view->LoadDesign();
		}
		
		#input_region#	
	}

?> 