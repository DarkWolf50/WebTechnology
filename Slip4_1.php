<?php
session_start();
$eno=$_GET['eno'];
$ename=$_GET['ename'];
$eaddr=$_GET['eaddr'];

$_SESSION['eno']=$eno;
$_SESSION['ename']=$ename;
$_SESSION['eaddr']=$eaddr;
?>

<html>
    <body>
        <form method="post" action="Slip4_2.php">
            <h2>
                Enter Earning of Employee:
            </h2>
            Basic:<input type="text" name="e1"><br>
            DA:<input type="text" name="e2"><br>
            HRA:<input type="text" name="e3"><br>
            <input type="submit">
        </form>
    </body>
</html>
