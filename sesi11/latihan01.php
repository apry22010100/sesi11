<?php
    $dta["NAMA"] = "Trisnantara Putra";
    $dta["TGL_LAHIR"] = "2003-04-09";
    $dta["JKEL"] = "L";
    $dta["UMUR"] = "20";
    $dta["HOBI"] = "memasak";


    header("contetnt-type: application/json; charset=utf-8");
    echo json_encode ($dta);