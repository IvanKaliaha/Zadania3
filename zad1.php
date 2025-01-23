<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <a href="zad2.php">Zad2</a>
</body>
</html>


<?php
$user = "root";
$host = "localhost";
$pass = "";
$db = "szkola";

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){
    die("nie działa połączenie" . mysqli_connect_error());
}

$sql = "SELECT * FROM uczniowie2c";

$res = mysqli_query($con, $sql);

if(mysqli_num_rows($res) >0){
    while($row = mysqli_fetch_assoc($res)){
        echo "<div id='obok'>";
        echo "<div id='id'>" . $row["id"] . "</div>";
        echo "<div id='imie'>" . $row["imie"] . "</div>";
        echo "<div id='nazwisko'>" . $row["nazwisko"] . "</div>";
        echo "<div id='pasja'>" . $row["pasja"] . "</div>";
        echo "<div id='ocena'>" . $row["ocena"] . "</div>";
        echo "</div><br>";

    }
}
else{
    echo "coś nie działa w zapytaniu";
}
mysqli_close($con);



?>