<?php

$a = $_GET["artist_input"];

echo "You are searching for songs by $a";

$conn = new PDO ("mysql:host=localhost;dbname=ephp019;", "ephp019", "ieleefuk");

$results = $conn->query("select * from wadsongs where artist ='$a'");
while($row=$results->fetch())
{
    echo "<p>";
    echo " Song ID ". $row["ID"] ."<br/> ";
    echo " Artist" . $row["artist"] . "<br/> " ; 
    echo " Title" .$row["title"]. "<br/>" ; 
    echo "</p>";
}
   
 /*     
$d = getdate();
$m = $d["mon"];
*/
?>