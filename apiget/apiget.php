<html>
<head><title>Get coSpaces</title>
<script src="../js/api_driver.js"></script>
<link rel="stylesheet" type="text/css" href="../styles/branding.css">
</head>
<body>
<?php
    
    function p_tableOut($row_count, $v_api_node, $guiid, $Name) {
        printf("<tr><td colspan=\"5\"><div id=\"bx_infoBox\" name=\"bx_infoBox\">%s</div></td></tr>", "");
        printf("<tr><td><img src=\"/home/assets/buttons/delete_row_button.png\" class=\"actionButton\" onclick=\"m_deleteMe(wb_%s, '%s', '%s')\" id=\"wb_%d\" name=\"wb_%d\"></td><td><img src=\"/home/assets/buttons/assign_to_button.png\" class=\"actionButton\"></td><td>%d</td><td>%s</td><td>%s</td></tr>", $row_count, $guiid, $v_api_node, $row_count, $row_count, $row_count, $guiid, $Name);

    }

    function p_selOpts($theGUIID) {
        printf("<option value=\"%s\">%s</option>", $theGUIID, $theGUIID);
        
    }
    
    $config_vals = parse_ini_file("web.config");
    
    $req_data = array();
   
    
    $api_node = $_POST['apiNode'];
    $api_node_name = $_POST['apiNodeName'];
    $displayMode = $_POST['fld_displayMode'];
    
    $xml_r = new XMLReader();
    $xml_r_inner = new XMLReader();
    
    // Gather data from the input form here
    
    $req_data_q = http_build_query($req_data);
    
    // ****
    
    // Setup HTTP options
    $req_files = array();
    $req_options = array( 'http' => array('method' => 'GET', 'content' => $req_data_q, 'header' => "Content-type: application/x-www-form-urlencoded\n" . "Content-tength: " . strlen($req_data_q) . "\nAuthorization: Basic " . base64_encode($config_vals["auth_creds"]) ));
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
    if($displayMode == 'TABLE') {
        echo "<table border=4 class=\"getBox\">";
        echo "<tr><th></th><th></th><th>#</th><th>GUIID</th><th>coSpace Name</th></tr>";
    }
    
    // if($displayMode == 'SELOPTS') {
    //    echo "<select>";
    // }
    $num_rows = 0;
    $loaded_NS = false;
    while($xml_r->read() && $xml_r->name !== $api_node_name);
    while($xml_r->name === $api_node_name) {

        $xml_r_simple = new SimpleXMLElement($xml_r->readOuterXML());
        if(!$loaded_NS) {
            $tagNS = $xml_r_simple->getNamespaces(true);
            $loaded_NS = true;
        }
        
        switch ($displayMode) {
            
        case "TABLE":
            
            // wrap up with switch statement
            $entity_name = (string) $xml_r_simple->name;
            p_tableOut(++$num_rows, $api_node, $xml_r->getAttribute("id"), $entity_name);
            // wrap up with switch statement
                break;
            
        case "SELOPTS":
        		p_selOpts($xml_r->getAttribute("id"));
                // printf("%s: %s", $displayMode, $xml_r->getAttribute("id"));
                break;
        }
        
    
        $xml_r->next($api_node_name);
    }
    if($displayMode == 'TABLE') {
        echo "</table>";
    }
    
    // if($displayMode == 'SELOPTS') {
    //     echo "</select>";
    // }
?>
</body>
</html>