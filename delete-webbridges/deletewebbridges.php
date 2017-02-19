<?php
    
    $config_vals = parse_ini_file("web.config");
    
    $req_data = array();
    
    $api_node = "webBridges";
    
    $xml_r = new XMLReader();
    
    // Gather data from the input form here
    
    $req_data_q = http_build_query($req_data);
    
    // ****
    
    // Setup HTTP options
    $req_files = array();
    $req_options = array( 'http' => array('method' => 'DELETE', 'content' => $req_data_q, 'header' => "Content-type: application/x-www-form-urlencoded\n" . "Content-tength: " . strlen($req_data_q) . "\nAuthorization: Basic " . base64_encode($config_vals["auth_creds"]) ));
    $ret_info = array();

    // ****
    
    // Initialize stream
    
    $req_stream = stream_context_create($req_options);
    $req_fileptr = fopen($config_vals["base_url"] . $config_vals["api_version"] . $api_node, 'rb', false, $req_stream);

    $req_response = stream_get_contents($req_fileptr);
    
    $xml_r->xml($req_response);

    preg_match($config_vals["guid_pattern"], $http_response_header[5], $req_matches);
    
    //****
    
    // Expect the GUUID for the new Webbridge to be found at the following array index
    
    // echo $req_matches[2];
    // echo var_dump($req_matches);
    // echo var_dump($http_response_header);
    // echo var_dump($req_response);
    echo "<table border=4>";
    echo "<tr><th><input type=checkbox id=\"wb_checkAll\" name=\"wb_checkAll\"></th><th>#</th><th>GUIID</th><th>URI</th></tr>";
    $num_rows = 0;
    while($xml_r->read()) {
        if($xml_r->getAttribute("id") && $xml_r->readInnerXML()) {
            
            printf("<tr><td><input type=checkbox onclick=\"deleteMe()\" id=\"wb_%d\" name=\"wb_%d\"></td><td>%d</td><td>%s</td><td>%s</td></tr>", ++$num_rows, $num_rows, $num_rows, $xml_r->getAttribute("id"), $xml_r->readInnerXML());
        }
    
        //$xml_r->next();
    }
    echo "</table>";
?>