<?php
date_default_timezone_set('America/New_York');

// $request = new http\Client\Request("GET","https://192.168.0.46:8443/api/v1/coSpaces");

// $reqClient = new http\Client;
 // $reqClient->SetOptions(array('httpauth'=>"admin:changemenow", 'httpauthtype'=>"AUTH_BASIC", 'verifyhost'=>"False", '$username'=>"admin", '$password'=>"changemenow"));

 // $reqClient->enqueue($request);
// var_dump($request);
// var_dump($reqClient);

// $reqClient->send();

// $response = $reqClient->getResponse();
header("Content-type: text/xml");
// $xmlp = xml_parser_create();

$response = file_get_contents("https://admin:changemenow@192.168.0.46:8443/api/v1/coSpaces");
// printf("%s", $response);
echo($response);

// xml_parse_into_struct($xmlp, $response, $val);

// $xml_converted = simplexml_load_string(file_get_contents("https://admin:changemenow@192.168.0.46:8443/api/v1/coSpaces"));

// print_r($val);

// var_dump($response);
// var_dump($val);

//printf("----| %s |-----| %s |-----", $response->getInfo(), $response->getResponseCode());

?>