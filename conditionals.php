<?php
$bool = true;
$a = 1;
$b = 4;

if ($a < $b && !$bool) {
    echo "First condition is true!";
}
else if ($a < $b && $bool) {
    echo "Second condition is true!";
}
else {
    echo "None of the conditions were true." ;
}

echo "<br><br>";

switch ($a) {
    case 1:
        echo "The first case is correct!";
        break;
    
    case 3:
        echo "The second case is correct";
        break;
    
    default:
        echo "None of the conditions are true!";
}

echo"<br><br>" ;

$c = 0 ;
$d = -5 ;

if (($c* $d) >= 0) {
    echo "They have the same sign" ;
}

else if (($c * $d) < 0) {
    echo "They have different signs" ;
}

else {
    echo "0 has no sign";
} 

echo "<br><br>";
$day = 6;
switch ($day) {
    case 1:
        echo "Monday";
        break;
    
    case 2:
        echo "Tuesday";
        break;
        
    case 3:
        echo "Wednesday";
        break;
        
    case 4:
        echo "Thursday";
        break;
    
    case 5:
        echo "Friday";
        break;
            
    case 6:
        echo "Saturday";
        break;

    case 7:
        echo "Sunday";
        break;
    
    default:
    echo "Invalid day";
} 

echo "<br><br>";
$e = 7 ;
$_day = match ($e) {
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",
    6 => "Saturday",
    7 => "Sunday",
    default => "Invalid day",
};

echo $_day;

?>
