
<?php
$xml=simplexml_load_file("Slip15.xml");
foreach($xml as $book)
{
    echo "Book Name= $book->BookName" . "<br>";
    echo "Author= $book->Author " . "<br>";
    echo "Price= $book->price" . "<br>";

}
?>
