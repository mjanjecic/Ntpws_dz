<?php
    $polje=array("Newton", "Everly", "Violet", "Ethan", "Richard",
                "George", "Oswald", "Nancy", "Natasha", "Alex",
                "Greyson", "Ivy", "Victoria", "Emma",
                "Yuriel", "Oliver", "Ursula",
                "Uriel", "Pat");
    echo "<ol>";
    for($i = 0; $i < count($polje); $i++) {
        echo "<li>$polje[$i]</li>";
    }
    echo "</ol>";
?>