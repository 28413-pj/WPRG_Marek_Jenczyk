<?php

function czy_pierwsza($liczba)
{
    if ($liczba < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($liczba); $i++) {
        if ($liczba % $i == 0) {
            return false;
        }
    }
    return true;
}

function wypisz_liczby_pierwsze($poczatek, $koniec)
{
    for ($i = $poczatek; $i <= $koniec; $i++) {
        if (czy_pierwsza($i)) {
            echo $i . " ";
        }
    }
}


$poczatek_zakresu = 1;
$koniec_zakresu = 999;

echo wypisz_liczby_pierwsze($poczatek_zakresu, $koniec_zakresu);

?>
