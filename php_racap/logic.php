<?php

var_dump(true && true);
var_dump(true || false);
var_dump(true || true);
var_dump(true xor false);
var_dump(true xor true);
var_dump(true != 'true');
var_dump(true !== 'true');
var_dump(true || (false && false));
var_dump(true && (false || true) || false or (1!='1'));

if(true)
{
    echo "He is Budi";
}else{
    echo "He is not Budi";
}

echo (false) ? "Budi father's": "Not Budi Father's";

for($x=1;$x<10;$x++){
    for($y=1;$y<=10;$y++){
        echo $x ."X".$y."=".$x*$y."\n";
    }

}

foreach(range(1,10) as $num)
{
    echo $num.PHP_EOL;

    if($num==9)
    {
        exit('lucky nine');
    }else{
        echo "loser,your number is".$num.PHP_EOL;
    }
}