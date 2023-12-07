  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center">
    <div class="container">
      <section class="banner-detail">
        <h1 class="banner-title">Thủ tục thanh toán</h1>
        <div class="bread-crumb mt-30">
          <ul>
            <li><a href="index.php">Trang chủ</a>/</li>
            <li><a href="index.php?act=bill">Giỏ hàng</a>/</li>
            <li><span>Thủ tục thanh toán</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- BANNER END --> 
  
  <!-- CONTAIN START -->
  <section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="checkout-step mb-40">
            <ul>
              <li> <a href="index.php?act=bill">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">1</div>
                </div>
                <span>Thông tin giao hàng</span> </a> </li>
              <li class="active"> <a href="index.php?act=payment">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">2</div>
                </div>
                <span>Phương thức thanh toán</span> </a> </li>
              <li> <a href="index.php?act=order-complete">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">3</div>
                </div>
                <span>Thanh toán thành công</span> </a> </li>
              <li>
                <div class="step">
                  <div class="line"></div>
                </div>
              </li>
            </ul>
            <hr>
          </div>
          <div class="checkout-content">
            <div class="row">
              <div class="col-xs-12">
                <div class="heading-part align-center">
                  <h2 class="heading">Lựa chọn phương thức thanh toán</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
                <div class="payment-option-box mb-30">
                  <div class="payment-option-box-inner gray-bg">
                    <div class="payment-top-box">
                      <div class="radio-box left-side"> <span>
                        <input type="radio" id="paypal" value="paypal" name="payment_type">
                        </span>
                        <label for="paypal">VNPay</label>
                      </div>
                      <div class="paypal-box">
                        <div class="paypal-top"> <img src="images/paypal-img.png" alt="Honour"> </div>
                        <div class="paypal-img"> <img src="images/payment-method.png" alt="Honour"> </div>
                      </div>
                    </div>
                    <p>Nếu bạn không có Tài khoản VNPay thì cũng không thành vấn đề. Bạn cũng có thể thanh toán qua MOMO bằng thẻ tín dụng hoặc thẻ ghi nợ ngân hàng</p>
                    <p>Chỉ có thể thanh toán bằng VNĐ.</p>
                  </div>
                </div>
                <div class="payment-option-box mb-30">
                  <div class="payment-option-box-inner gray-bg">
                    <div class="payment-top-box">
                      <div class="radio-box left-side"> <span>
                        <input type="radio" id="cash" value="cash" name="payment_type">
                        </span>
                        <label for="cash">Bạn có muốn thanh toán bằng tiền mặt khi giao hàng không?</label>
                      </div>
                    </div>
                    <p>Bạn có thể thanh toán khi nhận được hàng.</p>
                  </div>
                </div>
                <div class="right-side float-none-xs"> <a class="btn btn-black" href="index.php?act=order-complete">Đặt hàng<span><i class="fa fa-angle-right"></i></span></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 