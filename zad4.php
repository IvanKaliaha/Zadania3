<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    <a href="zad1.php">Zad2</a>
    <a href="zad2.php">Zad3</a>
    <form method="post">
        <label>id ucznia</label>
        <input type="text" name="id_ucznia" required>
        <input type="submit" value="usun">
    </form>
</body>
</html>


<?php
$user = "root";
$host = "localhost";
$pass = "";
$db = "szkola";

// Establish connection
$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if 'id_ucznia' is set
if (isset($_POST['id_ucznia'])) {
    $id = $_POST['id_ucznia'];

    // First, delete the student by ID
    $sql = "DELETE FROM `uczniowie2c` WHERE id = '$id'";

    if (mysqli_query($con, $sql)) {
        echo "Wyrzucony uczeń";
        $sql2 = "SET @id := 0";
        mysqli_query($con, $sql2);
        $sql3 = "UPDATE `uczniowie2c` 
                 SET id = @id := (@id + 1)";
        
        if (mysqli_query($con, $sql3)) {
        } else {
            echo "Błąd przy aktualizacji ID.";
        }
        $sql4 = "ALTER TABLE `uczniowie2c` AUTO_INCREMENT = 1";
        mysqli_query($con, $sql4);

    } else {
        echo "Błąd: " . mysqli_error($con);
    }
}

// Close the connection
mysqli_close($con);
?>
