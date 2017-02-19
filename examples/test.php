<html>
<head><title>PHP Configuration Read Test</title></head>
<body>
<?php
$config_array = parse_ini_file("test.ini");
echo $config_array["db_name"];
?>
</body>
</html>
