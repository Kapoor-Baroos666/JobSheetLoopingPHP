<?
function faktorialWhile($n) {
    $result = 1;
    $i = 1;

    while ($i <= $n) {
        $result *= $i;
        $i++;
    }

    return $result;
}

$number = 5; // Ganti dengan angka yang diinginkan
echo "Faktorial dari $number (while): " . faktorialWhile($number) . "\n";
?>