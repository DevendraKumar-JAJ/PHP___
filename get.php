<!-- 19. Crearte a from send data through post method and show on screen -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Get</title>
  </head>
  <body>
    <form action="./get.php"method="get">
      <label for="name">Name : </label>
      <input type="text" id="name" name="name" >
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && count($_GET)>0) {
        $name = $_GET['name'];
        echo "<h1>Hello, $name!</h1>";
    }
?>