<?php
    
    $config_vals = parse_ini_file("web.config");
    
    $req_data = array();
    
    $api_node = "turnServers";
    
    // Gather data from the input form here
    
    $req_data["clientAddress"] = $_POST['fld_PubIP'];
    $req_data["serverAddress"] = $_POST['fld_PrivIP'];
    $req_data["username"] = $_POST['fld_user'];
    $req_data["password"] = $_POST['fld_password'];
    $req_data["type"] = $_POST['fld_type'];
    $req_data["numRegistrations"] = $_POST['fld_numreg'];
    
    
    $req_data_q = http_build_query($req_data);
    
    // ****
    
    // Setup HTTP options
    $req_files = array();
    $req_options = array( 'http' => array('method' => 'POST', 'content' => $req_data_q, 'header' => "Content-type: application/x-www-form-urlencoded\n" . "Content-tength: " . strlen($req_data_q) . "\nAuthorization: Basic " . base64_encode($config_vals["auth_creds"])));
    $ret_info = array();

    // ****
    
    // Initialize stream
    
    $req_stream = stream_context_create($req_options);
    $req_fileptr = fopen($config_vals["base_url"] . $config_vals["api_version"] . $api_node, 'rb', false, $req_stream);

    $req_response = stream_get_contents($req_fileptr);

    preg_match($config_vals["guid_pattern"], $http_response_header[5], $req_matches);
    
    //****
    
    // Expect the GUUID for the new Webbridge to be found at the following array index
    // header('Content-type: text/xml');
    echo $req_matches[2];
    // echo var_dump($req_matches);
    // echo var_dump($http_response_header);
?>