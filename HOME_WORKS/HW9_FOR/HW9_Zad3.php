<?php
$array = [8, 2, 3, 4, 5, 1];

$maxSequence = 0;
$sequence = 1;
$sequenceNumbers = "";
$maxSequenceNumbers = "";
$count = count($array);
for ($i = 0; $i < $count - 1; $i++) {
    if ($array[$i] < $array[$i + 1]) {
        $sequence++;
        $sequenceNumbers =+ $array[$i] . " ";
    }

    	else {
            if ($maxSequence < $sequence) {
                $maxSequence = $sequence;
                $sequenceNumbers =+ $array[$i] . " ";
                $maxSequenceNumbers = $sequenceNumbers;
            }
                $sequence = 1;
                $sequenceNumbers = "";
            }
}

if ($maxSequence < $sequence) {
    $sequenceNumbers += $array[$count - 1];
    $maxSequenceNumbers = $sequenceNumbers;
}

echo "The maximal increasing sequence in an array is: " . $maxSequenceNumbers;