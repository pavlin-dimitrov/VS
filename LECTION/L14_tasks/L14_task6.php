<?php
$arr = [0, 2, 7000, 200, 400, 15, 10, 25, 45, 200, 1000];
function the_biggest_elemnt($input){
    $result = $input[0];
    for($i = 1; $i < count($input); $i++){
            if ($result < $input[$i]){
                $result = $input[$i];
            }
    }
    return $result;
}
echo the_biggest_elemnt($arr);