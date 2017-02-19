<?php
	$app_configArray = parse_ini_file("web.config");
	
	$file_handle = @fopen($app_configArray["csv_fileName"], "r");
	
?>