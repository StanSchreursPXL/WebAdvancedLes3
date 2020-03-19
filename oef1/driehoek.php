<?php
print("1a) \n");
$aantal_lijnen = 7;
for ($i = 1; $i <= $aantal_lijnen; $i++) {
    for ($j = 0; $j < $i; $j++) {
        print ("#");
    }
    print("\n");
}
print("------------------------ \n");

print("1b) \n");

for ($i = 1; $i <= $aantal_lijnen; $i++) {
    for ($j = 1; $j <= $aantal_lijnen; $j++) {
        if ($j <= $aantal_lijnen - $i) {
            print (" ");
        } else {
            print ("#");
        }
    }
    print("\n");
}


print("------------------------ \n");

print("1c) \n");

for ($i = 1; $i <= $aantal_lijnen; $i++) {
    for ($j = 1; $j <= $aantal_lijnen * 2 - 1; $j++) {
        if ($j <= $aantal_lijnen - $i | $j >= $aantal_lijnen + $i) {
            print (" ");
        } else {
            print ("#");
        }
    }
    print("\n");
}

print("------------------------ \n");

print("1d) \n");

$teller = 0;
$interval = 5;

for ($i = 1; $i <= $aantal_lijnen; $i++) {
    for ($j = 1; $j <= $aantal_lijnen * 2 - 1; $j++) {
        if ($j <= $aantal_lijnen - $i | $j >= $aantal_lijnen + $i) {
            print (" ");
        } else {
            printSymbool($teller, $interval);
            $teller++;
        }
    }
    print("\n");
}

function printSymbool($teller, $interval) {
    if ($teller % $interval === 0) {
        print("@");
    } else {
        print("#");
    }
}