<?php
session_start();
$name=$_SESSION["name"];
$addr=$_SESSION["add"];
$mno=$_SESSION["mono"];

$p=$_POST["t1"];
$q=$_POST["t2"];
$r=$_POST["t3"];



echo "<br>cust name=".$name ;
echo "<br>addrss=".$addr;
echo "<br>mobile no=".$mno;

echo "<br>product name=".$p;
echo "<br>Quantity=".$q;
echo "<br>rate=".$r;

$total=$q*$r;
echo "<br>total amount=".$total;
?>