<?php

// print_r(scandir("."));

foreach (scandir(".") as $test) {
    if(!($test == '.' || $test == '..')){
       
        include_once("./$test");
    }
}