<?php
include("../res/x5engine.php");
$nameList = array("rr5","smg","vas","vj2","dkx","nr3","ch4","nyd","wlx","tvs");
$charList = array("F","X","6","G","Y","V","P","8","E","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
