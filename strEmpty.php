<!-- 12. Create a PHP function to check if a string is empty or not. -->
<?php
function emptyStr($s){
  return  empty($s);
}
  $str="";
  echo "str is empty : ";
  if (emptyStr($str)){
    echo "True";
  }
  else{
    echo "False";
  }
?>