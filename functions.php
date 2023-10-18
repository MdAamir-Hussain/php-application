<?php
    echo "welcome to php function <br>";

    function sumMarks($marksArr){
        $sum =0;

        foreach ($marksArr as   $value) {
            # code...
            $sum += $value;
        }
        return $sum;
    }

    $rohan = array(34,56,78,65,88);
    $totalRohan = sumMarks($rohan);

    echo "Total marks of Rohan out of 500 is $totalRohan <br>";


    $aamir = array(91, 67 , 88, 77, 69);
    $totalAamir = sumMarks($aamir);

    echo "Total marks of Aamir of 500 is $totalAamir <br>";

?>