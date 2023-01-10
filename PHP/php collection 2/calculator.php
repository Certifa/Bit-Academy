<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>


    <form action="calculator.php" method="post">
        <label for=""><strong>Number 1:</strong></label> 
        <input type="text" name="num1" id="num1" value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1'], ENT_QUOTES) : ''; ?>">
        <br><br> 
        <label for=""><strong>Number 2:</strong></label>
        <input type="text" name="num2" id="num2" value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2'], ENT_QUOTES) : ''; ?>">  
        <br><br>
        <button type="submit" name="operator" value="Add" id="Add">Add</button>
        <button type="submit" name="operator" value="Subtract" id="Subtract">Subtract</button>
        <button type="submit" name="operator" value="Multiply" id="Multiply">Multiply</button>
        <button type="submit" name="operator" value="Divide" id="Divide">Divide</button>
        <button type="submit" name="operator" value="Modulo" id="Modulo">Modulo</button>
    </form>
<br> 

<?php
if (isset($_POST['operator'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = 0;

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case 'Add':
                $result = $num1 + $num2;
                break;
            case 'Subtract':
                $result = $num1 - $num2;
                break;
            case 'Multiply':
                $result = $num1 * $num2;
                break;
            case 'Divide':
                if ($operator == 'Divide' && $num2 == 0) {
                    echo "<p><strong> Invalid input, can't divide by 0</p>";
                } elseif ($operator == 'Divide' && $num1 == 0) {
                    echo "<p><strong> Invalid input, can't divide by 0</p>";
                } else {
                    $result = $num1 / $num2;
                } 
                    
                break;
            case 'Modulo':
                if ($operator == 'Modulo' && $num2 == 0) {
                    echo "<p><strong> Invalid input, can't divide by 0</p>";
                } elseif ($operator == 'Modulo' && $num1 == 0) {
                    echo "<p><strong> Invalid input, can't divide by 0</p>";
                } else {
                    $result = fmod($num1, $num2);
                } 
                break;
        }
            echo "<h3>Operation: $operator</h3>";
        echo "<h2>Result: $result</h2>";
    } else {
        echo "<p><strong> Invalid input, only numbers are allowed</p>";
    }
}
    
?>


</body>
</html>
