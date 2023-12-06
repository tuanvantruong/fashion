  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center">
    <div class="container">
      <section class="banner-detail">
        <h1 class="banner-title">Giỏ hàng</h1>
        <div class="bread-crumb mt-30">
          <ul>
            <li><a href="index.php">Trang chủ</a>/</li>
            <li><span>Giỏ hàng</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- BANNER END --> 
  
  <!-- CONTAIN START -->
  <section class="ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 mb-xs-30">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="table">
                
                <?php
                echo' <div class="col-sm-6">
                <div class="mt-30"> <a href="index.php" class="btn btn-black"><span><i class="fa fa-angle-left"></i></span>Continue Shopping</a> </div>
              </div>
             ';
                viewcart(1);
                ?>
                <!-- <tbody>
                  <tr>
                    <td><a href="product-page.html">
                      <div class="product-image"><img alt="Honour" src="images/1.jpg"></div>
                      </a></td>
                    <td><div class="product-title"> <a href="product-page.html">Cross Colours Camo Print Tank half mengo</a> </div></td>
                    <td><ul>
                        <li>
                          <div class="base-price price-box"> <span class="price">$80.00</span> </div>
                        </li>
                      </ul></td>
                    <td><div class="input-box">
                        <select data-id="100" class="quantity_cart" name="quantity_cart">
                          <option selected="" value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div></td>
                    <td><div class="total-price price-box"> <span class="price">$80.00</span> </div></td>
                    <td><i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i></td>
                  </tr>
                </tbody> -->
              </table>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <div class="mt-30">
        <div class="row">
          <div class="col-xs-12">
            <div class="right-side float-none-xs"> <a href="index.php?act=bill" class="btn btn-black">Tiến hành thanh toán<span><i class="fa fa-angle-right"></i></span></a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 