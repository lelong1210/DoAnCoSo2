<?php
class homeModel{
    function ShowProduct(){
        for ($i=0; $i < 10; $i++) { 
            echo "<div class='col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6' data-aos='fade-up' data-aos-delay='200'>";
                echo "<!-- Single Prodect -->";
                echo "<div class='product'>";
                    echo"<div class='thumb'>";
                        echo"<a href='shop-left-sidebar.html' class='image'>";
                            echo"<img src='./public/images/product-image/1.jpg' alt='Product' />";
                            echo"<img class='hover-image' src='./public/images/product-image/2.jpg' alt='Product' />";
                        echo"</a>";
                        echo"<span class='badges'>";
                            echo"<span class='new'>New</span>";
                        echo"</span>";
                        echo"<div class='actions'>";
                            echo"<a href='wishlist.html' class='action wishlist' title='Wishlist'><i class='icon-heart'></i></a>";
                            echo"<a href='#' class='action quickview' data-link-action='quickview' title='Quick view' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='icon-size-fullscreen'></i></a>";
                            echo"<a href='compare.html' class='action compare' title='Compare'><i class='icon-refresh'></i></a>";
                        echo"</div>";
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
}
?>