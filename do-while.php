<?
function faktorialDoWhile($n) {
    if ($n == 0) return 1; // Faktorial dari 0 adalah 1

    $result = 1;
    $i = 1;

    do {
        $result *= $i;
        $i++;
    } while ($i <= $n);

    return $result;
}

$number = 5; // Ganti dengan angka yang diinginkan
echo "Faktorial dari $number (do-while): " . faktorialDoWhile($number) . "\n";
?>