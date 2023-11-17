<?php
  function getFinalValue(int $value){
    if($value >= 80){
      return "A";
    }else if($value >= 70){
      return "B";
    }else if($value >= 60){
      return "C";
    }else if($value >=58){
      return "D";
    }else{
      return "E";
    }
  }
  echo getFinalValue(88);
?>