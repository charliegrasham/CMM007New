<?php
$myarray = array("specs", "mugs", "sausage rolls");;
echo "<h1>Original Array</h1>";
printmyArray($myArray);

$myArray[1] = "hugs"; 

echo "<h1>Swap in Hugs</h1>";
printmyArray($myArray);

unset($myArray[2]); 

echo "<h1>Take out Sausage Rolls</h1>";
printmyArray($myArray);

{
    foreach($myArray as $x) {
        echo "<p>" . $x . "</p";
    }
}
?>