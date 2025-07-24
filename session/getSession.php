<!-- 17. Create 3 seprate file to set session, destroy session, use session. -->
<?php
session_start();
echo "<h1>You</h1>";
if (count($_SESSION) != 0) {
  echo "Name : " . $_SESSION["uname"];
  echo ", Course : " . $_SESSION["course"];
} else {
  echo "Sorry! <br> You logged out : Please login first.";
}
?>