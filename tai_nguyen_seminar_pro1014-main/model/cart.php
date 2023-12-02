<?php
function viewcart($del){
    global $img_path;
    $tong=0;
                $i=0;
                foreach($_SESSION['mycart'] as $cart){
                    $hinh=$img_path.$cart[2];
                    $ttien=$cart[3] * $cart[4];
                    $tong+=$ttien;
                    if($del==1){
                        $xoasp_th='<th>Action</th>';
                        $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><i title="Remove Item From Cart"  class="fa fa-trash cart-remove-item" ></i></a></td>';    
                    }else{
                        $xoasp_th='';
                        $xoasp_td='';
                    }
                  
                    echo '
                    <thead>
                    <tr>
                      <th>Product</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Sub Total</th>
                      '.$xoasp_th.'
                    </tr>
                  </thead>
                     <tbody>
                    <tr>
                      <td><a href="product-page.html">
                        <div class="product-image"><img alt="Honour" src="'.$hinh.'"></div>
                        </a></td>
                      <td><div class="product-title"> <a href="product-page.html">'.$cart[1].'</a> </div></td>
                      <td><ul>
                          <li>
                            <div class="base-price price-box"> <span class="price">'.$cart[3].'</span> </div>
                          </li>
                        </ul></td>
                      <td><div class="input-box">
                          <select data-id="100" class="quantity_cart" name="quantity_cart">
                            <option selected="" value="1">'.$cart[4].'</option>
                            <option selected="" value="1">'.$cart[4].'</option>
                            <option selected="" value="1">'.$cart[4].'</option>
                            <option selected="" value="1">'.$cart[4].'</option>
                           
                          </select>
                        </div></td>
                      <td><div class="total-price price-box"> <span class="price">'.$ttien.'</span> </div></td>
                      '.$xoasp_td.'
                    </tr>
                  </tbody> ';
                  $i+=1;
                }
                   echo '<div class="mb-30">
                   <div class="row">
                    
                   </div>
                 </div>
                 <hr>
                 <div class="mtb-30">
                   <div class="row">
                     <div class="col-sm-6">
                       <div class="cart-total-table commun-table">
                         <div class="table-responsive">
                           <table class="table">
                             <thead>
                               <tr>
                                 <th colspan="2">Cart Total</th>
                               </tr>
                             </thead>
                             <tbody>
                               <tr>
                                 <td>Item(s) Subtotal</td>
                                 <td><div class="price-box"> <span class="price">'.$tong.'</span> </div></td>
                               </tr>
                               <tr>
                                 <td>Shipping</td>
                                 <td><div class="price-box"> <span class="price">$0.00</span> </div></td>
                               </tr>
                               <tr>
                                 <td><b>Amount Payable</b></td>
                                 <td><div class="price-box"> <span class="price"><b>'.$tong.'</b></span> </div></td>
                               </tr>
                             </tbody>
                           </table>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>';
}
?>