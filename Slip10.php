<?php
$dom=new DomDocument();
$dom->load("Slip10.xml");
echo "<h2> Name of Movie </h2>";
$mname=$dom->getElementsbyTagName("MovieTitle");
foreach($mname as $node)
{
    print "<b>$node->textContent<b><br><br>" ;
    
}
echo "<h2> Name of Actor </h2>";
$aname=$dom->getElementsbyTagName("ActorName");
foreach($aname as $node)
{
    print "<b>$node->textContent<b><br><br>";
    
}
?>