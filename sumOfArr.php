<!-- 14. Create a PHP function to calculate the sum of an array of numbers. -->

<?php
  function sumOfArr($arr){
    $sum=0;
    foreach( $arr as $ele){
      $sum+=$ele;
    }
    return $sum;
  }

  $arrIs=array(1,5,3,5,6,7,8);
  echo "Sum of digits in ";
  echo implode($arrIs);
  echo " = ".sumOfArr($arrIs);
?>