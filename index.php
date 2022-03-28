
<!-- Задание 1 -->

<?php
    $a = 17;
    $b = -15;

    if ($a >= 0 && $b >= 0) {
        echo $a - $b;
    } else if ($a < 0 && $b < 0) {
        echo $a * $b;
    } else
        echo $a + $b;
?>

<!-- Задание 2 -->

<?php
$a = rand(0, 15);

switch ($a) {
    case 0:
        echo $a++, '<br />';
    case 1:
        echo $a++, '<br />';
    case 2:
        echo $a++, '<br />';
    case 3:
        echo $a++, '<br />';
    case 4:
        echo $a++, '<br />';
    case 5:
        echo $a++, '<br />';
    case 6:
        echo $a++, '<br />';
    case 7:
        echo $a++, '<br />';
    case 8:
        echo $a++, '<br />';
    case 9:
        echo $a++, '<br />';
    case 10:
        echo $a++, '<br />';
    case 11:
        echo $a++, '<br />';
    case 12:
        echo $a++, '<br />';
    case 13:
        echo $a++, '<br />';
    case 14:
        echo $a++, '<br />';
    case 15:
        echo $a++, '<br />';
        break;
}
?>

<!-- Задание 3 -->

<?php
    function mathSum($x, $y)
    {
        return $x + $y;
    }
    echo mathSum(33, 5), '<br />';
?>

<?php
    function mathDiff($x, $y)
    {
        return $x - $y;
    }
    echo mathDiff(19, 8), '<br />';
?>

<?php
    function mathMult($x, $y)
    {
        return $x * $y;
    }
    echo mathMult(19, 8), '<br />';
?>

<?php
    function mathDiv($x, $y)
    {
        return $x / $y;
    }

    echo mathDiv(33, 5), '<br />';
?>

<!-- Задание 4 -->

<?php
    function mathOperation($arg1, $arg2, $operation) {
        switch ($operation) {
            case '+':
                return mathSum($arg1, $arg2);
            case '-':
                return mathDiff($arg1, $arg2);
            case '*':
                return mathMult($arg1, $arg2);
            case '/':
                return mathDiv($arg1, $arg2);
        }
    }
    echo mathOperation(8, 11, '+');
    echo '<br />', mathOperation(8, 11, '-');
    echo '<br />', mathOperation(8, 11, '*');
    echo '<br />', mathOperation(8, 11, '/');
?>

<!-- Задание 6 -->
<?php
    function power($val, $pow) {
        return $val ** $pow;
    }
    echo '<br />', power(5, 3);
    echo '<br />', power(2, 8);
    echo '<br />', power(85, 6);
?>

<!-- Задание 7 (не выполнено) -->

<?php
    function currentDate($date, $dateForm) {
        $date = date("g:i p");
    }
?>