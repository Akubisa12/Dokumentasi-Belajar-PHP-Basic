<?php 
function faktorialRecursive(int $value):int{
    if($value == 1){
        return 1;
    }else{
        return $value * faktorialRecursive($value-1);
    }
}
var_dump(faktorialRecursive(6));
?>