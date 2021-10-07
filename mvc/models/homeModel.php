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
    function SelectTypeProduct($loaisanpham){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM sanpham WHERE loaisanpham=:loaisanpham";
        $query = $conn->prepare($sql);
        $query->bindParam(":loaisanpham",$loaisanpham);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }        
    }
    function SelectThuMucSanPham(){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM thumucsanpham";
        $query = $conn->prepare($sql);
        $query->bindParam(":loaisanpham",$loaisanpham);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }              
    }
    // Function Support View 
    function ShowProduct($arr,$numberRepeact){
        echo "<div class='row'>";
            echo "<div 'class='col'>";
                echo "<div class='tab-content'>";
                    echo "<div class='tab-pane fade show active' id='tab-product-new-arrivals'>";
                        echo "<div class='row'>";
                            $this->RepeatProduct($arr,$numberRepeact);
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }
    function RepeatProduct($arr,$numberRepeact){
        $arr = array_values((array) $arr);
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
    function ShowTiTle($arr){
        echo "<div class='row'>";
            echo "<div class='col-md-12 text-center' data-aos='fade-up'>";
                echo"<div class='section-title mb-0'>";
                    echo"<h2 class='title'>".mb_strtoupper($arr[2], 'UTF-8')."</h2>";
                    echo"<p class='sub-title mb-6'>Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore</p>";
                echo"</div>";
            echo"</div>";
        echo"</div>";
    }
    function ShowTypeProduct(){
        $numberRepeact = 8 ;
        $arr = json_decode($this->SelectThuMucSanPham());
        $arr = array_values((array)$arr);
        for ($i=0; $i < count($arr) ; $i++) { 
            $arrChild = array_values((array)$arr[$i]);
            $this->ShowTiTle($arrChild);
            $this->ShowProduct(json_decode($this->SelectTypeProduct($arrChild[1])),$numberRepeact);
        }
    }
    function ShowSlider(){
        $arr = json_decode($this->SelectTypeProduct("slide"));
        $arr = array_values((array) $arr);
        $count = count($arr);
        echo"<div class='section '>";
        echo"<div class='hero-slider swiper-container slider-nav-style-1 slider-dot-style-1 dot-color-white'>";
            echo"<!-- Hero slider Active -->";
            echo"<div class='swiper-wrapper'>";
                for ($i=0; $i < $count; $i++) { 
                    $arrChild = array_values((array)$arr[$i]);
                    echo"<!-- Single slider item -->";
                    echo"<div class='hero-slide-item slider-height-2 swiper-slide d-flex text-center'>";
                        echo"<div class='hero-bg-image'>";
                            echo"<img src='$arrChild[5]' alt=''>";
                        echo"</div>";
                    echo"</div>";
                }
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
