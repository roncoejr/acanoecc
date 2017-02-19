<html>
    <head><title>Create a New Call Branding Profile</title>
    <link rel="stylesheet" type="text/css" href="../styles/branding.css">
    <link rel="stylesheet" type="text/css" href="../styles/menu.css">
    <script src="../js/api_driver.js" language="javascript"></script>
    </head>
    <body>
        <div id="mainMenu" name="mainMenu" class="mainMenu">
            <?php include '../menu.php';?>
        </div>
        <div id="bx_FormBox" name="bx_FormBox" class="newEntityForm">
        <form id="frm_newWebbridge" name="frm_newWebbridge" accept-charset="utf-i" method="POST" class="newEntityForm" onsubmit="return true;">
            <table>
                <tr><th align="center" colspan="2">Add a New Call Branding Profile</th></tr>
                <tr><td colspan="2"></td><td width="175"><label id="bx_infoBox" name="bx_infoBox" width="255">   </label></td></tr>
                <tr><td align="right">url:</td><td><input id="fld_URL" name="fld_URL" size="55" value=""></td></tr>
                <tr><td align="right"><img lass="btnInput" src="/home/assets/buttons/cancel_button.png"></td><td align="left"><img class="btnInput" onclick="m_postNewCallBrandingProfile('frm_newCallBrandingProfile')" src="/home/assets/buttons/submit_button.png"></td></tr>
            </table>
        </form><br>
        </div>
        <input type="button" width="15" id="btn_showCoSpaces" name="btn_showCoSpaces" value="Get coSpaces" onclick="m_apiGetRequests('coSpaces', 'TABLE')">
        <div id="getBox" name="getBox" class="getBox" width="155" height="50">
        </div>
    </body>
</html>