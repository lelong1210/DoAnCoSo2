<?php
    $arr = json_decode($data["productModel"]->GetTitleOverView($data["nameClass"]));
    $arr = array_values((array)$arr[0]);
    echo "<title>" . mb_strtoupper($arr[0], 'UTF-8') . "</title>";

    $arr = json_decode($data["homeModel"]->SelectTypeProduct($data["nameClass"]));
    $arr = array_values((array)$arr);
    $count = count($arr);
?>
<div class="shop-category-area pb-100px pt-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  col-md-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <p>Có <?php echo $count?> Sản Phẩm.</p>
                        <!-- Left Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sắp Xếp Theo:</p>
                            </div>
                            <div class="shop-select">
                                <select class="shop-sort">
                                    <!-- <option data-display="Relevance">Relevance</option>
                                    <option value="1"> Name, A to Z</option>
                                    <option value="2"> Name, Z to A</option>
                                    <option value="3"> Price, low to high</option>
                                    <option value="4"> Price, high to low</option> -->
                                </select> 
                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">
                    <div class="container">
            <!-- <div class="contentProduct" id="contentProduct"> -->
                <div class='row'>
                    <div class="col">
                        <div class='tab-content'>
                            <div class='tab-pane fade show active' id='tab-product-new-arrivals'>
                                <div class='row'>
                                    <!-- // $data["homeModel"]->RepeatProduct($arr,$numberRepeact); -->
                                    <?php $arrTypeProduct = json_decode($data["homeModel"]->SelectTypeProduct($data["nameClass"]));
                                        $arrTypeProduct = array_values((array) $arrTypeProduct);
                                        for ($j = 0; $j < count($arrTypeProduct); $j++) {
                                            $arrChildTypeProduct = array_values((array) $arrTypeProduct[$j]); ?>
                                        <div class='col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6' data-aos='fade-up' data-aos-delay='200'>
                                            <!-- Single Prodect -->
                                            <div class='product'>
                                                <div class='thumb'>
                                                    <a href="<?php echo './' . $arrChildTypeProduct[3] . '/' . $arrChildTypeProduct[0] ?>" class='image'>
                                                        <img src='<?php echo $arrChildTypeProduct[5] ?>' />
                                                        <img class='hover-image' src='<?php echo $arrChildTypeProduct[5] ?>' />
                                                    </a>
                                                    <span class='badges'>
                                                        <span class='new'>New</span>
                                                    </span>
                                                    <button title='Add To Cart' class=' add-to-cart' id='btnMH<?php echo $arrChildTypeProduct[0] ?>'>Thêm Vào Giỏ Hàng</button>
                                                </div>
                                                <div class='content'>
                                                    <h5 class='title'><a href="<?php echo './' . $arrChildTypeProduct[3] . '/' . $arrChildTypeProduct[0] ?>"><?php echo $arrChildTypeProduct[1] ?></a></h5>
                                                    <span class='price'>
                                                        <span class='new'><?php echo number_format($arrChildTypeProduct[2]) ?> đ</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    //
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>