<html>
    <head><title>Create New Turn Servers</title>
    <link rel="stylesheet" type="text/css" href="../styles/branding.css">
    <link rel="stylesheet" type="text/css" href="../styles/menu.css">
    <script type="text/javascript" src="../js/api_driver.js"></script>
    </head>
    <body>
            <div id="mainMenu" name="mainMenu" class="mainMenu">
            <?php include '../menu.php';?>
            </div>
        <div id="bx_FormBox" name="bx_FormBox" class="newEntityForm">
            <form id="frm_newturnserver" name="frm_newturnserver" class="newEntityForm" onsubmit="m_submitForm('Submit Suppressed');">
            <table>
                <tr><th align="center" colspan="2">Add a New TURN Server</th></tr>
                <tr><td colspan=2></td><td><label id="bx_infoBox" name="bx_infoBox"></label></td></tr>
                <tr><td align="right">Public IP (Client Address):</td><td><input id="fld_PubIP" name="fld_PubIP" size="25" value=""></td></tr>
                <tr><td align="right">Private IP (Server Address):</td><td><input id="fld_PrivIP" name="fld_PrivIP" size="25" value=""></td><tr>
                <tr><td align="right">username:</td><td><input id="fld_user" name="fld_user" size="25" value=""></td><tr>
                <tr><td align="right">password:</td><td><input id="fld_password" name="fld_password" type="password" size="25" value=""></td><tr>
                <tr><td align="right">type:</td><td><select id="fld_type" name="fld_type" size="1"><?php include 'turntypes.php';?></select></td><tr>
                <tr><td align="right">Number of registrations:</td><td><input id="fld_numreg" name="fld_numreg" size="25" value=""></td><tr>
                <tr><td align="right"><img class="btnInput" src="/home/assets/buttons/cancel_button.png"></td><td align="left"><img class="btnInput" onclick="m_postNewTurnServer('frm_newturnserver');" src="/home/assets/buttons/submit_button.png"></td></tr>
            </table>
        </form>
        </div>
        <div id="bx_newEntityForm" name="bx_newEntityForm" class="statusResults">
            <div id="bx_notificationArea" name="bx_notificationArea"><label id="bx_infoBox" name="bx_infoBox"></label></div>
                <div id="bx_additionalAction" name="bx_additionalAction">
                <!--<input type="button" width="15" id="btn_assignSystemDefault" name="btn_assignSystemDefault" value="Set As Default">-->
                <input type="button" width="15" id="btn_showCoSpaces" name="btn_showCoSpaces" value="Get TURN Servers" onclick="m_apiGetRequests('coSpaces', 'TABLE', 'coSpace')">
                <div id="bx_getBox" name="bx_getBox" class="getBox" width="155" height="250">
                </div>
            </div>
        </div>

    </body>
</html>