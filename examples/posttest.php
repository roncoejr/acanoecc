<?php

$my_authcreds = "admin:changemenow";

$api_version = "v1/";
$api_node = "callLegProfiles";
    
$my_pattern = '/^(.*[^\/].*)(\S{36}$)/';

$my_url = "https://192.168.0.46:8443/api/";
$my_data = http_build_query(array());
$my_files = array();
$my_options = array( 'http' => array('method' => 'POST', 'content' => $my_data, 'header' => "Authorization: Basic " . base64_encode($my_authcreds) ));
$ret_info = array();


    $my_stream = stream_context_create($my_options);
    $my_fileptr = fopen($my_url . $api_version . $api_node, 'rb', false, $my_stream);
    
    if(!$my_fileptr) {
        $response = null;
        echo "A problem occurred";
    }
    else {
        $response = stream_get_contents($my_fileptr);

        var_dump($response);
        var_dump($http_response_header);
        
        preg_match($my_pattern, $http_response_header[5], $my_matches);
        
        echo $my_matches[2];
        
        var_dump($my_matches);
    }
    
// var_dump($ret_info);

?>