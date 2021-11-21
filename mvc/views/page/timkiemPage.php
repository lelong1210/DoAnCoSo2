<?php
$arrTypeProduct = json_decode($data["productModel"]->timkiem($data["params"], 0, 6));
$arrTypeProduct = array_values((array) $arrTypeProduct);
$count = count($arrTypeProduct);
?>
<span id="params" style="display: none;"><?php echo $data["params"] ?></span>
<div class="shop-category-area pb-100px pt-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                <!-- Shop Top Area Start -->
                <div class="shop-top-bar d-flex">
                    <!-- Left Side start -->
                    <p id="soluongtimkiem"><?php //echo $count; 
                                            ?></p>
                    <!-- Left Side End -->
                    <!-- Right Side Start -->
                    <div class="select-shoing-wrap d-flex align-items-center">
                        <div class="shot-product">
                            <p>Sắp Xếp Theo:</p>
                        </div>
                        <div class="shop-select">
                            <!-- <button id="123">123</button> -->
                            <!-- <select class="shop-sort">

                            </select> -->
                            <select name="" id="sapxep<?php echo $data['params'] ?>">
                                <option data-display="Chọn"> Chọn</option>
                                <option value="1"> Giá : Cao Thấp </option>
                                <option value="2"> Giá : Thấp Cao </option>
                                <option value="3"> Tên : Tăng Dần </option>
                                <option value="4"> Tên : Giảm Dần</option>
                            </select>
                        </div>
                    </div>
                    <!-- Right Side End -->
                </div>
                <!-- Shop Top Area End -->

                <!-- Shop Bottom Area Start -->
                <div class="box_nd_timkiem" id="box_nd_timkiem">
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
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                </div>
                <!-- Shop Bottom Area End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                <div class="shop-sidebar-wrap">
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget">
                        <div class="main-heading">
                            <h3 class="sidebar-title">Danh Mục Sản Phẩm</h3>
                        </div>
                        <div class="sidebar-widget-category">
                            <ul>
                                <?php
                                $arrThuMuc = $data["homeModel"]->SelectThuMucSanPham();
                                $arrThuMuc = json_decode($arrThuMuc);
                                for ($i = 0; $i < count($arrThuMuc); $i++) {
                                    $arrChild = array_values((array) $arrThuMuc[$i]);
                                    ?>
                                    <li><a href="/www/timkiem/<?php echo $arrChild[1] ?>" class=""><?php echo $arrChild[2]; ?> <span></span> </a></li>
                                <?php } ?>
                                <!-- <li><a href="#" class="selected">All <span>(4)</span> </a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>