<?php
class homeModel extends connectDB{
    // Function Support Database
    function GetProcduct(){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM sanpham";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
    // Function Support View 
    function ShowProduct($arr){
        echo "<div class='row'>";
            echo "<div 'class='col'>";
                echo "<div class='tab-content'>";
                    echo "<div class='tab-pane fade show active' id='tab-product-new-arrivals'>";
                        echo "<div class='row'>";
                            $this->RepeatProduct(8,$arr);
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }
    function RepeatProduct($numberRepeact,$arr){
        for ($i=0; $i < $numberRepeact; $i++) { 
            $arrChild = array_values((array) $arr[$i]);
            echo "<div class='col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6' data-aos='fade-up' data-aos-delay='200'>";
                echo "<!-- Single Prodect -->";
                echo "<div class='product'>";
                    echo"<div class='thumb'>";
                        echo"<a href='shop-left-sidebar.html' class='image'>";
                            echo"<img src='$arrChild[5]' />";
                            echo"<img class='hover-image' src='$arrChild[5]' />";
                        echo"</a>";
                        echo"<span class='badges'>";
                            echo"<span class='new'>New</span>";
                        echo"</span>";
                        echo"<button title='Add To Cart' class=' add-to-cart'>Add";
                            echo"To Cart</button>";
                    echo"</div>";
                    echo"<div class='content'>";
                        echo"<h5 class='title'><a href='shop-left-sidebar.html'>$arrChild[1]</a></h5>";
                        echo"<span class='price'>";
                            echo"<span class='new'>".number_format($arrChild[2])." đ</span>";
                        echo"</span>";
                    echo"</div>";
                echo"</div>";
            echo"</div>";
        }
    }
    function ShowTiTle(){
        echo "<div class='row'>";
            echo "<div class='col-md-12 text-center' data-aos='fade-up'>";
                echo"<div class='section-title mb-0'>";
                    echo"<h2 class='title'>Máy Hút Bụi</h2>";
                    echo"<p class='sub-title mb-6'>Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore</p>";
                echo"</div>";
            echo"</div>";
        echo"</div>";
    }
    function ShowTypeProduct(){
        for ($i=0; $i < 10 ; $i++) { 
            $this->ShowTiTle();
            $this->ShowProduct(json_decode($this->GetProcduct()));
        }
    }
    function ShowSlider(){
        echo"<div class='section '>";
        echo"<div class='hero-slider swiper-container slider-nav-style-1 slider-dot-style-1 dot-color-white'>";
            echo"<!-- Hero slider Active -->";
            echo"<div class='swiper-wrapper'>";
            echo"<!-- Single slider item -->";
                echo"<div class='hero-slide-item slider-height-2 swiper-slide d-flex'>";
                    echo"<div class='hero-bg-image'>";
                        echo"<img src='https://iot.ilifesmart.com/data/upload/20210625/60d5939426873.png' alt=''>";
                    echo"</div>";
                echo"</div>";
                echo"<!-- Single slider item -->";
                echo"<div class='hero-slide-item slider-height-2 swiper-slide d-flex text-center'>";
                    echo"<div class='hero-bg-image'>";
                        echo"<img src='https://iot.ilifesmart.com/data/upload/20200525/5ecb260e75656.jpg' alt=''>";
                    echo"</div>";
                echo"</div>";
            echo"</div>";
            echo"<!-- Add Arrows -->";
            echo"<div class='swiper-buttons'>";
                echo"<div class='swiper-button-next'></div>";
                echo"<div class='swiper-button-prev'></div>";
            echo"</div>";
        echo"</div>";
    echo"</div>";
    }
}
