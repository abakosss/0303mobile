<?php

require_once('MobileRestHandler.php'); 

$view = "";
if(isset($_GET["view"]))
{
    $view = $_GET["view"];
    switch($view)
    {
        case "all":
            //manage REST API
            $mobileRestHandler = new MobileREstHandler();
            $mobileRestHandler->getAllMobiles();
            break;
        case "" :
            //404 - not found
            break;
    }
}
?>