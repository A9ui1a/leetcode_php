<?php


class DistributeCandiesToPeople
{
    function __construct()
    {
        print('Run1103' . "\n");
        $res = $this->distributeCandies(7,3);
        printf("\n" . 'res=>%b', $res);
    }

    function distributeCandies($candies, $num_people) {
        $res=array_fill(0, $num_people, 0);
        $count=1;
        while($candies>$count){
            $res[($count-1)%$num_people]+=$count;
            $candies-=$count;
            $count++;
        }
        $res[($count-1)%$num_people]+=$candies;
        return $res;
    }
}