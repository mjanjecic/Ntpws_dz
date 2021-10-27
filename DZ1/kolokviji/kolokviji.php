<?php
    $prvaOcjena=htmlspecialchars($_GET["prvi_kolokvij"]);
    $drugaOcjena=htmlspecialchars($_GET["drugi_kolokvij"]);

    $result=($prvaOcjena + $drugaOcjena)/2;
    $result=round($result);
    if($prvaOcjena == 1 || $drugaOcjena == 1)
        $result=1;


    echo "<p>Ocjena iz prvog kololkvija je $prvaOcjena, a drugog $drugaOcjena</p>";
    echo "Ukupna ocjena je: $result";
