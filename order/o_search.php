<?php
    header('Content-Type: application/json');
    $returnarr = array();
    $searchParam = "";

    // verify the input
    if(isset($_GET["orderno"])){
        $searchParam = $_GET["orderno"];

        $theurl = "http://172.30.201.238:8080/api/getInfoOrder?filter=Siebel_Order_Number,eq," . $searchParam;

        $json = file_get_contents($theurl);
        $obj = json_decode($json);

        $arrecords = $obj->getInfoOrder->records;

        print_r($arrecords);

    }

    // echo json_encode($returnarr);

?>