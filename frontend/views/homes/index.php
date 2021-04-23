<?php
require_once 'helpers/Helper.php';
?>
<!--    PRODUCT-->
<!-- <div class="product-wrap">
    <div class="product container">
        <?php if (!empty($products)): ?>
        <h1 class="post-list-title">
            <a href="danh-sach-san-pham.html" class="link-category-item">Sản phẩm mới nhất</a>
        </h1>
        <div class="link-secondary-wrap row">
            <?php foreach ($products AS $product):
              $slug = Helper::getSlug($product['title']);
              $product_link = "san-pham/$slug/" . $product['id'] . ".html";
              $product_cart_add = "them-vao-gio-hang/" . $product['id'] . ".html";
              ?>
            <div class="service-link col-md-3 col-sm-6 col-xs-12">
                <a href="<?php echo $product_link; ?>">
                    <img class="secondary-img img-responsive" title="<?php echo $product['title'] ?>"
                        src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                        alt="<?php echo $product['title'] ?>" />
                    <span class="shop-title">
                        <?php echo $product['title'] ?>
                    </span>
                </a>
                <span class="shop-price">
                    <?php echo number_format($product['price']) ?>
                </span> -->
<!--                    frontend/views/homes/index.php-->
<!-- Khai báo thêm 1 thuộc tính do bạn tự định nghĩa ra
, để khi click vào thì lấy đc id của sp vừa click-->
<!-- <span data-id="<?php echo $product['id']?>" class="add-to-cart">
                    <a href="#" style="color: inherit">Thêm vào giỏ</a>
                </span>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div> -->
<!--    END PRODUCT-->

<div class="products-box">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol> -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/images/index/banner-double2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/news.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/index/banner-double1.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Hàng mới về</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".bulbs" class="">Converse</button>
                        <button data-filter=".fruits" class="">Nike</button>
                        <button data-filter=".podded-vegetables" class="">Adidas</button>
                        <button data-filter=".root-and-tuberous" class="">Vans</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list" style="position: relative; height: 695.625px;">
            <div class="col-lg-3 col-md-6 special-grid bulbs" style="position: absolute; left: 0px; top: 0px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="assets/images/sneaker/converse/cv1.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>
                            <!-- <a class="cart" href="#">Add to Cart</a> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid fruits" style="position: absolute; left: 285px; top: 0px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <img src="assets/images/sneaker/nike/nike1.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid bulbs" style="position: absolute; left: 570px; top: 0px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                    <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="assets/images/sneaker/converse/cv2.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid fruits" style="position: absolute; left: 855px; top: 0px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <img src="assets/images//sneaker/nike/nike2.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 special-grid bulbs" style="position: absolute; left: 0px; top: 231px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <img src="assets/images/sneaker/converse/cv5.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid fruits" style="position: absolute; left: 285px; top: 231px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                    <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="assets/images//sneaker/nike/nike3.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid podded-vegetables"
                style="position: absolute; left: 570px; top: 231px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        
                        <img src="assets/images/sneaker/adidas/adidas5.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid root-and-tuberous"
                style="position: absolute; left: 855px; top: 231px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <img src="assets/images/sneaker/vans/vans1.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid root-and-tuberous"
                style="position: absolute; left: 0px; top: 463px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                    <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="assets/images/sneaker/vans/vans2.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid podded-vegetables"
                style="position: absolute; left: 285px; top: 463px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <img src="assets/images/sneaker/adidas/adidas2.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid root-and-tuberous"
                style="position: absolute; left: 570px; top: 463px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <img src="assets/images/sneaker/vans/vans3.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid podded-vegetables"
                style="position: absolute; left: 855px; top: 463px;">
                <div class="products-single fix">
                    <div class="box-img-hover">
                    <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="assets/images/sneaker/adidas/adidas3.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <!-- <li><a href="danh-sach-san-pham.html" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="View"><i class="fas fa-eye"></i></a></li> -->
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title=""
                                        data-original-title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="danh-sach-san-pham.html"><i class="fas fa-eye"> Chi tiết sản phẩm</i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="categories-shop">
    <div class="container">
        <div class="col-12">
            <h2 style="text-align: center;" class="noo-sh-title">Nhận hàng tại nhà với các bước đơn giản</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img width="100%" class="img-fluid" src="assets/images/index/lua-chon.jpg" alt="">
                    <a class="btn hvr-hover" href="#">Lựa chọn thả ga</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img style="height:373px;" class="img-fluid" src="assets/images/index/thanh-toan.png" alt="">
                    <a class="btn hvr-hover" href="#">Thanh toán trực tuyến</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img style="height:373px;" class="img-fluid" src="assets/images/index/doi-tra.jpg" alt="">
                    <a class="btn hvr-hover" href="#">Nhận hàng và đổi trả miễn phí</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-add-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img style="height:373px; border-radius: 13px;" class="img-fluid" src="assets/images/index/banner-double1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img style="height:373px; border-radius: 13px;" class="img-fluid" src="assets/images/index/banner-double2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!--NEWS-->
