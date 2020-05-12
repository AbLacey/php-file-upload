<?php
    $val1 = 56;
    $val2 = 4;
    $op = '*';
  
    if($op=='+'){
        echo "$val1 + $val2 = ".($val1 + $val2);
    }else if($op=='-'){
        echo "$val1 - $val2 = ".($val1 - $val2);
    }else if($op=='*'){
        echo "$val1 &times; $val2 = ".($val1 * $val2);
    }else if($op=='/'){
        echo "$val1 / $val2 = ".($val1 / $val2);
    }else{
        echo "Invalid operation, pleaseenter a valid operator( +, -, *, /)";
    }
?> 