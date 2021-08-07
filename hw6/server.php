<?php
//print_r($_POST);
$x = $_POST['number1'];
$y = $_POST['number2'];
$operation = $_POST['operation'];

function sum($a, $b){
    return $a + $b;
}

function substraction($a, $b){
    return $a - $b;
}

function multiplication($a, $b){
    return $a * $b;
}

function division($a, $b){
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation){
    switch($operation) {
        case "sum":
            return $res = sum($arg1, $arg2);
            break;
        case "subs":
            return $res = substraction($arg1, $arg2);
            break;
        case "mult":
            return $res = multiplication($arg1, $arg2);
            break;
        case "divis":
            if ($arg2 != 0){
                return $res = division($arg1, $arg2);
            } else {
                return $res = "Please, don't divide by zero";
            }
            break;

    }
}

$result = mathOperation($x, $y, $operation);

header("Location: index.php?result=$result");

