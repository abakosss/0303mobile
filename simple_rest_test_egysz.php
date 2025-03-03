<?php

require_once('SimpleRest.php');

function testSimpleRest() {
    $simpleRest = new SimpleRest();
    $simpleRestObj->setHttpHeaders('application/json', 200);

    $responseData = array('status' => 'ok', 'message' => 'Sikeres Válasz',"http_status_message" => $simpleRestObj->getHttpStatusMessage(200));

    testSimpleRest();
}

?>
