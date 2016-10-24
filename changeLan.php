<?php
if(isset($_GET['lan'])){
switch ($_GET['lan']) {
case 0:include ("lan/geo.php");
    break;
case 1:include ("lan/geo.php");
    break;
case 2:include ("lan/eng.php");
    break;
case 3:include ("lan/rus.php");
    break;
default: include ("lan/geo.php");
	
	}
}
else {
	include ("lan/geo.php");
}


?>