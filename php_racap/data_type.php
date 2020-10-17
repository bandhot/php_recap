<?php

$data_type_scalar=[
    "Magang TOP",
    168,
    12.8,
    true,
    false,
];

foreach($data_type_scalar as $key)
{
    if(is_scalar($key))
    {
        echo gettype($key). "scalar Type".PHP_EOL;
    }
}
//ternary
echo isset($data_type_scalar)? "Ditemukan" : "Tidak Ditemukan";
//logic
echo PHP_EOL;

$data=[
    "",
    "0",
    0,
    null,
    0,
    false,
    true
];
foreach($data as $key)
{
    if(empty($key) && is_array($key))
    {
        echo gettype($key). "data anda kososng".PHP_EOL;
    }

}

//constant is immutable
 
define("VERSION","v-1.0");

const AUTHOR="venom";

$nama="Hello";

$nama ="World";

echo  VERSION;

echo AUTHOR;

defined("AUTHOR") or exit("Not Found");

