<?php
/*
 * Conditional
 * IF:
 * if(condition){
 * Instrutions
 * }else{
 * Other Instrutions
 * }
 */

/*
 * Comparison operator
 *
 * == if it is equal
 * === if it is exactly iqual
 * != it is different
 * <> different
 * !== it is not indenty
 * < younger that
 * > older that
 * <=
 * >=
 */

/*
 * Logical aperator
 *
 * && AND Y
 * || OR O
 * ! NOT NO
 * ans, or
 */
$color = 'red';

if ($color == 'red') {
    echo 'The color is ' . $color;
} else {
    echo 'The color is not ' . $color;
}

echo '<br>';

$year = 2020;

if ($year == 2020) {
    echo 'We are on ' . $year;
} else {
    echo 'We are not in ' . $year;
}

echo '<br>';

$age = 48;
$legfalAge = 18;
$name = 'Juank';
$city = 'Bogota';
$continent = 'SouthAmerica';

if ($age >= $legfalAge) {
    echo "<h1> $name IS an adult person</h1>";
    if ($continent == 'SouthAmerica') {
        echo "<h2>His city is $city</h2>";
    } else {
        echo "$name is not southAmerican person";
    }
} else {
    echo "<h1> $name IS NOT an adult person</h1>";
}

echo '<hr>';

$day = 5;

if ($day == 1) {
    echo 'Today is Monday';
} else {
    if ($day == 2) {
        echo 'Today is Tuesday';
    } else {
        if ($day == 3) {
            echo 'Today is Wenesday';
        } else {
            if ($day == 4) {
                echo 'Today is Thursday';
            } else {
                if ($day == 5) {
                    echo 'Today is Friday';
                } else {
                    if ($day == 6) {
                        echo 'Today is Saturday';
                    } else {
                        if ($day == 7) {
                            echo 'Today is Sunday';
                        }
                    }
                }
            }
        }
    }
}

// This is the same example but it has been improved

echo '<hr>';

$day = 1;

if ($day == 1) {
    echo 'Today is Monday';
} elseif ($day == 2) {
    echo 'Today is Tuesday';
} elseif ($day == 3) {
    echo 'Today is Wenesday';
} elseif ($day == 4) {
    echo 'Today is Thursday';
} elseif ($day == 5) {
    echo 'Today is Friday';
} elseif ($day == 6) {
    echo 'Today is Saturday';
} elseif ($day == 7) {
    echo 'Today is Sunday';
}

// Example 5

echo '<hr>';

$age1 = 18;
$age2 = 64;
$curentAge = 70;

if ($curentAge >= $age1 && $curentAge <= $age2) {
    echo 'The person can work, becasue his age is ' . $curentAge;
} else {
    echo 'The person can not work, becasue his age is ' . $curentAge;
}

echo '<hr>';
$country = 'Germany';
if ($country == 'mexico' ||$country == 'Spain' ||$country == 'Colombia') {
    echo 'In '. $country . ' the people speaking spanis language';
}else{
    echo 'In '. $country . ' the people dont speaking spanis language';
}

















