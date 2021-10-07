<?php
class homeModel{
    
    // Function Support View 
    function ShowProduct(){
        echo "<div class='row'>";
            echo "<div 'class='col'>";
                echo "<div class='tab-content'>";
                    echo "<div class='tab-pane fade show active' id='tab-product-new-arrivals'>";
                        echo "<div class='row'>";
                            $this->RepeatProduct(8);
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }
    function RepeatProduct($numberRepeact){
        for ($i=0; $i < $numberRepeact; $i++) { 
            echo "<div class='col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6' data-aos='fade-up' data-aos-delay='200'>";
                echo "<!-- Single Prodect -->";
                echo "<div class='product'>";
                    echo"<div class='thumb'>";
                        echo"<a href='shop-left-sidebar.html' class='image'>";
                            echo"<img src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt='Product' />";
                            echo"<img class='hover-image' src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt='Product' />";
                        echo"</a>";
                        echo"<span class='badges'>";
                            echo"<span class='new'>New</span>";
                        echo"</span>";
                        echo"<button title='Add To Cart' class=' add-to-cart'>Add";
                            echo"To Cart</button>";
                    echo"</div>";
                    echo"<div class='content'>";
                        echo"<h5 class='title'><a href='shop-left-sidebar.html'>Simple minimal Chair </a></h5>";
                        echo"<span class='price'>";
                            echo"<span class='new'>$38.50</span>";
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
            $this->ShowProduct();
        }
    }
}
