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
            $this->ShowModel();
        }
    }
    function ShowModel(){
        echo"<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog'>";
            echo"<div class='modal-dialog' role='document'>";
                echo"<div class='modal-content'>";
                    echo"<div class='modal-header'>";
                        echo"<button type='button' class='close' data-bs-dismiss='modal' aria-label='Close'><span";
                        echo"aria-hidden='true'>x</span></button>";
                    echo"</div>";
                    echo"<div class='modal-body'>";
                        echo"<div class='row'>";
                            echo"<div class='col-md-5 col-sm-12 col-xs-12 mb-lm-30px mb-sm-30px'>";
                                echo"<!-- Swiper -->";
                                    echo"<div class='swiper-container gallery-top mb-4'>";
                                        echo"<div class='swiper-wrapper'>";
                                            echo"<div class='swiper-slide'>";
                                                echo"<img class='img-responsive m-auto' src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt=''>";
                                            echo"</div>";
                                            echo"<div class='swiper-slide'>";
                                                echo"<img class='img-responsive m-auto' src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt=''>";
                                            echo"</div>";
                                            echo"<div class='swiper-slide'>";
                                                echo"<img class='img-responsive m-auto' src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt=''>";
                                            echo"</div>";
                                            echo"<div class='swiper-slide'>";
                                                echo"<img class='img-responsive m-auto' src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt=''>";
                                            echo"</div>";
                                            echo"<div class='swiper-slide'>";
                                                echo"<img class='img-responsive m-auto' src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt=''>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
                                echo"<div class='swiper-container gallery-thumbs slider-nav-style-1 small-nav'>";
                                    echo"<div class='swiper-wrapper'>";
                                        echo"<div class='swiper-slide'>";
                                            echo"<img class='img-responsive m-auto' src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt=''>";
                                        echo"</div>";
                                        echo"<div class='swiper-slide'>";
                                            echo"<img class='img-responsive m-auto' src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt=''>";
                                        echo"</div>";
                                        echo"<div class='swiper-slide'>";
                                            echo"<img class='img-responsive m-auto' src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt=''>";
                                        echo"</div>";
                                        echo"<div class='swiper-slide'>";
                                            echo"<img class='img-responsive m-auto' src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt=''>";
                                        echo"</div>";
                                        echo"<div class='swiper-slide'>";
                                            echo"<img class='img-responsive m-auto' src='https://novadigital.net/wp-content/uploads/IMG_1919_2048x2048.png' alt=''>";
                                        echo"</div>";
                                    echo"</div>";
                                    echo"<!-- Add Arrows -->";
                                    echo"<div class='swiper-buttons'>";
                                        echo"<div class='swiper-button-next'></div>";
                                        echo"<div class='swiper-button-prev'></div>";
                                    echo"</div>";
                                echo"</div>";
                            echo"</div>";
                            echo"<div class='col-md-7 col-sm-12 col-xs-12'>";
                                echo"<div class='product-details-content quickview-content'>";
                                    echo"<h2>Originals Kaval Windbr</h2>";
                                    echo"<p class='reference'>Reference:<span> demo_17</span></p>";
                                    echo"<div class='pro-details-rating-wrap'>";
                                        echo"<div class='rating-product'>";
                                            echo"<i class='ion-android-star'></i>";
                                            echo"<i class='ion-android-star'></i>";
                                            echo"<i class='ion-android-star'></i>";
                                            echo"<i class='ion-android-star'></i>";
                                            echo"<i class='ion-android-star'></i>";
                                        echo"</div>";
                                        echo"<span class='read-review'><a class='reviews' href='#'>Read reviews (1)</a></span>";
                                    echo"</div>";
                                    echo"<div class='pricing-meta'>";
                                        echo"<ul>";
                                            echo"<li class='old-price not-cut'>$18.90</li>";
                                        echo"</ul>";
                                    echo"</div>";
                                    echo"<p class='quickview-para'>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>";
                                    echo"<div class='pro-details-size-color'>";
                                        echo"<div class='pro-details-color-wrap'>";
                                            echo"<span>Color</span>";
                                            echo"<div class='pro-details-color-content'>";
                                                echo"<ul>";
                                                    echo"<li class='blue'></li>";
                                                    echo"<li class='maroon active'></li>";
                                                echo"</ul>";
                                            echo"</div>";
                                        echo"</div>";
                                    echo"</div>";
                                    echo"<div class='pro-details-quality'>";
                                        echo"<div class='cart-plus-minus'>";
                                            echo"<input class='cart-plus-minus-box' type='text' name='qtybutton' value='1' />";
                                        echo"</div>";
                                        echo"<div class='pro-details-cart btn-hover'>";
                                            echo"<button class='add-cart btn btn-primary btn-hover-primary ml-4'> Add To";
                                            echo"Cart</button>";
                                        echo"</div>";
                                    echo"</div>";
                                    echo"<div class='pro-details-wish-com'>";
                                        echo"<div class='pro-details-wishlist'>";
                                            echo"<a href='wishlist.html'><i class='ion-android-favorite-outline'></i>Add to";
                                            echo"wishlist</a>";
                                        echo"</div>";
                                        echo"<div class='pro-details-compare'>";
                                            echo"<a href='compare.html'><i class='ion-ios-shuffle-strong'></i>Add to compare</a>";
                                        echo"</div>";
                                    echo"</div>";
                                    echo"<div class='pro-details-social-info'>";
                                        echo"<span>Share</span>";
                                        echo"<div class='social-info'>";
                                            echo"<ul>";
                                                echo"<li>";
                                                    echo"<a href='#'><i class='ion-social-facebook'></i></a>";
                                                echo"</li>";
                                                echo"<li>";
                                                    echo"<a href='#'><i class='ion-social-twitter'></i></a>";
                                                echo"</li>";
                                                echo"<li>";
                                                    echo"<a href='#'><i class='ion-social-google'></i></a>";
                                                echo"</li>";
                                                echo"<li>";
                                                    echo"<a href='#'><i class='ion-social-instagram'></i></a>";
                                                echo"</li>";
                                            echo"</ul>";
                                        echo"</div>";
                                    echo"</div>";
                                echo"</div>";
                            echo"</div>";
                        echo"</div>";
                    echo"</div>";
                echo"</div>";
            echo"</div>";
        echo"</div>";
    }
}
