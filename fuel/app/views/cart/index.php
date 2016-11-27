<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Search Products</h2>
                    <form action="">
                        <input type="text" placeholder="Search products...">
                        <input type="submit" value="Search">
                    </form>
                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Products</h2>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>                             
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>                             
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>                             
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>                             
                    </div>
                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Recent Posts</h2>
                    <ul>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">Delete</th>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach ($cart as $item): ?>

                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a title="Remove this item" class="remove" href="http://project.dev/cart/delete/<?php echo $item->id ?>">×</a> 
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="http://project.dev/product/<?php echo "$item->product_id" ?>">
                                                <?php echo Asset::img('product-thumb-2.jpg',array('class' => "shop_thumbnail","width" => "145", "height" => "145" )) ?>
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="single-product.html"><?php echo "$item->product_id" ?></a> 
                                        </td>

                                        <td class="product-price">
                                            <span class="amount">£15.00</span> 
                                        </td>

                                        <td class="product-quantity">
                                            <div class="quantity buttons_added">
                                                <input type="button" class="minus" value="-">
                                                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                                <input type="button" class="plus" value="+">
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="amount">£15.00</span> 
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                <tr>
                                    <td class="actions" colspan="6">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label>
                                            <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                            <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                        </div>
                                        <input type="submit" value="Update Cart" name="update_cart" class="button">
                                        <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

                    <div class="cart-collaterals">


                        <div class="cross-sells">
                            <h2>You may be interested in...</h2>
                            <ul class="products">
                                <li class="product">
                                    <a href="single-product.html">
                                        <?php echo Asset::img('product-2.jpg',array('class' => "attachment-shop_catalog wp-post-image","width" => "325", "height" => "325" )) ?>

                                        <h3>Ship Your Idea</h3>
                                        <span class="price"><span class="amount">£20.00</span></span>
                                    </a>

                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                </li>

                                <li class="product">
                                    <a href="single-product.html">
                                      <?php echo Asset::img('product-4.jpg',array('class' => "attachment-shop_catalog wp-post-image","width" => "325", "height" => "325" )) ?>
                                      <h3>Ship Your Idea</h3>
                                      <span class="price"><span class="amount">£20.00</span></span>
                                  </a>

                                  <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                              </li>
                          </ul>
                      </div>


                      <div class="cart_totals ">
                        <h2>Cart Totals</h2>

                        <table cellspacing="0">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal</th>
                                    <td><span class="amount">£15.00</span></td>
                                </tr>

                                <tr class="shipping">
                                    <th>Shipping and Handling</th>
                                    <td>Free Shipping</td>
                                </tr>

                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">£15.00</span></strong> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <form method="post" action="#" class="shipping_calculator">
                        <h2><a class="shipping-calculator-button" data-toggle="collapse" href="#calcalute-shipping-wrap" aria-expanded="false" aria-controls="calcalute-shipping-wrap">Calculate Shipping</a></h2>

                        <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">

                            <p class="form-row form-row-wide">
                                <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">
                                    <option>Hà Nội</option>
                                    <option>TP Hồ Chí Minh</option>
                                    <option>An Giang</option>
                                    <option>Bà Rịa - Vũng Tàu</option>
                                    <option>Bạc Liêu</option>
                                    <option>Bắc Kạn</option>
                                    <option>Bắc Giang</option>
                                    <option>Bắc Ninh</option>
                                    <option>Bến Tre</option>
                                    <option>Bình Dương</option>
                                    <option>Bình Định</option>
                                    <option>Bình Phước</option>
                                    <option>Bình Thuận</option>
                                    <option>Cà Mau</option>
                                    <option>Cao Bằng</option>
                                    <option>Cần Thơ</option>
                                    <option>Đà Nẵng</option>
                                    <option>Đắk Lắk</option>
                                    <option>Đắk Nông</option>
                                    <option>Đồng Nai</option>
                                    <option>Đồng Tháp</option>
                                    <option>Điện Biên</option>
                                    <option>Gia Lai</option>
                                    <option>Hà Giang</option>
                                    <option>Hà Nam</option>
                                    <option>Hà Tĩnh</option>
                                    <option>Hải Dương</option>
                                    <option>Hải Phòng</option>
                                    <option>Hòa Bình</option>
                                    <option>Hậu Giang</option>
                                    <option>Hưng Yên</option>
                                    <option>TP Hồ Chí Minh</option>
                                    <option>Khánh Hòa</option>
                                    <option>Kiên Giang</option>
                                    <option>Kon Tum</option>
                                    <option>Lai Châu</option>
                                    <option>Lào Cai</option>
                                    <option>Lạng Sơn</option>
                                    <option>Lâm Đồng</option>
                                    <option>Long An</option>
                                    <option>Nam Định</option>
                                    <option>Nghệ An</option>
                                    <option>Ninh Bình</option>
                                    <option>Ninh Thuận</option>
                                    <option>Phú Thọ</option>
                                    <option>Phú Yên</option>
                                    <option>Quảng Bình</option>
                                    <option>Quảng Nam</option>
                                    <option>Quảng Ngãi</option>
                                    <option>Quảng Ninh</option>
                                    <option>Quảng Trị</option>
                                    <option>Sóc Trăng</option>
                                    <option>Sơn La</option>
                                    <option>Tây Ninh</option>
                                    <option>Thái Bình</option>
                                    <option>Thái Nguyên</option>
                                    <option>Thanh Hóa</option>
                                    <option>Thừa Thiên - Huế</option>
                                    <option>Tiền Giang</option>
                                    <option>Trà Vinh</option>
                                    <option>Tuyên Quang</option>
                                    <option>Vĩnh Long</option>
                                    <option>Vĩnh Phúc</option>
                                    <option>Yên Bái</option>
                                </select>
                            </p>
                            <select>
                                <option>Quận Ba Đình</option>
                                <option>Quận Hoàn Kiếm</option>
                                <option>Quận Hai Bà Trưng</option>
                                <option>Quận Đống Đa</option>
                                <option>Quận Tây Hồ</option>
                                <option>Quận Cầu Giấy</option>
                                <option>Quận Thanh Xuân</option>
                                <option>Quận Hoàng Mai</option>
                                <option>Quận Long Biên</option>
                                <option>Quận Bắc Từ Liêm</option>
                                <option>Huyện Thanh Trì</option>
                                <option>Huyện Gia Lâm</option>
                                <option>Huyện Đông Anh</option>
                                <option>Huyện Sóc Sơn</option>
                                <option>Quận Hà Đông</option>
                                <option>Thị xã Sơn Tây</option>
                                <option>Huyện Ba Vì</option>
                                <option>Huyện Phúc Thọ</option>
                                <option>Huyện Thạch Thất</option>
                                <option>Huyện Quốc Oai</option>
                                <option>Huyện Chương Mỹ</option>
                                <option>Huyện Đan Phượng</option>
                                <option>Huyện Hoài Đức</option>
                                <option>Huyện Thanh Oai</option>
                                <option>Huyện Mỹ Đức</option>
                                <option>Huyện ứng Hoà</option>
                                <option>Huyện Thường Tín</option>
                                <option>Huyện Phú Xuyên</option>
                                <option>Huyện Mê Linh</option>
                                <option>Quận Nam Từ Liêm</option>
                            </section>

                            <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / Zip" value="" class="input-text"></p>


                            <p><button class="button" value="1" name="calc_shipping" type="submit">Update Totals</button></p>

                        </select>>
                    </form>


                </div>
            </div>                        
        </div>                    
    </div>
</div>
</div>
</div>




