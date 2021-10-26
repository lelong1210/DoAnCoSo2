<?php
    $arr = $data["taikhoanModel"]->showAddressShippingForEdit($data["madiachigiaohang"]);
    for ($i=0; $i < count($arr); $i++) { 
        $arrChild = array_values((array)$arr[$i]);
?>
    <select name="" id="">
        <option value=""><?php echo $arrChild[$i]?></option>
    </select>
<?php }?>
