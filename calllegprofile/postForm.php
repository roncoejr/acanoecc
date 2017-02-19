<html>
    <head><title>Create New Call Leg Profile</title>
    <link rel="stylesheet" type="text/css" href="../styles/branding.css">
    <link rel="stylesheet" type="text/css" href="../styles/menu.css">
    <script type="text/javascript" src="../js/api_driver.js"></script>
    </head>
    <body>
        <div id="mainMenu" name="mainMenu" class="mainMenu">
            <?php include '../menu.php';?></div>
        <div id="bx_FormBox" name="bx_FormBox" class="newEntityForm">
        <form id="frm_newcalllegprofile" name="frm_newcalllegprofile" class="newEntityForm" onsubmit="m_submitForm('Submit Suppressed');">
            <table>
                <tr><th align="center" colspan="2">New Call Leg profile</th></tr>
                <tr><td colspan=2></td><td></td></tr>
<tr><td align="right">Needs Activation:</td><td><select id="needsActivation" name="needsActivation" size="1"><?php include 'truefalse.php';?></select></td></tr>
                <tr><td align="right">Default Layout:</td><td><select id="defaultLayout" name="defaultLayout" size="1"><?php include 'defaultlayouttypes.php';?></select></td><tr>
                <tr><td align="right">Participant Labels:</td><td><select id="participantLabels" name="participantLabels" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">Presentation Display Mode:</td><td><select id="presentationDisplayMode" name="presentationDisplayMode" size="1" value=""><?php include 'presentationdisplaymode.php';?></select></td><tr>
                <tr><td align="right">Presentation Contribution Allowed:</td><td><select id="presentationContributionAllowed" name="presentationContributionAllowed" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">Presentation View Allowed:</td><td><select id="presentationViewingAllowed" name="presentationViewingAllowed" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">End Call Allowed:</td><td><select id="endCallAllowed" name="endCallAllowed" size="1" ><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">Video Mute Others:</td><td><select id="videoMuteOthersAllowed" name="videoMuteOthers Allowed" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">Mute Self Allowed:</td><td><select id="muteSelfAllowed" name="muteSelfAllowed" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">Video Mute Self Allowed:</td><td><select id="videoMuteSelfAllowed" name="videoMuteSelfAllowed" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">Join Tone Participant Threshold:</td><td><input id="joinToneParticipantThreshold" name="joinToneParticipantThreshold" size="4" value="0"></td><tr>
                <tr><td align="right">Leave Tone Participant Threshold:</td><td><input id="leaveToneParticipantThreshold" name="leaveToneParticipantThreshold" size="4" value="0"></td><tr>
                <tr><td align="right">Video Mode:</td><td><select id="videoMode" name="videoMode" size="1"><?php include 'videomode.php';?></select></td><tr>
                <tr><td align="right">rx Audio Mute:</td><td><select id="rxAudioMute" name="rxAudioMute" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">tx Audio Mute:</td><td><select id="txAudioMute" name="txAudioMute" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">rx Video Mute:</td><td><select id="rxVideoMute" name="rxVideoMute" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">tx Video Mute:</td><td><select id="txVideoMute" name="txVideoMute" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">SIP Media Encryption:</td><td><select id="sipMediaEncryption" name="sipMediEncryption" size="1"><?php include 'sipmediaencryption.php';?></select></td><tr>
                <tr><td align="right">Audio Packet Size:</td><td><input id="audioPacketSizeMs" name="audioPacketSizeMs" size="4" value=""></td><tr>
                <tr><td align="right">Deactivation Mode:</td><td><select id="deactivationMode" name="deactivationMode" size="1"><?php include 'deactivationmode.php';?></select></td><tr>
                <tr><td align="right">Deactivation Mode Time:</td><td><input id="deactivationModeTime" name="deactivationModeTime" size="4" value=""></td><tr>
                <tr><td align="right">Telepresence Calls Allowed:</td><td><select id="telepresenceCallsAllowed" name="telepresenceCallsAllowed" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">SIP Presentation Channel Enabled:</td><td><select id="sipPresentationChannelEnabled" name="sipPresentationChannelEnabled" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">BFCP Mode:</td><td><select id="bfcpMode" name="bfcpMode" size="1"><?php include 'bfcpmode.php';?></select></td><tr>
                <tr><td align="right"><img class="btnInput" src="/home/assets/buttons/cancel_button.png"></td><td align="left"><img class="btnInput" onclick="m_postNewCallLegProfile('frm_newcalllegprofile');" src="/home/assets/buttons/submit_button.png"></td></tr>
            </table>
        </form>
        </div>
        <div id="bx_newEntityForm" name="bx_newEntityForm" class="statusResults">
            <div id="bx_notificationArea" name="bx_notificationArea"><label id="bx_infoBox" name="bx_infoBox"></label></div>
                <div id="bx_additionalAction" name="bx_additionalAction">
                    <input type="button" width="15" id="btn_assignSystemDefault" name="btn_assignSystemDefault" value="Set As Default">
                    <input type="button" width="15" id="btn_showCoSpaces" name="btn_showCoSpaces" value="Get coSpaces" onclick="m_apiGetRequests('coSpaces', 'TABLE', 'coSpace')">
                        <div id="bx_getBox" name="bx_getBox" class="getBox" width="155" height="250">
                        </div>
                </div>
        </div>
    </body>
</html>