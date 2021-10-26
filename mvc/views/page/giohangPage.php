<div class="cart-main-area pt-100px pb-100px">
    <div class="container">
        <h3 class="cart-page-title">Sản Phẩm Của Bạn</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Hình Ảnh</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Giá Tiền</th>
                                    <th>Số Lượng</th>
                                    <th>Thành Tiền</th>
                                    <th>Số Lượng Còn Lại</th>
                                    <th><i class="far fa-check-square" id="checkAll"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $data["model"]->showProductInCart(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="home">Mua Thêm</a>
                                </div>
                                <div class="cart-clear">
                                    <a id="toitrangthanhtoan">Thanh Toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>