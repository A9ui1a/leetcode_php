<?php


class Poweroffour
{
    function __construct()
    {
        print('Run342' . "\n");
        $res = $this->isPowerOfFour(1);
        printf("\n" . 'res=>%b', $res);
    }

    function isPowerOfFour($num = 0)
    {
        if ($num < 0) {
            return false;
        }
        if($num==1){
            return true;
        }
        $res = !($num&($num-1)) && (($num-1)%3==0);
        return $res;
    }
}