<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    <a href="zad1.php">Zad1</a>
    <a href="zad3.php">Zad3</a>
    <form method="post">
        <label>imie</label>
        <input type="text" name="imie" required>
        <label>nazwisko</label>
        <input type="text" name="nazwisko" required>
        <label>pasja</label>
        <input type="text" name="pasja" required>
        <input type="submit" value="dodaj">
    </form>
</body>
</html>


<?php
$user = "root";
$host = "localhost";
$pass = "";
$db = "szkola";

$con = mysqli_connect($host, $user, $pass, $db);

if (isset($_POST['imie'], $_POST['nazwisko'], $_POST['pasja'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $pasja = $_POST['pasja'];
    $sql = "INSERT INTO uczniowie2c (imie, nazwisko, pasja) VALUES ('$imie', '$nazwisko', '$pasja')";
    if (mysqli_query($con, $sql)){
        echo "Dodany uczeń";
    }
    else{
        echo"błąd";
    }
}
if(!$con){
    die("nie działa połączenie" . mysqli_connect_error());
}






mysqli_close($con);



?>