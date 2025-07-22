<!-- 19. Crearte a from send data through post method and show on screen -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Post</title>
  </head>
  <body>
    <form action="./post.php"method="post">
      <label for="name">Name : </label>
      <input type="text" id="name" name="name" >
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        echo "<h1>Hello, $name!</h1>";
    }
    ?>