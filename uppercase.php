<!-- 13. Write a PHP function to convert a string to uppercase. -->

<?php
  $str="hello";
  function upperCase($s){
    return  strtoupper($s);
  }
  echo "\"".$str."\" in uppercase : ";
  echo upperCase($str);
?>