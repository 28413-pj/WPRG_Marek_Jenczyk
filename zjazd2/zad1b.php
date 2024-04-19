<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    $dzialanie = $_POST['dzialanie'];
  
    switch ($dzialanie) {
        case 'dodawanie':
            $wynik = $liczba1 + $liczba2;
            break;
        case 'odejmowanie':
            $wynik = $liczba1 - $liczba2;
            break;
        case 'mnozenie':
            $wynik = $liczba1 * $liczba2;
            break;
        case 'dzielenie':
            if ($liczba2 != 0) {
                $wynik = $liczba1 / $liczba2;
            } else {
                $wynik = "Nie można dzielić przez zero!";
            }
            break;
        default:
            $wynik = "Błąd: Nieprawidłowe działanie";
            break;
    }
    echo "Wynik działania $dzialanie: $wynik";
}
?>
