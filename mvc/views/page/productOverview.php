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
                        <?php 
                           $data["homeModel"]->ShowProduct($arr,$count);
                        ?>
                        <!--  Pagination Area Start -->
                        <!-- <div class="pro-pagination-style text-center mb-md-30px mb-lm-30px mt-6" data-aos="fade-up">
                            <ul>
                                <li>
                                    <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                </li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>
                                    <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> -->
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>