<?php
    $arr = json_decode($data["productModel"]->GetTitleOverView($data["nameClass"]));
    $arr = array_values((array)$arr[0]);
    echo "<h1>Tong Quat</h1>";
    echo "<title>" . mb_strtoupper($arr[0], 'UTF-8') . "</title>";
?>
