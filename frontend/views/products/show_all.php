<!--Chức nwang filter do kết hợp với rewrite url nên ko dùng phương thức GET cho form, vì xử lý rewrite sẽ rất phức tạp
thay vào đó sẽ dùng POST
-->
<?php
require_once 'helpers/Helper.php';
?>
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div style="margin-top: 30px;" class="row">
        <div class="main-left col-md-3 col-sm-3 col-xs-12">
            <!-- <h3>Lọc</h3> -->
            <form action="" method="POST">
              <?php if (!empty($categories)): ?>
                  <div class="form-group">
                      <b>Danh mục</b> <br/>
                    <?php foreach ($categories AS $category):
                      //đổ lại dữ liệu đã check category
                      $category_checked = '';
                      if (isset($_POST['category'])) {
                        if (in_array($category['id'], $_POST['category'])) {
                          $category_checked = 'checked';
                        }
                      }
                      ?>
                        <input type="checkbox" name="category[]"
                               value="<?php echo $category['id']; ?>" <?php echo $category_checked; ?> />
                      <?php echo $category['name']; ?>
                        <br/>
                    <?php endforeach; ?>

                  </div>
              <?php endif; ?>

                <div class="form-group">
                    <b>Khoảng giá</b> <br/>
                  <?php
                  //cần đổ lại dữ liệu ra form search
                  $price1_checked = '';
                  $price2_checked = '';
                  $price3_checked = '';
                  $price4_checked = '';
                  if (isset($_POST['price'])) {
                    foreach ($_POST['price'] as $price) {
                      if ($price == 1) {
                        $price1_checked = 'checked';
                      }
                      if ($price == 2) {
                        $price2_checked = 'checked';
                      }
                      if ($price == 3) {
                        $price3_checked = 'checked';
                      }
                      if ($price == 4) {
                        $price4_checked = 'checked';
                      }
                    }
                  }
                  ?>
                    <input type="checkbox" name="price[]" value="1" <?php echo $price1_checked; ?> /> Dưới 1tr <br/>
                    <input type="checkbox" name="price[]" value="2" <?php echo $price2_checked; ?> /> Từ 1 - 2tr
                    <br/>
                    <input type="checkbox" name="price[]" value="3" <?php echo $price3_checked; ?> /> Từ 2 - 3tr
                    <br/>
                    <input type="checkbox" name="price[]" value="4" <?php echo $price4_checked; ?> /> Trên 3tr
                    <br/>
                </div>
                <div class="form-group">
                    <input type="submit" name="filter" value="Filter" class="btn btn-primary"/>
                    <a href="danh-sach-san-pham.html" class="btn btn-default">Xóa filter</a>
                </div>
            </form>
        </div>
        <div class="main-right col-md-9 col-sm-9 col-xs-12">
            <!-- <h1 style="text-align: center">Danh sách sản phẩm</h1> -->
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
                                 alt="<?php echo $product['title'] ?>"/>
                            <span class="shop-title">
                        <?php echo $product['title'] ?>
                    </span>
                        </a>
                        <span class="shop-price">
                            <?php echo number_format($product['price']) ?>
                </span>

                        <span data-id="<?php echo $product['id'] ?>" class="add-to-cart">
                        <a href="<?php echo $product_cart_add ?>" style="color: inherit">Thêm vào giỏ</a>
                    </span>
                    </div>
                <?php endforeach; ?>

                <!-- <?php echo $pagination; ?> -->
              </div>
          <?php endif; ?>
        </div>
    </div>

</div>
<div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Sản phẩm nổi bật</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top Sneaker</button>
                            <button data-filter=".best-seller">Best Sneaker</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list" style="position: relative; height: 365.013px;">
                <div class="col-lg-3 col-md-6 special-grid best-seller" style="position: absolute; left: 0px; top: 0px;">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="assets/images/sneaker/nike/nike1.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Air Jodan 1</h4>
                            <h5> $150.9</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured" style="position: absolute; left: 285px; top: 0px;">
                    <div class="products-single fix">
                        <div class="box-img-hover"> 
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="assets/images/sneaker/vans/vans3.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Vans Classic Slip-On</h4>
                            <h5> $210.5</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured" style="position: absolute; left: 570px; top: 0px;">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="assets/images/sneaker/converse/cv2.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Converse 1970s</h4>
                            <h5> $120.9</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller" style="position: absolute; left: 855px; top: 0px;">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="assets/images/sneaker/adidas/adidas3.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Yeezy 700 V2 Static</h4>
                            <h5> $125.3</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

