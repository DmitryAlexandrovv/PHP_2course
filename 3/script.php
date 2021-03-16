<?php 
    $input = $_REQUEST['string'];
    
    $textAr = explode("\n", $input);
    $textAr = array_filter($textAr, 'trim');

    foreach ($textAr as $line) {
        $strings = explode(' ', $line);
        $stringToCompare = $strings[1];

        echo $line;
        echo '<br>';

        usort($strings, function($f1, $f2) use ($strings, $stringToCompare) {
            return strcmp($stringToCompare, $f1);
        });

        echo implode(' ', $strings);
        echo '<br>';
    } 