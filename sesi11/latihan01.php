<?php
    $dta[0]["nama"] = "Komang Adi";
    $dta[0]["alamat"] = "Jl. utama 5 Blok A17";
    $dta[0]["tgl_lahir"] = "2012-01-07";
    

    $dta[1]["nama"] = "Kuntiara";
    $dta[1]["alamat"] = "Jl. Kumbang 24";
    $dta[1]["tgl_lahir"] = "2013-11-09";
  

    $dta[1]["nama"] = "Shanti";
    $dta[1]["alamat"] = "Jl. kura-kura dalam Gang perahu";
    $dta[1]["tgl_lahir"] = "2015-08-12";

    
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);