<?php 
    $arrTypeProduct = $data["arrTypeProduct"];
    $count = count($arrTypeProduct);
?>
<div class="shop-bottom-area">
    <div class="row" id="addViewProduct">
        <!-- // $data["homeModel"]->RepeatProduct($arr,$numberRepeact); -->
        <?php
        for ($j = 0; $j < $count; $j++) {
            $arrChildTypeProduct = array_values((array) $arrTypeProduct[$j]); ?>
            <div class="col-lg-4  col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="400">
                <!-- Single Prodect -->
                <div class='product'>
                    <div class='thumb'>
                        <a href="<?php echo '/www/' . $arrChildTypeProduct[3] . '/' . $arrChildTypeProduct[0] ?>" class='image'>
                            <img src='<?php echo $arrChildTypeProduct[5] ?>' />
                            <img class='hover-image' src='<?php echo $arrChildTypeProduct[5] ?>' />
                        </a>
                        <span class='badges'>
                            <span class='new'>New</span>
                        </span>
                        <button title='Add To Cart' class=' add-to-cart' id='btnMH<?php echo $arrChildTypeProduct[0] ?>'>Thêm Vào Giỏ Hàng</button>
                    </div>
                    <div class='content'>
                        <h5 class='title'><a href="<?php echo '/www/' . $arrChildTypeProduct[3] . '/' . $arrChildTypeProduct[0] ?>"><?php echo $arrChildTypeProduct[1] ?></a></h5>
                        <span class='price'>
                            <span class='new'><?php echo number_format($arrChildTypeProduct[2]) ?> đ</span>
                        </span>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <!--  Pagination Area Start -->
    <div class="pro-pagination-style text-center mb-md-30px mb-lm-30px mt-6" data-aos="fade-up">
        <button class="btn btn-success" id="xemThemSanPham">Xem Thêm</button>
        <span id="params" style="display: none;"><?php echo $data["params"] ?></span>
    </div>
    <!--  Pagination Area End -->
</div>