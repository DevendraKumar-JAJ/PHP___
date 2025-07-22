<!-- 4. Create a PHP array and print its elements to the screen. -->

<?php	
  $arr=array("Devendra Kr",19,"BCA");
  // Print one by one
  echo "One by One printing.<br>";
  foreach($arr as $ele){
    echo "$ele  ";
  }
  echo "<br>";
  echo "Print with tittle.";
  echo "<br>Name : $arr[0]";
  echo "Age : $arr[1]";
  echo "<br>Course : $arr[2]";
?>