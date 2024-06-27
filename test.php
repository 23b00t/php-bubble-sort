<?php
include "bubble_sort.php";
include "print.php";

runTest();

function runTest() {
    // for Schleife für 10 Testwiederholungen
    for ($n = 1; $n <= 10; $n++) {
        // Zufällige Anzahl an Elementen erzeugen (4-20)
        $elementCount = mt_rand(4, 20);
        // Array mit Zufallsdaten initialisieren
        $array = initData($elementCount);
        // Messe Startzeit
        $startTime = microtime(true);
        // Sortiere Array
        $sorted = bubbleSort($array);
        // Messe Endzeit
        $endTime = microtime(true);

        // Endzeit - Startzeit, Benchmark?
        $execTime = ($endTime - $startTime) * (10 ** 6);
        $benchmark = $execTime / $elementCount;

        if (isset($_SERVER["REMOTE_ADDR"])) {
            printResultBrowser($n, $array, $sorted, $execTime, $benchmark);
        } else {
            printResultConsole($n, $array, $sorted, $execTime, $benchmark);
        }
    }
}

function initData($elementCount) {
    // Initialisiere Array
    $array = [];
    // Element = Zufallszahl (-100 - 100), uniq!
    for ($_ = 0; $_ < $elementCount; $_++) {
        // Uniqueness überprüfen
        do {
            $randomNumber = mt_rand(-100, 100);
        } while (in_array($randomNumber, $array));
        array_push($array, $randomNumber);
    }
    return $array;
}

function printResultConsole($n, $array, $sorted, $execTime, $benchmark) {
    echo "Test Nr.: " . $n . "\n";
    echo "----------------------------------------------------------------------------------\n";
    echo "(Unsortiert)" . printData($array) . "\n";
    echo "(Sortiert)" . printData($sorted) . "\n";
    echo "Ausführungszeit: " . $execTime . " Mikrosekunden" . "\n";
    echo "Zeit / Element : " . $benchmark . " Mikrosekunden" . "\n";
    echo "__________________________________________________________________________________\n";
    echo "\n";
}

function printResultBrowser($n, $array, $sorted, $execTime, $benchmark) {
    echo "<div style='margin-left: 400px; margin-right: 400px; margin-top: 32px; margin-bottom: 32px;'>";
        echo "<strong> Test Nr.: " . $n . "</strong> <br>";
        echo "<hr>";
        echo "(Unsortiert)" . printData($array) . "<br>";
        echo "(Sortiert)" . printData($sorted) . "<br>";
        echo "<hr>";
        echo "Ausführungszeit: " . $execTime . " Mikrosekunden" . "<br>";
        echo "Zeit / Element : " . $benchmark . " Mikrosekunden" . "<br>";
        echo "<hr>";
    echo "</div>";
}
?>
