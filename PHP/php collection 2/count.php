<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teller</title>
</head>
<body>
    
<h1> Welkom op de pagina!</h1>

<p> Jij hebt deze pagina al 

<?php
if (isset($_SESSION['bezocht'])) {
    $aantal_bezocht = $_SESSION['bezocht'] + 1;
} else {
    $aantal_bezocht = 0;
}
echo $aantal_bezocht;
$_SESSION['bezoeken'] = $aantal_bezocht;

?>

    keer bezocht!
</p>

</body>
</html>
