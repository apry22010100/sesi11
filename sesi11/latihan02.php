<?php
    $dta[0]["NAMA"] = "Trisnantara Putra";
    $dta[0]["TGL_LAHIR"] = "2003-04-09";
    $dta[0]["JKEL"] = "L";
    $dta[0]["UMUR"] = "20";
    $dta[0]["HOBI"] = "memasak";

    $dta[1]["NAMA"] = "Nyoman Aprianti";
    $dta[1]["TGL_LAHIR"] = "2003-10-25";
    $dta[1]["JKEL"] = "p";
    $dta[1]["UMUR"] = "19";
    $dta[1]["HOBI"] = "Bulu Tangkis";

    $dta[2]["NAMA"] = "Wisnu Randa";
    $dta[2]["TGL_LAHIR"] = "2002-05-19";
    $dta[2]["JKEL"] = "L";
    $dta[2]["UMUR"] = "21";
    $dta[2]["HOBI"] = "Bola";
    header("contetnt-type: application/json; charset=utf-8");
    echo json_encode ($dta);