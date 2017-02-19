<?php
	if($file_handle) {
		$csv_contents = fgetCSV($file_handle, "r");
		
		$count = 0;
		
		// var_dump($csv_contents);
		while(!feof($file_handle)) {
			if($count == 0) {
				$count++;
				printf("<tr><th width=\"250\" align=\"left\">%s</th><th width=\"75\" align=\"left\">%s</th><th>%s</th><th>%s</th><th width=\"25\">ACTIONS</th></tr>",$csv_contents[0], $csv_contents[1], $csv_contents[2], $csv_contents[3]);
			}
			else {
				printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td><button id=\"btn_Edit\" name=\"btn_Edit\">EDIT</button><button id=\"btn_Delete\" name=\"btn_Delete\">DELETE</button></td></tr>",$csv_contents[0], $csv_contents[1], $csv_contents[2], $csv_contents[3]);
			}
			$csv_contents = fgetCSV($file_handle);
		}
		fclose($file_handle);
	}
?>