<?php
$a=readline("enter first number");
$b=readline("enteer second number");
$c=readline("enter third number");

$oldest = $a;
if($b > $oldest)
{
    $oldest=$b;
}
if($c > $oldest)
{
    $oldest=$c;
}
print("oldest number is:$oldest");