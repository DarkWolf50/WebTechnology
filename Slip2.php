<!-- write a php script to keep track of number of time the web page has been access.
[USe Cookies] -->
<html>
<head>
    <title> The number of time web page has been accessed</title>
  
    </head>
    <body>
 <?php
if(isset($_COOKIE['count']))
$count=$_COOKIE['count'];
else
$count=0;
$count++;
setcookie('count',$count);
echo "<h4> This page is accessed $count times.</h4>";
 ?>
</body>

</html>