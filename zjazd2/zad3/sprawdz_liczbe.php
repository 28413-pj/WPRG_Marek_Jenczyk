<?php
function czyLiczbaPierwsza($liczba) {
    if ($liczba <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $liczba; $i++) {
        if ($liczba % $i === 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['liczba']) && filter_var($_POST['liczba'], FILTER_VALIDATE_INT) && $_POST['liczba'] > 0) {
        $liczba = $_POST['liczba'];
        
        $iteracje = 0;
        for ($i = 2; $i * $i <= $liczba; $i++) {
            $iteracje++;
        }
        
        if (czyLiczbaPierwsza($liczba)) {
            echo "$liczba jest liczbą pierwszą.";
        } else {
            echo "$liczba nie jest liczbą pierwszą.";
        }

        echo "<br>Liczba iteracji potrzebnych do sprawdzenia: $iteracje";
    } else {
        echo "Błąd: Wprowadzona wartość nie jest liczbą całkowitą dodatnią.";
    }
}
?>
