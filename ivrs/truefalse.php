<?php
	$fld_fileName = "truefalse.csv";
    include 'csv_connection_template.php';
	if($file_handle) {
		$csv_contents = fgetCSV($file_handle, "r");
		
		$count = 0;
		
		// var_dump($csv_contents);
		while(!feof($file_handle)) {
            if($count++ != 0) {
                echo "<option>" . $csv_contents[0] . "</option>";
                $csv_contents = fgetCSV($file_handle);
            }
            else {
                $csv_contents = fgetCSV($file_handle);
            }
		}
		fclose($file_handle);
	}
?>
