<?php

//Uncomment the following to test

//Sample Output

// $matrix = [
//     [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
//     [0, 0, 1, 1, 0, 0, 0, 0, 0, 0],
//     [0, 0, 1, 1, 0, 0, 0, 0, 0, 0],
//     [0, 0, 0, 0, 0, 0, 0, 0, 1, 0],
//     [0, 0, 0, 0, 0, 1, 1, 1, 0, 0],
//     [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
// ];


//Test Case Output

$matrix = [
    [1, 1, 1, 1],
    [0, 1, 1, 0],
    [0, 1, 0, 1],
    [1, 1, 0, 0]
];

echo "<h1>COUNT THE ISLANDS</h1>";

echo '<table border="1" style="border-collapse: collapse;">';

// 1 = red & 0 = black
foreach ($matrix as $row) {
    echo '<tr>';
    foreach ($row as $value) {
        $color = $value ? 'red' : 'black';
        echo '<td style="background-color: ' . $color . '; width: 30px; height: 30px;">&nbsp;</td>';
    }
    echo '</tr>';
}

echo '</table>';
