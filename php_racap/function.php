<?php

function sayName($name="gaes"){

    echo "hello ".$name.PHP_EOL;
}
sayName();
sayName("ariel");

call_user_func('sayName','Jhon doe');

call_user_func_array('sayName',['Jane doe']);

//anonymous function (clousure)

$soldier=function($name){echo $name.PHP_EOL;};

$soldier('Captain Price');

// $result=fn($x)=>$x*2;

// echo $result(19);


function getLastName($name)
{
    $real_name=explode(" ",$name);

    $getLastIndex=count($real_name)-1;

    if($real_name[$getLastIndex]!="doe")
    {
        return "youre not doe family";
    }

    return $real_name[$getLastIndex].PHP_EOL;
}
echo getLastName("Jane doe zukbreg");
