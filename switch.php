<!-- 7. Create a PHP script to use a switch statement to display the day of the week. -->

<?php	
  $day=1;
  switch($day){
    case 1:
      echo "Monday";
      break;
    case 2:
      echo "Tuesday";
      break;
    case 3:
      echo "Wednesday";
    case 4:
      echo "Thirsday";
    case 5:
      echo "Friday";
    case 6:
      echo "Saturday";
    case 7:
      echo "sunday";
    default:
    echo "Not a day";
  }
?>