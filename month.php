<?php
$months = 1;
$year = 2024;

switch($months){

    case 1: 
    case 3: 
    case 5: 
    case 7: 
    case 8: 
    case 10: 
    case 12:
        $date = 31;
        break;
    case 4: 
    case 6: 
    case 9: 
    case 11:
        $date = 30;
        break;
    case 2:
        if (($year % 4 == 0 && $year % 100 !== 0) || ($year % 400 == 0)){
            $date = 29;
        }
        else{
            $date = 28;
        }
        break;
    default:
        $date = 0;

}
echo "$months/$year calendar: <br>";

for ($d = 1; $d <= $date; $d++) {
    echo $d . " ";
    if ($d % 7 == 0) {
        echo "<br>";
    }
}
?>
