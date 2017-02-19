<html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="./styles/menu.css">
</head>
<body>
<ul name="appMenu" id="appMenu">
    <li>coSpaces
        <div class="dropdown_cospaces" onclick="void(0)">
            <?php include 'cospaces.php'?>
        </div>
    </li>
    <li>IVRs
        <div class="dropdown_ivrs" onclick="void(0)">
            <?php include 'ivrsmenu.php'?>
        </div>
    </li>
    <li>CallLegs
        <div class="dropdown_calllegs" onclick="void(0)">
            <?php include 'calllegs.php'?>
        </div>
    </li>
    <li>WebBridges
        <div class="dropdown_webbridges" onclick="void(0)">
            <?php include 'webbridges.php'?>
        </div>
    </li>
    <li>TURN Servers
        <div class="dropdown_turnservers" onclick="void(0)">
            <?php include 'turnservers.php'?>
        </div>
    </li>
</ul>
</body>
</html>
