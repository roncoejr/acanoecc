<?php
    
    $config_vals = parse_ini_file("web.config");
    
    $req_data = array();
    
    $api_node = $_POST['api_node'];
    
    // Gather data from the input form here
    
    /* $req_data["needsActivation"] = $_POST['fld_needsActivation'];
    $req_data["defaultLayout"] = $_POST['fld_defaultLayout'];
    $req_data["participantLabels"] = $_POST['fld_participantLabels'];
    $req_data["presentationDisplayMode"] = $_POST['fld_presentationDisplayMode'];
    $req_data["presentationContributionAllowed"] = $_POST['fld_presentationContributionAllowed'];
    $req_data["presentationViewingAllowed"] = $_POST['fld_presentationViewingAllowed'];
    $req_data["endCallAllowed"] = $_POST['fld_endCallAllowed'];
    $req_data["videoMuteOthersAllowed"] = $_POST['fld_videoMuteOthersAllowed'];
    $req_data["muteSelfAllowed"] = $_POST['fld_muteSelfAllowed'];
    $req_data["videoMuteSelfAllowed"] = $_POST['fld_videoMuteSelfAllowed'];
    $req_data["joinToneParticipantThreshold"] = $_POST['fld_joinToneParticipantThreshold'];
    $req_data["leaveToneParticipantThreshold"] = $_POST['fld_leaveToneParticipantThreshold'];
    $req_data["videoMode"] = $_POST['fld_videoMode'];
    $req_data["rxAudioMute"] = $_POST['fld_rxAudioMute'];
    $req_data["txAudioMute"] = $_POST['fld_txAudioMute'];
    $req_data["rxVideoMute"] = $_POST['fld_rxVideoMute'];
    $req_data["txVideoMute"] = $_POST['fld_txVideoMute'];
    $req_data["sipMediaEncryption"] = $_POST['fld_sipMediaEncryption'];
    $req_data["audioPacketSizeMs"] = $_POST['fld_audioPacketSizeMs'];
    $req_data["deactivationMode"] = $_POST['fld_deactivationMode'];
    $req_data["deactivationModeTime"] = $_POST['fld_deactivationModeTime'];
    $req_data["telepresenceCallsAllowed"] = $_POST['fld_telepresenceCallsAllowed'];
    $req_data["sipPresentationChannelEnabled"] = $_POST['fld_sipPresentationChannelEnabled'];
    $req_data["bfcpMode"] = $_POST['fld_bfcpMode'];
    */
    
    $param_processor = 0;
    foreach($_POST as $post_key => $post_val) {
        if($post_key != $api_node) {
            $req_data[$post_key] = $post_val;
        }

    }
    // var_dump($req_data);
    
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
    // echo var_dump($post_key);
    // echo var_dump($http_response_header);
?>