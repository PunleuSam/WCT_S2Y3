<?php

    echo "Task 2:<br><hr>";

    //function to filter even number
    function even($var)
    {
        //input as even number
        return (!($var&1));
    }
    //follow structure teacher given
    $arr = array(2, 3, 4, 6, 7, 9, 11, 20);

    echo "we have array [2, 3, 4, 6, 7, 9, 11, 20] ";
    echo "<br><br>";
    echo "below is the even number after filter:";
    echo "<br><br>";
    echo "even number:<br>";
    print_r(array_filter($arr, "even"));