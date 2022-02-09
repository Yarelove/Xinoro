<?php 
	function generatePageHeader($base_url)
	{
		echo '
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<!-- Base setting -->
				<base href='.$base_url.'>
				<!-- Bootstrap 5 -->
			    <link rel="stylesheet" type="text/css" href="vendor/assets/Bootstrap/css/bootstrap.css">
			    <script type="text/javascript" src="vendor/assets/Bootstrap/js/bootstrap.js"></script>
			    <!-- jquery 3.6.0 -->
			    <script src="vendor/assets/Jquery/jquery-3.6.0.min.js"></script>
			    <!-- Custom setting -->

			</head>
		';
	}
?>