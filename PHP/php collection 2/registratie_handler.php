<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succes!</title>
</head>
<body>

<h1>Forum registratie</h1>
<p>Dit zijn jouw gegevens: </p>
<br>

<?php

echo "Gebruikersnaam: " . $_POST['username'] . "<br>";
echo "E-mail: " . $_POST['email'] . "<br>";

?>

<button>Correct</button>
</body>
</html>
