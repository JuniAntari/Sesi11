<?php
    $dta[0]["nama"] = "Putu Adnya";
    $dta[0]["alamat"] = "Jl. Janghakan ";
    $dta[0]["tgl_lahir"] = "2004-03-12";
    $dta[0]["hobi"] = "Tidur";


    $dta[1]["nama"] = "Juni Antari";
    $dta[1]["alamat"] = "Jl. Pabean";
    $dta[1]["tgl_lahir"] = "2004-06-14";
    $dta[1]["hobi"] = "Menari";


    $dta[2]["nama"] = "Santi";
    $dta[2]["alamat"] = "Jl. Danau Beratan";
    $dta[2]["tgl_lahir"] = "2003-12-18";
    $dta[2]["hobi"] = "Ngecas";
    

    # header("content-Type: appliaction/json; charset=utf-8"); 
    echo json_encode($dta);