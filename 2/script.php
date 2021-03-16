<?php
    function lettersReplacer($string) {
        $len = strlen($string);
        $count = 0;

        for ($i = 0; $i < $len; $i++) {
            switch ($string[$i]) {
                case 'h':
                    $count++;
                    yield 4;
                    break;
                case 'l':
                    $count++;
                    yield 1;
                    break;
                case 'e':
                    $count++;
                    yield 3;
                    break;
                case 'o':
                    $count++;
                    yield 0;
                    break;
                default:
                    yield $string[$i];
            }
        }
        
        yield "<br> Кол-во замен: $count";
    }

    $input = $_REQUEST['string'];
    $string = lettersReplacer($input);
    
    foreach ($string as $val) {
        echo $val;
    }
