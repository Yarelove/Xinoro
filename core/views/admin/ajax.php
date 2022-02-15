<?php 

	echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/xinoro/vendor/assets/XinoroEditor/html/header/header-1.html");
	echo file_get_contents("xinoro/vendor/assets/XinoroEditor/html/header/header-1.html");
	echo $_SERVER['DOCUMENT_ROOT'];
	if(isset($_POST['getBlock']))
	{
		echo file_get_contents("./vendor/assets/XinoroEditor/".$_POST["blockcategory"]."/".$_POST["blockcategory"]."-".$_POST["blockid"].".html");
	}

?>