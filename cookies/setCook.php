<!-- 16. Create 2 seprate php file to set, read cookies. -->
<?php
 setcookie("Name","Devendra",time()+60000);
 echo "Cookie set ".date("H:i:s");
?>