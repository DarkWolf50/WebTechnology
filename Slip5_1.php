<?php
session_start();
$_SESSION["name"]=$_POST["t1"];
$_SESSION["add"]=$_POST["t2"];
$_SESSION["mono"]=$_POST["t3"];
?>
<html>

<body>
    <form method="post" action="Slip5_2.php">
        Prodname:
        <input type="text" name="t1"><br>
        Qty:
        <input type="text" name="t2"><br>
        RATE:
        <input type="text" name="t3"><br>
        <input type="submit" value="next">
</body>

</html>