<?
function faktorialFor($n) {
    $result = 1;

    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}

$number = 5; // Ganti dengan angka yang diinginkan
echo "Faktorial dari $number (for): " . faktorialFor($number) . "\n";
?>