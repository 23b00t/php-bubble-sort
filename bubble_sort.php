<?php

// Maximale Indexe sind: Anzahl der Elemente - 1
function bubbleSort($numberList)
{
    $indexes = count($numberList) - 1;
    // Abbruchwert für sortierte Arrays
    $sorted = false;
    // So lange durch Liste loopen bis sie sortiert ist
    // Nach jedem Durchlauf wird der größte Wert ganz rechts stehen

    for ($maxIndex = $indexes; $maxIndex >= 1; $maxIndex--) {
        $sorted = true;
        // Duch Liste loopen und aktuellen Wert mit nächstem Wert vergleichen
        for ($i = 0; $i < $maxIndex; $i++) {
            // Wenn der aktuelle Wert größer ist als der folgende, Elemente tauschen
            if ($numberList[$i] > $numberList[$i + 1]) {
                $greater = $numberList[$i];
                $numberList[$i] = $numberList[$i + 1];
                $numberList[$i + 1] = $greater;
                $sorted = false;
            }
        }
        if ($sorted) { break; }
    }
    return $numberList;
}
