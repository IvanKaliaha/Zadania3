<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    <a href="zad2.php">Zad2</a>
    <a href="zad4.php">Zad4</a>
    <form method="post">
        <label>id ucznia</label>
        <input type="text" name="id_ucznia" required>
        <label>ocena</label>
        <input type="text" name="ocena" required>
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

if (isset($_POST['id_ucznia'], $_POST['ocena'])) {
    $id = $_POST['id_ucznia'];
    $ocena = $_POST['ocena'];
    $sql = "UPDATE uczniowie2c SET ocena = '$ocena' WHERE id = '$id'";
    if (mysqli_query($con, $sql)){
        echo "Dodana ocena";
    }
    else{
        echo"błąd";
    }
}


mysqli_close($con);



?>