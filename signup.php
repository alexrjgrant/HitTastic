<?php
$un  = $_POST["username"];
$pw  = $_POST["password"];
$n   = $_POST["name"];
$dob = $_POST["dayofbirth"];
$mob = $_POST["monthofbirth"];
$yob = $_POST["yearofbirth"];

$d = getdate();
$y = $d["year"];
$m = $d["mon"];

if(($y - $yob) < 18)
{
    echo "You need to be aged 18+";
}
else
{
    echo "You have signed up with Name: $n";
    echo nl2br ("username : $un");
    echo nl2br ("day of birth : $dob / $mob / $yob");
    
    $conn = new PDO ("mysql:host=localhost;dbname=ephp019;", "ephp019", "ieleefuk");
    $conn -> query("INSERT INTO ht_users(username, name, password, dayofbirth, monthofbirth, yearofbirth) VALUES ('$un','$pw','$n', $dob, $mob, $yob)");
    print_r($conn->errorInfo());
}
?>