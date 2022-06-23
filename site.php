 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
     echo("Hello World");
     echo "<h1>Legacy's Site</h1>";
     echo "<hr>";
     echo "<p>This is my new site</p>";

     //string

     $phrase = "Legacy Academy";
     echo strtolower($phrase);
     echo strlen($phrase);
     echo $phrase[1];
     echo "<hr>";

     //Working with number in php
     echo "<br>";
     //increamenting
     $num = 10;
     $num++;
     echo $num;
     //Getting form input set up
      ?>

      <form action="site.php" method="get">
       Name: <input type="text" name="name">
       <br>
       Age : <input type="number" name="age">
       <br>
       <input type="submit">
      </form>
      <br>
      Your name is: <?php echo $_GET["name"]?>
      <br>
      Your age is: <?php echo $_GET["age"]?>

      <//! bulding basic calculator >

   </body>
 </html>
