<?php
    include('connessione.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $titolo = $_POST['titolo'];
        $regista = $_POST['regista'];
        $annoProd = $_POST['annoProd'];
        $genere = $_POST['genere'];
        $nazionalita = $_POST['nazionalita'];
        $sql = "INSERT INTO film (Titolo, AnnoProduzione, Nazionalita, Regista, Genere) VALUES ('$titolo' , $annoProd , '$nazionalita', '$regista', '$genere');";
        if($conn->query($sql)) {
            echo "<p style='color:green'> Inserimento andato a buon fine </p>";
        } else {
            echo "<p style='color:red'> ERRORE </p>";
        }
    ?>
    <a href="./inserimento.html">Torna alla home page</a>
</body>
</html>