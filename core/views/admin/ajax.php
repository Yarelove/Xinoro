<body>
<?php 
	echo file_get_contents("vendor/assets/XinoroEditor/html/header/header-1.html");
	if(isset($_POST['getBlock']))
	{
		echo file_get_contents("./vendor/assets/XinoroEditor/".$_POST["blockcategory"]."/".$_POST["blockcategory"]."-".$_POST["blockid"].".html");
	}

?>
</body>