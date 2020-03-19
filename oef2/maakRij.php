<?php
function maakRij($min, $max, $stap = 1) {
    if ($min < $max) {
        while ($min <= $max) {
            $result[] = $min;
            $min += $stap;
        }
    } else {
        while ($min >= $max) {
            $result[] = $min;
            $min -= $stap;
        }
    }
    return $result;
}

print("[" . implode(",", maakRij(1, 5)) . "]\n");
print("[" . implode(",", maakRij(5, 1)) . "]\n");
print("[" . implode(",", maakRij(1, 5, 2)) . "]\n");
print("[" . implode(",", maakRij(5, 1, 2)) . "]\n");
print("[" . implode(",", maakRij(3, 3, 2)) . "]\n");
