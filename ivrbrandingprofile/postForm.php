<html>
    <head><title>Create a New IVR Branding Profile</title>
    <link rel="stylesheet" type="text/css" href="../styles/branding.css">
    <link rel="stylesheet" type="text/css" href="../styles/menu.css">
    <script src="../js/api_driver.js" language="javascript"></script>
    </head>
    <body>
        <div id="mainMenu" name="mainMenu" class="mainMenu">
            <?php include '../menu.php';?>
        </div>
        <div id="bx_FormBox" name="bx_FormBox" class="newEntityForm">
        <form id="frm_newIVRBrandingProfile" name="frm_newIVRBrandingProfile" accept-charset="utf-i" method="POST" class="newEntityForm" onsubmit="return true;">
            <table>
                <tr><th align="center" colspan="2">Add a New IVR Branding Profile</th></tr>
                <tr><td colspan="2"></td><td width="175"><label id="bx_infoBox" name="bx_infoBox" width="255">   </label></td></tr>
                <tr><td align="right">url:</td><td><input id="fld_URL" name="fld_URL" size="55" value=""></td></tr>
                <tr><td align="right"><img lass="btnInput" src="/home/assets/buttons/cancel_button.png"></td><td align="left"><img class="btnInput" onclick="m_postNewIVRBrandingProfile('frm_newIVRBrandingProfile')" src="/home/assets/buttons/submit_button.png"></td></tr>
            </table>
        </form>
        </div>
        <div id="bx_newEntityForm" name="bx_newEntityForm" class="statusResults">
        <div id="bx_notificationArea" name="bx_notificationArea"><label id="bx_infoBox" name="bx_infoBox"></label></div>
        <div id="bx_additionalAction" name="bx_additionalAction">
        <!-- <input type="button" width="15" id="btn_assignSystemDefault" name="btn_assignSystemDefault" value="Set As Default"> -->
        <input type="button" width="15" id="btn_showIVRs" name="btn_showIVRs" value="Get IVRs" onclick="m_apiGetRequests('ivrs', 'TABLE', 'ivr')">
        <div id="bx_getBox" name="bx_getBox" class="getBox" width="155" height="250">
        </div>
        </div>
        </div>

    </body>
</html>