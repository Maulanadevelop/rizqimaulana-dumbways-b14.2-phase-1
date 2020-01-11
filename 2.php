<?php

// dynamic sorting application, min 2 dimension of array
$data = [
        ['M', 'L', 'O', 'N'],
        ['T', 'S', 'Q', 'P', 'R'],
        ['W', 'U', 'V']
    ];

for ($i=0; $i < count($data); $i++) { 
    while ($data[$i] != sort($data[$i])) {
        for ($j = 0; $j < count($data[$i]); $j++) {
             if ($data[$i][$j] == $data[$i][$i]) {
                 unset($data[$i][$j]);
                 array_push($data[$i], $data[$i][$j]);
             }elseif ($data[$i][$j] > $data[$i][$i]) {
                 unset($data[$i][$j]);
                 array_push($data[$i], $data[$i][$j]);
             }else {
                 unset($data[$i][$j]);
                 array_unshift($data[$i], $data[$i][$j]);
             }
        }
    }
}

var_dump($data);
?>