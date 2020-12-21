<?php
//SHORT;
// Most Frequent Num In Array
// $arr = [0,90,20,30,10,50,10,60,110,10,120,40,10];
// $c = array_count_values($arr);
// $val = array_search(max($c), $c);
// echo $val;

//LONG;

// ?????????????? USING FOR
$array = [15, 7, 3, 6, 3, 2];
$count = count($array);
        for ($i = 0; $i < $count - 1; $i++)
        {
            //sortiin the array
            for ($j = $i + 1; $j < $count; $j++)
            {
                if ($array[$i] >= $array[$j])
                {
                    $a = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $a;
                }
            }
        }

        $counter = 0;
        $bigCounter = 0;
        $whatNum = 0;
        for ($i = 0; $i < $count - 1; $i++)
        {
            if ($array[$i] == $array[$i + 1])
            {
                $counter++;
                if ($bigCounter <= $counter)
                {
                    $bigCounter = $counter;
                    $whatNum = $array[$i];
                }
            }
            else
            {
                $counter = 0;
            }
        }

        echo "We have " . ($bigCounter + 1) . " members of the number " . $whatNum . " in the array";