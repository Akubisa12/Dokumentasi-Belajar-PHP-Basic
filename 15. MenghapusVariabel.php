<?php 
  $value = "Jessen";
  unset($value);
  var_dump(isset($value));
  $value = "Jessen";
  var_dump(isset($value));
?>