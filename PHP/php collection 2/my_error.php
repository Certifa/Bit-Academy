<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing game!</title>
</head>
<body>
    <h1>Doe mee!</h1>

    <p>
    Vul een getal in tussen 0 en 10 en klik op "Verstuur".
    </p>

    <form action="">
        <input type="number" name="guess" id="guess">
        <input type="submit" value="Verstuur">
    </form>

    <?php
    try {
        if (isset($_GET["guess"])) {
            $guess = $_GET["guess"];
            if ($guess > 10) {
                    throw new Exception("Getal moet kleiner zijn dan 10");
            } else{
                echo ' Correct getal!';
            }
        }
    } catch (Exception $ex) {
        error_log("Error opgevangen: " . $ex->getMessage()) . PHP_EOL;
    }

    try {
        if (isset($_GET["guess"])) {
            $guess = $_GET["guess"];
            if ($guess < 0) {
                    throw new Exception("Getal moet groter zijn dan 0");
            }
        }
    } catch (Exception $ex) {
        error_log("Error opgevangen: " . $ex->getMessage()) . PHP_EOL;
    }

    ?>

</body>
</html>
