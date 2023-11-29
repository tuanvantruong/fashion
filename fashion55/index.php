<?php
include "view/header.php";
if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act= $_GET['act']; 
    switch(act){
        case "product-page":
            include "view/product-page.php";
            break;
        case "about"
            include "view/about.php";
            break;
        case "account"
            include "view/account.php";
            break;
        case "blog"
            include "view/blog.php";
            break;
        case "cart"
            include "view/cart.php";
            break;
        case "checkout"
            include "view/checkout.php";
            break;
        case "contact"
            include "view/contact.php";
            break;
        case "login"
            include "view/login.php";
            break;
        case "order-complete"
            include "view/order-complete.php";
            break;
        case "order-overview"
            include "view/order-overview.php";
            break;
        case "payment"
            include "view/payment.php";
            break;
        case "register"
            include "view/register.php";
            break;
        case "shop-list"
            include "view/shop-list.php";
            break;
        case "shop"
            include "view/shop.php";
            break;
        case "single-blog"
            include "view/single-blog.php";
            break;
    } 
}else{
include "view/home.php";
}
include "view/footer.php";
?>
  
  
  
  
  
  