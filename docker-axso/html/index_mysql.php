<!DOCTYPE html>  
<head>
  <title>2021/2</title>
 </head>
 <body>
    <div style="float:left"> 
      <img style="width:100px;" src="https://www.uoc.edu/portal/system/modules/edu.uoc.presentations/resources/img/branding/logo
-uoc-default.png_1618809817.png"/>
    </div>
    <h1 style="text-align:center;color:green;">
      <?php echo 'Congratulations, it work!!'; ?> 
    </h1>
    <h2 style="text-align:center;color:blue;"> 
      <?php echo date('D, d M y H:i:s',time()); ?>
    </h2>
  
<?php
// parámetros de mysqli_connect: ip: puerto, número de cuenta, contraseña, base de datos
 $link = mysqli_connect ("mysql:3306", $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASSWORD"], $_ENV["MYSQL_DATABASE"]);
 
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL . "</br>";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL. "</br>";
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL. "</br>";
    exit;
}
 
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL. "</br>";
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
 
mysqli_close($link);
?>
    </body>
</html>
