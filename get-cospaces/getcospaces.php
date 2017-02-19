<html>
<head><title>Get coSpaces</title>
<script src="../js/api_driver.js"></script>
<link rel="stylesheet" type="text/css" href="../styles/branding.css">
</head>
<body>
<?php
    
    $config_vals = parse_ini_file("web.config");
    
    $req_data = array();
   
    
    $api_node = "coSpaces";
    
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
    
    echo "<table border=4>";
    echo "<tr><th></th><th>#</th><th>GUIID</th><th>coSpace Name</th></tr>";
    $num_rows = 0;
    $loaded_NS = false;
    while($xml_r->read() && $xml_r->name !== 'coSpace');
    while($xml_r->name === 'coSpace') {

        $xml_r_simple = new SimpleXMLElement($xml_r->readOuterXML());
        if(!$loaded_NS) {
            $tagNS = $xml_r_simple->getNamespaces(true);
            $loaded_NS = true;
        }
        $coSpaceName = (string) $xml_r_simple->name;
            printf("<tr><td colspan=\"4\"><div id=\"bx_infoBox\" name=\"bx_infoBox\">%s</div></td></tr>", "");
            printf("<tr><td><img src=\"/home/assets/buttons/delete_row_button.png\" class=\"actionButton\" onclick=\"m_deleteMe(wb_%s, '%s', '%s')\" id=\"wb_%d\" name=\"wb_%d\"></td><td>%d</td><td>%s</td><td>%s</td></tr>", ++$num_rows, $xml_r->getAttribute("id"), $api_node, $num_rows, $num_rows, $num_rows, $xml_r->getAttribute("id"), $coSpaceName);
    
        $xml_r->next('coSpace');
    }
    echo "</table>";
?>
</body>
</html>