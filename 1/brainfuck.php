<?php
    $comands = str_split($_REQUEST['comand']);
    $params = str_split($_REQUEST['params']);
    $output = '';
    $arr = [];
    $index = 0;
    $paramIndex = 0;

    $arr[0] = ord(0);

    for($j = 0; $j < count($comands); $j++){
        $comand = $comands[$j];
        switch ($comand) {
            case '.':
                $output .= chr($arr[$index]);
                break;
            case ',':
                $symbol = $params[$paramIndex];
                $arr[$index] = ord($symbol);
                $paramIndex++;
                break;
            case '>':
                $index++;
                break;
            case '<':
                $index--;
                break;
            case '+':
                $arr[$index] += 1;
                break;
            case '-':
                $arr[$index] -= 1;
                break;
            case '[':
                if($arr[$index] == 0){
                    for($i = $index; $i <= count($arr); $i++){
                        if($arr[$i] == ']'){
                            $j = $i + 1;
                            break;
                        }
                    }
                }
                break;
            case ']':
                if($arr[$index] != 0){
                    for($i = $j; $i >= 0; $i--){
                        if($comands[$i] == '['){
                            $j = $i;
                            break;
                        }
                    }
                }
                break;
        }
    }

    echo $output;
?>