<div class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1><a href="/news.html" href="">Tin Tức Sneaker</a></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid img-fluid-banner" src="assets/images/index/tin-tuc1.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Chân to do chạy bộ thường xuyên liệu có đúng như lời đồn?</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus sunt ipsum dicta
                                hic eaque iure, aspernatur, voluptates laboriosam, reprehenderit quidem quasi obcaecati
                                suscipit ex quaerat pariatur aliquam vero ab quam!</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="news_detail.html"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid img-fluid-banner" src="assets/images/index/tin-tuc2.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Mua giày trong khung giờ vàng được tặng kèm móc chìa khóa Sneaker Mini</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus sunt ipsum dicta
                                hic eaque iure, aspernatur, voluptates laboriosam, reprehenderit quidem quasi obcaecati
                                suscipit ex quaerat pariatur aliquam vero ab quam!</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="news_detail.html"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid img-fluid-banner" src="assets/images/index/tin-tuc3.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Người đàn ông hơn nửa đời gắn bó với nghề sửa chữa giày trên vỉa hè</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni a sunt eaque architecto ab
                                eveniet esse maiores qui repellat, quia dolorem accusamus aut mollitia in asperiores
                                sint optio necessitatibus dolore?</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="news_detail.html"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--END NEWS-->


<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme owl-loaded owl-drag">
        <div class="owl-stage-outer">
            <div class="owl-stage"
                style="transform: translate3d(-3323px, 0px, 0px); transition: all 0.25s ease 0s; width: 5114px;">
                <div class="owl-item cloned" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/instagram-img-06.jpg" alt="">
                            <div class="hov-in">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas1.jpg" alt="">
                            <div class="hov-in">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas2.jpg" alt="">
                            <div class="hov-in">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas3.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas4.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas5.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas6.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas1.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas1.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas1.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas1.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas1.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas1.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item active" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas/adidas6.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item active" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas/adidas3.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned active" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/vans/vans2.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned active" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/adidas/adidas4.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned active" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/nike/nike1.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/sneaker/nike/nike5.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 255.68px;">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="assets/images/instagram-img-05.jpg" alt="">
                            <div class="hov-in">
                                <a href="https://www.instagram.com/v.anh_11.11/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                    class="fas fa-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i
                    class="fas fa-arrow-right"></i></button></div>
        <div class="owl-dots disabled"></div> -->
    </div>
    <ul class="icon-service-wrap">
    <li data-toggle="tooltip" data-placement="left" title="Gọi ngay cho chúng tôi">
        <a href="tel:0999999999">
            <img src="assets/images/icon-phone.png" class="icon-service-img"/>
        </a>
    </li>
    <li data-toggle="tooltip" data-placement="left" title="Chat với chúng tôi qua Zalo">
        <a href="//zalo.me/0999999999" target="_blank">
            <img src="assets/images/icon-zalo.png" class="icon-service-img"/>
        </a>
    </li>
    <li data-toggle="tooltip" data-placement="left" title="Gửi mail cho chúng tôi">
        <a href="mailto:abc@gmail.com">
            <img src="assets/images/icon-mail.png" class="icon-service-img"/>
        </a>
    </li>
    <li data-toggle="tooltip" data-placement="left" title="Liên hệ với chúng tôi">
        <a href="contact.html" target="_blank">
            <img src="assets/images/icon-map.png" class="icon-service-img"/>
        </a>
    </li>
</ul>
</div>
<!--END NEWS-->