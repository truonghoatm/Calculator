<?php include_once "class_calculator.php" ?>
<?php
$first_value = $_POST["first_operand"];
$second_value = $_POST["second_operand"];
$operator = $_POST["operator"];
$calculator = new Calculator();
$calculator->setFirstOperand($first_value);
$calculator->setSecondOperand($second_value);
$calculator->setOperator($operator);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div id="Result">
    <h1>Result</h1>
    <label>Result is:</label>
    <span>
        <?php
            try {
                echo $calculator->calculate();
            } catch (Exception $e){
                echo $e->getMessage();
            }
        ?>
    </span>
</div>

</body>
</html>



