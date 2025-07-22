<!-- 15. Write a PHP function to check if a number is prime or not. -->

<?php
  function prime($num){
    $prime="True";
    if($num<2){
      $prime ="False";
    }
    else{
    for($i=2;$i<=(int)sqrt($num);$i++){
      if ($num%$i==0){
        $prime="False";
        break;
      }
    }
  }
  return $prime;
}

  echo prime(-4);
  echo "<br>";
  echo prime(1);
  echo "<br>";
  echo prime(2);
  echo "<br>";
  echo prime(5);
?>