<?php

require_once ("mobile.php")

function testGetAllMobile()
{
    $mobileOBJ = new Mobile();

    $mobiles = $mobileOBJ->getAllMobile();


    if(empty($mobiles))
    {
        echo "nincs adat a mobileszközről.\n";
    }
    else
    {
        echo "Mobilok Listája:\n";
    }
    foreach($mobiles as $mobile)
    {
        echo"ID:".$mobile['m_id']."| Név: " . $mobile["m_desc"] . "\n";
    }

    testGetAllMobile();
}
?>