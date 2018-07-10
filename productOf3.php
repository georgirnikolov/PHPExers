<form>
    <input type="text" name="num1"/>
    <input type="text" name="num2"/>
    <input type="text" name="num3"/>
    <input type="submit"/>
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $firstNumber = intval($_GET['num1']);
    $secondNumber = intval($_GET['num2']);
    $thirdNumber = intval($_GET['num3']);
    $result = $firstNumber * $secondNumber * $thirdNumber;

    if ($result >= 0) {
        echo 'Positive';
    } else {
        echo 'Negative';
    }

}
