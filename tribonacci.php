<form>
    <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if (isset($_GET['num'])){
    $number = intval($_GET['num']);

    $firstParam = 1;
    $secondParam = 1;
    $thirdParam = 2;

    echo $firstParam.' '.$secondParam.' '.$thirdParam.' ';

    for ($i = 1; $i <= $number - 3; $i++){
        $sum = $firstParam + $secondParam + $thirdParam;
        echo $sum.' ';
        $firstParam = $secondParam;
        $secondParam = $thirdParam;
        $thirdParam = $sum;
    }
}
?>