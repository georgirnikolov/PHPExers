<form>
    <input type="text" name="num"/>
    <input type="submit"/>
</form>

<?php
if (isset($_GET['num'])) {
    $number = intval($_GET['num']);
    $firstParam = 1;
    $secondParam = 1;
    $sum = 0;

    echo $firstParam . ' ' . $secondParam . ' ';

    for ($i = 1; $i <= $number - 2; $i++) {
        $sum = $firstParam + $secondParam;
        echo $sum . ' ';
        $firstParam = $secondParam;
        $secondParam = $sum;
    }
}
?>