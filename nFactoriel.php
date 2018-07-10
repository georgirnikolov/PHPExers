<form>
    <input type="text" name="num" />
    <input type="submit" />
</form>

<?php

if (isset($_GET['num'])) {
    $number = intval($_GET['num']);
    $factorial = 1;

    for ($i = 1; $i <= $number; $i++){
        $factorial *= $i;
    }

    echo $factorial.' ';
}
?>


