<html>
    <head><title>Create New IVR</title>
    <link rel="stylesheet" type="text/css" href="../styles/branding.css">
    <link rel="stylesheet" type="text/css" href="../styles/menu.css">
    <script type="text/javascript" src="../js/api_driver.js"></script>
    <script type="text/javascript">
        var v_DisplayOption = 'SELOPTS';
        function m_fillSelectLists() {
            // alert('got here');
            // selopt_menu = [];
            // selopt_menu.push(
            
            v_fieldToUpdate = 'fld_tenant';
            m_apiGetRequests('tenants', v_DisplayOption, 'tenant', v_fieldToUpdate);

            v_fieldToUpdate = 'fld_ivrBrandingProfile';
            m_apiGetRequests('ivrBrandingProfiles', v_DisplayOption, 'ivrBrandingProfile', v_fieldToUpdate);

            // alert(v_DisplayOption);
            
            // document.getElementById("fld_ivrBrandingProfile").innerHTML = selopt_menu.join('\n');
            // document.getElementById("fld_ivrBrandingProfile").innerHTML = "<option value=\"1\">One Option</option>";
        }
    </script>
    </head>
    <body>
        <div id="mainMenu" name="mainMenu" class="mainMenu">
        <?php include '../menu.php';?>
        </div>
        <div id="bx_FormBox" name="bx_FormBox" class="newEntityForm">
        <form id="frm_newIVR" name="frm_newIVR" class="newEntityForm" onsubmit="m_submitForm('Submit Suppressed');">
            <table>
                <tr><th align="center" colspan="2">Add a New IVR</th></tr>
                <tr><td colspan=2></td><td><label id="bx_infoBox" name="bx_infoBox"></label></td></tr>
<tr><td align="right">URI:</td><td><input id="fld_URI" name="fld_URI" size="15" value="" onclick="m_fillSelectLists();"></td></tr>
                <tr><td align="right">Tenant:</td><td><select id="fld_tenant" name="fld_tenant" size="1"</select></td><tr>
<tr><td align="right">IVR Branding Profile:</td><td><select id="fld_ivrBrandingProfile" name="fld_ivrBrandingProfile"></select></td><tr>
                <tr><td align="right">Resolve coSpace CallIDs:</td><td><select id="fld_resolveCoSpaceCallIds" name="fld_resolveCoSpaceCallIds" size="1" value=""><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right">Resolve Lync Conference IDs:</td><td><select id="fld_resolveLyncConferenceIds" name="fld_resolveLyncConferenceIds" size="1"><?php include 'truefalse.php';?></select></td><tr>
                <tr><td align="right"><img class="btnInput" src="/home/assets/buttons/cancel_button.png"></td><td align="left"><img class="btnInput" onclick="m_postNewIVR('frm_newIVR');" src="/home/assets/buttons/submit_button.png"></td></tr>
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