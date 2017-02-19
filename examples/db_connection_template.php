<?php
	$app_configArray = parse_ini_file('web.config');
	
	$db_server = $app_configArray("db_server");
	$db_serverPort = $app_configArray("db_server_port");
	$db_name = $app_configArray("db_name");
	$db_uname = $app_configArray("db_uname");
	$db_upwd = $app_configArray("db_upwd");
?>