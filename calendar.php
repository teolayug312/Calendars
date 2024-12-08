<?php 
$months = "March";
$year = 2025 ;

switch ($months) {
    case "January": case "March": case "May": case "July": case "August": case "October": case "December":
        $date = 31;
        break;
    case "April": case "June": case "September": case "November";
        $date  = 30;
        break;
    case "February":
        if (($year % 4 == 0 && $year % 100 !== 0) || ($year % 400 == 0)) {
            $date = 29;
        }
        else {
            $date = 28;
        }
        break;

    default:
        echo "invalid month";

}

echo "$months/$year calendar: <br>";

for ($d = 1; $d <= $date; $d++) {
    echo $d . " ";
    if ($d % 7 == 0){
        echo "<br>";
    }
}
?>