//
//
//
//
//
//
// function m_submitForm(v_object) {
    
//     m_showPendingStatus(document.getElementById("fld_URL").value);
    
    // Do some interesting work here
    
    // End of interesting work
//     setTimeout("m_showCompletedStatus()", 5000);
// }


//
//
//
//
//
//
//
//
function m_postNewWebBridge(v_object) {
    m_showPendingStatus(document.getElementById("fld_URL").value);
    xmlhttp = new XMLHttpRequest();

    // Set the API node to be hit
    req_data = "api_node=" + "webBridges";

    // Do some interesting work here

    req_data += "&url=" + document.getElementById("fld_URL").value + "&fld_RA=" + document.getElementById("fld_RA").value;
    // alert(req_data);

    xmlhttp.open("POST", "../apipost/apipost.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = m_processapiPostReadyStateChange;
    xmlhttp.send(req_data);
    
    // End of interesting work
    
}

//
//
//
//
//
//
function m_postNewTurnServer(v_object) {
    m_showPendingStatus(document.getElementById("fld_PubIP").value);
    xmlhttp = new XMLHttpRequest;

    // Set the API node to be hit
    req_data = "api_node=" + "turnServers";

    // Do some interesting work here
    req_data += "&clientAddress=" + document.getElementById("fld_PubIP").value;
    req_data += "&serverAddress=" + document.getElementById("fld_PrivIP").value;
    req_data += "&username=" + document.getElementById("fld_user").value;
    req_data += "&password=" + document.getElementById("fld_password").value;
    req_data += "&type=" + document.getElementById("fld_type").value;
    req_data += "&numRegistrations=" + document.getElementById("fld_numreg").value;
    
    xmlhttp.open("POST", "../apipost/apipost.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = m_processapiPostReadyStateChange;
    xmlhttp.send(req_data);

    // End of interesting work
    
}

//
//
//
//
//
//
function m_postNewCallBrandingProfile(v_object) {
    m_showPendingStatus(document.getElementById("fld_URL").value);
    xmlhttp = new XMLHttpRequest;
    
    // Do some interesting work here
    // Set the API node to be hit
    req_data = "api_node=" + "callLegProfiles";

    req_data += "&url=" + document.getElementById("fld_URL").value;

    
    xmlhttp.open("POST", "../apipost/apipost.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = m_processapiPostReadyStateChange;
    xmlhttp.send(req_data);
    
    // End of interesting work
    
}

//
//
//
//
//
//
function m_postNewIVRBrandingProfile(v_object) {
    m_showPendingStatus(document.getElementById("fld_URL").value);
    xmlhttp = new XMLHttpRequest;
    
    // Do some interesting work here
    // Set the API node to be hit
    req_data = "api_node=" + "ivrBrandingProfiles";

    req_data += "&url=" + document.getElementById("fld_URL").value;
    
    
    xmlhttp.open("POST", "../apipost/apipost.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = m_processapiPostReadyStateChange;
    xmlhttp.send(req_data);
    
    // End of interesting work
    
}

//
//
//
//
//
//
function m_postNewCallLegProfile(v_object) {
    m_showPendingStatus(document.getElementById("needsActivation").value);
    xmlhttp = new XMLHttpRequest;
    
    // Do some interesting work here
    
    // Set the API node to be hit
    req_data = "api_node=" + "callLegProfiles";
    
    // Set up the post parameters
    req_data += "&needsActivation=" + document.getElementById("needsActivation").value;
    req_data += "&defaultLayout=" + document.getElementById("defaultLayout").value;
    req_data += "&participantLabels=" + document.getElementById("participantLabels").value;
    req_data += "&presentationDisplayMode=" + document.getElementById("presentationDisplayMode").value;
    req_data += "&presentationContributionAllowed=" + document.getElementById("presentationContributionAllowed").value;
    req_data += "&presentationViewingAllowed=" + document.getElementById("presentationViewingAllowed").value;
    req_data += "&endCallAllowed=" + document.getElementById("endCallAllowed").value;
    req_data += "&videoMuteOthersAllowed=" + document.getElementById("videoMuteOthersAllowed").value;
    req_data += "&muteSelfAllowed=" + document.getElementById("muteSelfAllowed").value;
    req_data += "&videoMuteSelfAllowed=" + document.getElementById("videoMuteSelfAllowed").value;
    req_data += "&joinToneParticipantThreshold=" + document.getElementById("joinToneParticipantThreshold").value;
    req_data += "&leaveToneParticipantThreshold=" + document.getElementById("leaveToneParticipantThreshold").value;
    req_data += "&videoMode=" + document.getElementById("videoMode").value;
    req_data += "&rxAudioMute=" + document.getElementById("rxAudioMute").value;
    req_data += "&txAudioMute=" + document.getElementById("txAudioMute").value;
    req_data += "&rxVideoMute=" + document.getElementById("rxVideoMute").value;
    req_data += "&txVideoMute=" + document.getElementById("txVideoMute").value;
    req_data += "&sipMediaEncryption=" + document.getElementById("sipMediaEncryption").value;
    req_data += "&audioPacketSizeMs=" + document.getElementById("audioPacketSizeMs").value;
    req_data += "&deactivationMode=" + document.getElementById("deactivationMode").value;
    req_data += "&deactivationModeTime=" + document.getElementById("deactivationModeTime").value;
    req_data += "&telepresenceCallsAllowed=" + document.getElementById("telepresenceCallsAllowed").value;
    req_data += "&sipPresentationChannelEnabled=" + document.getElementById("sipPresentationChannelEnabled").value;
    req_data += "&bfcpMode=" + document.getElementById("bfcpMode").value;
    
    
    xmlhttp.open("POST", "../apipost/apipost.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = m_processapiPostReadyStateChange;
    xmlhttp.send(req_data);
    
    // End of interesting work
    
}

//
//
//
//
//
//
function m_postNewIVR(v_object) {
    m_showPendingStatus(document.getElementById("fld_URI").value);
    xmlhttp = new XMLHttpRequest;

    // Set the API node to be hit
    req_data = "api_node=" + "ivrs";

    // Do some interesting work here
    req_data += "&uri=" + document.getElementById("fld_URI").value;
    req_data += "&tenant=" + document.getElementById("fld_tenant").value;
    req_data += "&ivrBrandingProfile=" + document.getElementById("fld_ivrBrandingProfile").value;
    req_data += "&resolveCoSpaceCallIds=" + document.getElementById("fld_resolveCoSpaceCallIds").value;
    req_data += "&resolveLyncConferenceIds=" + document.getElementById("fld_resolveLyncConferenceIds").value;
    
    // alert(req_data);
    
    xmlhttp.open("POST", "../apipost/apipost.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = m_processapiPostReadyStateChange;
    xmlhttp.send(req_data);
    
    // End of interesting work
    
}

// **** ===============================================
// **** =================================

//
//
//
//
//
//
function m_apiGetRequests(v_Node, v_displayMode, v_NodeName, v_fieldToUpdate) {
    //
    // v_Node: Acano API node
    // v_displayMode: output format of the response [ TABLE | SELOPTS ]
    //
    //
    // m_showPendingStatus(document.getElementById("fld_URL").value);
    xmlhttp = new XMLHttpRequest;
    
    // Do some interesting work here
    req_data = "apiNode=" + v_Node;
    req_data += "&apiNodeName=" + v_NodeName;
    req_data += "&fld_displayMode=" + v_displayMode;
    
    // alert(req_data);
    xmlhttp.open("POST", "../apiget/apiget.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    switch (v_fieldToUpdate) {
            case 'fld_ivrBrandingProfile':
                xmlhttp.onreadystatechange = m_processapiGetReadyStateChange_ivrProfiles
            break;
            case 'fld_tenant':
                xmlhttp.onreadystatechange = m_processapiGetReadyStateChange_tenants;
            break;
        default:
            xmlhttp.onreadystatechange = m_processapiGetReadyStateChange;
            
    }
    v_fieldToUpdate = '';
    xmlhttp.send(req_data);
    
    // End of interesting work
    
}


//
//
//
//
//
//
function m_toggleMenu(v_menuId) {
    
    // alert(document.getElementById('coSpaces').display);
    if(v_menuId.id == 'cospaceMenu' && document.getElementById('coSpaces').style.visibility == '') {
        document.getElementById('IVRs').style.visibility = '';
        document.getElementById('CallLegs').style.visibility = '';
        document.getElementById('WebBridges').style.visibility = '';
        document.getElementById('TurnServers').style.visibility = '';
        
        document.getElementById('coSpaces').style.visibility = 'visible';
    } else if (v_menuId.id == 'cospaceMenu' && document.getElementById('coSpaces').style.visibility == 'visible') {
        document.getElementById('coSpaces').style.visibility = '';
    }

    if(v_menuId.id == 'ivrMenu' && document.getElementById('IVRs').style.visibility == '') {
        document.getElementById('coSpaces').style.visibility = '';
        document.getElementById('CallLegs').style.visibility = '';
        document.getElementById('WebBridges').style.visibility = '';
        document.getElementById('TurnServers').style.visibility = '';
        document.getElementById('IVRs').style.visibility = 'visible';
    } else if (v_menuId.id == 'ivrMenu' && document.getElementById('IVRs').style.visibility == 'visible') {
        document.getElementById('IVRs').style.visibility = '';
    }

    if(v_menuId.id == 'calllegMenu' && document.getElementById('CallLegs').style.visibility == '') {
        document.getElementById('coSpaces').style.visibility = '';
        document.getElementById('IVRs').style.visibility = '';
        document.getElementById('WebBridges').style.visibility = '';
        document.getElementById('TurnServers').style.visibility = '';
        document.getElementById('CallLegs').style.visibility = 'visible';
    } else if (v_menuId.id == 'calllegMenu' && document.getElementById('CallLegs').style.visibility == 'visible') {
        document.getElementById('CallLegs').style.visibility = '';
    }

    if(v_menuId.id == 'webbridgesMenu' && document.getElementById('WebBridges').style.visibility == '') {
        document.getElementById('coSpaces').style.visibility = '';
        document.getElementById('IVRs').style.visibility = '';
        document.getElementById('CallLegs').style.visibility = '';
        document.getElementById('TurnServers').style.visibility = '';
        document.getElementById('WebBridges').style.visibility = 'visible';
    } else if (v_menuId.id == 'webbridgesMenu' && document.getElementById('WebBridges').style.visibility == 'visible') {
        document.getElementById('WebBridges').style.visibility = '';
    }

    if(v_menuId.id == 'turnserversMenu' && document.getElementById('TurnServers').style.visibility == '') {
        document.getElementById('coSpaces').style.visibility = '';
        document.getElementById('IVRs').style.visibility = '';
        document.getElementById('WebBridges').style.visibility = '';
        document.getElementById('CallLegs').style.visibility = '';
        document.getElementById('TurnServers').style.visibility = 'visible';
    } else if (v_menuId.id == 'turnserversMenu' && document.getElementById('TurnServers').style.visibility == 'visible') {
        document.getElementById('TurnServers').style.visibility = '';
    }

}






//
//
//
//
//
//
function m_nullFormSubmit() {
    return true;
}

//
//
//
//
//
//
function m_showPendingStatus (field_name) {
    document.getElementById("bx_infoBox").style.visibility = "hidden";
    document.getElementById("bx_infoBox").style.color = "red";
    document.getElementById("bx_infoBox").innerHTML = "Request Pending..." + field_name;
    document.getElementById("bx_infoBox").style.visibility = "visible";
    
}

//
//
//
//
//
//
function m_showCompletedStatus () {

    document.getElementById("bx_getBox").innerHTML += "<br><br>" + xmlhttp.responseText;
    document.getElementById("bx_infoBox").style.visibility = "hidden";
    document.getElementById("bx_infoBox").style.color = "green";
    document.getElementById("bx_infoBox").innerHTML = "Request Completed.";
    document.getElementById("bx_infoBox").style.visibility = "visible";
    document.getElementById("bx_newEntityForm").style.visibility = 'visible';
    document.getElementById("bx_notificationArea").style.visibility = 'visible';
    document.getElementById("bx_additionalAction").style.visibility = 'visible';

}


//
//
//
//
//
//

function m_processapiPostReadyStateChange() {
    
    // alert('WebBridgeStateChange: gotCalled ' + xmlhttp.readyState);
    if(xmlhttp.readyState == 4) {
        
        if(xmlhttp.status == 200) {
            // alert('WebBridgeStateChange - Status 200: gotCalled ' + xmlhttp.status);
            m_showCompletedStatus();
            document.getElementById("bx_infoBox").innerHTML += "<br><br>" + xmlhttp.responseText;
        }
    }
}




//
//
//
//
//
//

function m_processWebbridgeReadyStateChange() {
    
    // alert('WebBridgeStateChange: gotCalled ' + xmlhttp.readyState);
    if(xmlhttp.readyState == 4) {
        
        if(xmlhttp.status == 200) {
            // alert('WebBridgeStateChange - Status 200: gotCalled ' + xmlhttp.status);
            m_showCompletedStatus();
            document.getElementById("bx_infoBox").innerHTML += "<br><br>" + xmlhttp.responseText;
        }
    }
}

//
//
//
//
//
//

function m_processTurnServerReadyStateChange() {
    
    // alert('TurnServerStateChange: gotCalled ' + xmlhttp.readyState);
    if(xmlhttp.readyState == 4) {
        
        if(xmlhttp.status == 200) {
            // alert('TurnServerStateChange - Status 200: gotCalled ' + xmlhttp.status);
            m_showCompletedStatus();
            document.getElementById("bx_infoBox").innerHTML += "<br><br>" + xmlhttp.responseText;
        }
    }
}


//
//
//
//
//
//

function m_processCallBrandingProfileReadyStateChange() {
    
    // alert('CallBrandingProfileStateChange: gotCalled ' + xmlhttp.readyState);
    if(xmlhttp.readyState == 4) {
        
        if(xmlhttp.status == 200) {
            // alert('CallBrandingProfileStateChange - Status 200: gotCalled ' + xmlhttp.status);
            m_showCompletedStatus();
            document.getElementById("bx_infoBox").innerHTML += "<br><br>" + xmlhttp.responseText;
        }
    }
}



//
//
//
//
//
//

function m_processIVRBrandingProfileReadyStateChange() {
    
    // alert('IVRBrandingProfileStateChange: gotCalled ' + xmlhttp.readyState);
    if(xmlhttp.readyState == 4) {
        
        if(xmlhttp.status == 200) {
            // alert('IVRBrandingProfileStateChange - Status 200: gotCalled ' + xmlhttp.status);
            m_showCompletedStatus();
            document.getElementById("bx_infoBox").innerHTML += "<br><br>" + xmlhttp.responseText;
        }
    }
}


//
//
//
//
//
//

function m_processCallLegProfileReadyStateChange() {
    
    // alert('CallLegProfileStateChange: gotCalled ' + xmlhttp.readyState);
    if(xmlhttp.readyState == 4) {
        // alert('CallLegProfileStatChange: ' + xmlhttp.readyState + ': ' + xmlhttp.Status);
        if(xmlhttp.status == 200) {
            // alert('CallLegProfileStateChange - Status 200: gotCalled ' + xmlhttp.status);
            m_showCompletedStatus();
            // document.getElementById("bx_infoBox").innerHTML += "<br><br>" + xmlhttp.responseText;
        }
    }
}


//
//
//
//
//
//

function m_processIVRReadyStateChange() {
    
    // alert('IVRStateChange: gotCalled ' + xmlhttp.readyState);
    if(xmlhttp.readyState == 4) {
        
        if(xmlhttp.status == 200) {
            // alert('IVRStateChange - Status 200: gotCalled ' + xmlhttp.status);
            m_showCompletedStatus();
            document.getElementById("bx_infoBox").innerHTML += "<br><br>" + xmlhttp.responseText;
        }
    }
}


//
//
//
//
//
//

function m_processAPIdeleteReadyStateChange() {
    
    // alert('APIDeleteStateChange: gotCalled ' + xmlhttp.readyState);
    if(xmlhttp.readyState == 4) {
        
        if(xmlhttp.status == 200) {
            // alert('APIDeleteStateChange - Status 200: gotCalled ' + xmlhttp.status);
            m_showCompletedStatus();
            document.getElementById("bx_infoBox").innerHTML += "<br><br>" + xmlhttp.responseText;
            
            setTimeout(location.reload(true), 3000);
        }
    }
}




//
//
//
//
//
//

function m_processapiGetReadyStateChange_ivrProfiles() {
    
    // alert('apiGetStateChange: gotCalled ' + xmlhttp.readyState + ': ' + v_DisplayOption + ':--- | ' + v_fieldToUpdate);
    if(xmlhttp.readyState == 4) {
        
        if(xmlhttp.status == 200) {
            // alert('apiGetStateChange: gotCalled ' + xmlhttp.status + ': ' + v_DisplayOption + ':--- | ' + v_fieldToUpdate);
            // alert('apiGetStateChange - Status 200: gotCalled ' + xmlhttp.status);
            m_showCompletedStatus();
            // document.getElementById["btn_showCoSpaces"].style.visibility = 'visible';
            // setTimeout(location.reload(true), 3000);
            if((v_DisplayOption == 'SELOPTS')) {
                // alert(v_DisplayOption);
                // alert(xmlhttp.responseText);
                document.getElementById("fld_ivrBrandingProfile").innerHTML = xmlhttp.responseText;
            }
            
        }
    }
}






//
//
//
//
//
//

function m_processapiGetReadyStateChange() {
    
    // alert('apiGetStateChange: gotCalled ' + xmlhttp.readyState + ': ' + v_DisplayOption + ':--- | ' + v_fieldToUpdate);
    if(xmlhttp.readyState == 4) {
        
        if(xmlhttp.status == 200) {
            // alert('apiGetStateChange: gotCalled ' + xmlhttp.status + ': ' + v_DisplayOption + ':--- | ' + v_fieldToUpdate);
            // alert('apiGetStateChange - Status 200: gotCalled ' + xmlhttp.status);
            m_showCompletedStatus();
            // document.getElementById["btn_showCoSpaces"].style.visibility = 'visible';
            // setTimeout(location.reload(true), 3000);
                // alert(v_DisplayOption);
                // alert(xmlhttp.responseText);
                // document.getElementById("fld_ivrBrandingProfile").innerHTML = xmlhttp.responseText;
        }
    }
}




//
//
//
//
//
//

function m_processapiGetReadyStateChange_tenants() {
    
    // alert('apiGetStateChange: gotCalled ' + xmlhttp.readyState + ': ' + v_DisplayOption + ':--- | ' + v_fieldToUpdate);
    if(xmlhttp.readyState == 4) {
        
        if(xmlhttp.status == 200) {
            // alert('apiGetStateChange: gotCalled ' + xmlhttp.status + ': ' + v_DisplayOption + ':--- | ' + v_fieldToUpdate);
            // alert('apiGetStateChange - Status 200: gotCalled ' + xmlhttp.status);
            m_showCompletedStatus();
            // document.getElementById["btn_showCoSpaces"].style.visibility = 'visible';
            // setTimeout(location.reload(true), 3000);
            
            if((v_DisplayOption == 'SELOPTS')) {
                document.getElementById("fld_tenant").innerHTML = xmlhttp.responseText;
            }
        }
    }
}




//
//
//
//
//
//
//
function m_deleteMe(node, guiid, api_Node) {
    // m_showPendingStatus(document.getElementById("fld_").value);
    xmlhttp = new XMLHttpRequest;
    
    // Do some interesting work here
    req_data = "fld_APINODE=" + api_Node;
    req_data += "&fld_GUIID=" + guiid;
    
    // alert(req_data);
    
    xmlhttp.open("POST", "../apidelete/api_delete.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = m_processAPIdeleteReadyStateChange;
    xmlhttp.send(req_data);
    
    // End of interesting work
    
}

