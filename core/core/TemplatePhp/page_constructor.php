<?php 
	function generatePageHeader($base_url,$library)
	{
		$librarys = json_decode(file_get_contents("config/plugins.json"),true);

		// base header
		echo '<!DOCTYPE html><html lang="en"><head><!-- Base setting --><base href='.$base_url.'>';

			// Library
			foreach($librarys as $key => $value)
			{
				if(stristr($library,$key))
					echo $value;
			}

		// end base header
		echo '<!-- Custom setting --></head>';
	}
?>