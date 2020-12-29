<?php
$matrix = [];
$rows = 4;
$cols = 4;
$num = 1;
$n = 4;

for ($i = $rows - 1; $i >= 0; $i--)
{
    $rows = $i;
    $cols = 0;
    while ($rows < $n && $cols < $n)
    {
        $matrix[$rows++][$cols++] = $num++;
    }
}

for ($j = 1; $j < $n; $j++)
{
    $rows = $j;
    $cols = 0;
    while ($rows < $n && $cols < $n)
    {
        $matrix[$cols++][$rows++] = $num++;
     }
 }

            echo "<pre>";
            echo var_dump($matrix);
            echo "</pre>";



        

        