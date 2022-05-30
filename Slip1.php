<!--  write a php script to keep track of number of time the web page has been access.
[USe session] -->
<html>
<head>
    <title> The Number of time web page has been visited</title>

</head>

<body>
     <?php
    session_start();
    if(isset($_SESSION['count']))
    $_SESSION['count']=$_SESSION['count']+1;
    else
    $_SESSION['count']=1;
    echo "<h3> Web Page accessed Time </h3>".$_SESSION['count']; 
    ?>
</body>

</html> 

