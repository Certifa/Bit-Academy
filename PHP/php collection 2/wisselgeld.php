<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisselgeld</title>
</head>
<body>

    <h1>Wisselgeld</h1>

    <form action="wisselgeld.php" method="post">
        <input type="text" name="bedrag" id="bedrag" placeholder="Voer hier je bedrag in." value="<?php echo isset($_POST['bedrag']) ? htmlspecialchars($_POST['bedrag'], ENT_QUOTES) : ''; ?>">
        <button type="submit" name="submit" value="submit" id="submit">Submit</button>
    </form>
    <br>

    <?php



    $a = array(
        array("name" => "500 euro", "value" => 500, "image" => "foto/500euro.jpg"),
        array("name" => "200 euro", "value" => 200, "image" => "foto/200euro.jpg"),
        array("name" => "100 euro", "value" => 100, "image" => "foto/100euro.png"),
        array("name" => "50 euro", "value" => 50, "image" => "foto/50euro.png"),
        array("name" => "20 euro", "value" => 20, "image" => "foto/20euro.png"),
        array("name" => "10 euro", "value" => 10, "image" => "foto/10euro.png"),
        array("name" => "5 euro", "value" => 5, "image" => "foto/5euro.jpg"),
        array("name" => "2 euro", "value" => 2, "image" => "foto/2euro.jpg"),
        array("name" => "1 euro", "value" => 1, "image" => "foto/1euro.jpg"),
        array("name" => "0.50 cent", "value" => 0.5, "image" => "foto/50cent.png"),
        array("name" => "0.20 cent", "value" => 0.2, "image" => "foto/20cent.png"),
        array("name" => "0.10 cent", "value" => 0.1, "image" => "foto/10cent.png"),
        array("name" => "0.5 cent", "value" => 0.05, "image" => "foto/5cent.png"),
    );  
    $bedrag = $_POST['bedrag'];

    foreach ($a as $key => $value) {
        if ($value['value'] <= $bedrag) {
            $amount = floor($bedrag / $value['value']);
            $bedrag = $bedrag - ($amount * $value['value']);
            echo $amount . " x " . $value['name'] . "<br>";
            echo "<img src=" . $value['image'] . " alt=" . $value['name'] . " width='160px' height='100px'>";
        }
    }
    


    ?>
    

</body>
</html>
