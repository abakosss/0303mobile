<?php
require_once('mobile.php');


function testGetAllMobileUsingReflection()
{
    $reflectionClass = new ReflectionClass('Mobile');
    $method = $reflectionClass->getMethod('getAllMobile');

    if($method->isPublic())
    {
        echo "A getAllMobile metódus elérhető.\n";

        $mobileObj = $reflectionClass->newInstance();

        $mobiles = $method->invoke($mobileObj);
        if(empty($mobiles))
        {
            echo "Nincs adat a mobileszközről \n";
        }
        else
        {
            echo"Mobilok listája:\n";
            foreach ($mobiles as $mobile ) 
            {
                echo"ID:".$mobile['m_id']."| Név: " . $mobile["m_desc"] ."\n";
            }
        }
    }
    else
    {
        echo"a getAllmobile metódus nem elérhető \n";
    }

}
testGetAllMobileUsingReflection();
?>