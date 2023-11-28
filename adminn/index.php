<?php
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "header.php";
 // Controller

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                // Kiểm tra xem người có click vào nut add hay không 
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $tenloai = $_POST['tenloai'];
                  insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
               
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){
                    delete_danhmuc($_GET['ma_loai']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                case 'suadm':
                if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){ 
                    $danhmuc=loadone_danhmuc($_GET['ma_loai']);   
                    }    
                    include "danhmuc/update.php";
                    break;
                case 'updatedm':
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $tenloai = $_POST['ten_loai'];
                    $id = $_POST['ma_loai'];
                    update_danhmuc($id,$tenloai);
                    $thongbao= "Cập nhật thành công";
                }    
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                /*controler cho sản phẩm */



                case 'addsp':
                    // Kiểm tra xem người có click vào nut add hay không 
                    if(isset($_POST['themmoi']) && $_POST['themmoi']){ 
                        $ten_hh = $_POST['ten_hh'];
                        $ngay_nhap = $_POST['ngay_nhap'];
                        $mo_ta = $_POST['mo_ta'];
                        $so_luot_xem = $_POST['so_luot_xem'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir="upload/";
                        $target_file=$target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                        }else{}
                        $gia=$_POST['gia'];
                        $ma_loai = $_POST['ma_loai'];
                      insert_sanpham($ten_hh,$ngay_nhap,$mo_ta,$so_luot_xem,$hinh,$gia,$ma_loai);
                        $thongbao = "Thêm thành công";
                    }
                   $listdanhmuc=loadall_danhmuc();
                    include "sanpham/add.php";
                    break;
                case 'listsp':
                    $listsanpham=loadall_sanpham();
                    include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if(isset($_GET['ma_hh'])&&($_GET['ma_hh']>0)){
                        delete_sanpham($_GET['ma_hh']);
                    }
                    $listsanpham=loadall_sanpham();
                    include "sanpham/list.php";
                    break;
                    case 'suasp':
                    if(isset($_GET['ma_hh'])&&($_GET['ma_hh']>0)){ 
                        $danhmuc=loadone_sanpham($_GET['ma_hh']);   
                        }    
                        include "sanpham/update.php";
                        break;
                    case 'updatesp':
                    if(isset($_POST['capnhat']) && $_POST['capnhat']){
                        $tenloai = $_POST['ten_hh'];
                        $id = $_POST['ma_hh'];
                        update_sanpham($id,$tenloai);
                        $thongbao= "Cập nhật thành công";
                    }    
                    $listsanpham=loadall_sanpham();
                    include "sanpham/list.php";
                    break;
                default:
                include_once "home.php";
             break;

        }
    }else {
        include_once "home.php";
    }

    include_once "footer.php";

?>