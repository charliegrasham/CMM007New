<?php

for ($i = 1; $1 < 30; $i++)
{
    echo "<p>On day " . $i . " the following products are avialable: ";

    if ($i % 2 == 0)
    {
        echo "Specs ";
        $y = 1;
    }
    if ($i % 3 == 0)
    {
        echo "Mugs ";
        $y = 1;
    }
    if ($i % 4 == 0)
    {
        echo "Sausage Rolls";
        $y = 1;
    }
    if ($y ! = 1)
    {
        echo "NONE";
    }
    echo "</p>";
}
?>