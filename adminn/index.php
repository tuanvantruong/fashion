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
                    $sql="INSERT into loai(ten_loai) values ('$tenloai')";
                    pdo_execute($sql);      
                //   insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
               
                include "danhmuc/add.php";
                break;


            case 'listdm':
                $sql="select * from loai order by ten_loai";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
                break;

            case 'xoadm':
                if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){
                    $sql="DELETE FROM loai WHERE ma_loai =".$_GET['ma_loai'];
                    pdo_execute($sql);
                }
                
                $sql="select * from loai order by ten_loai";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
                break;


                case 'suadm':
                if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){ 
                    $sql="SELECT * from loai where ma_loai=".$_GET['ma_loai'];
                    $danhmuc=pdo_query_one($sql);
                }    
                    include "danhmuc/update.php";
                    break;


                case 'updatedm':
                    if(isset($_POST['capnhat']) && $_POST['capnhat']){
                        $tenloai = $_POST['tenloai'];
                        $maloai = $_POST['maloai']; 
                        $sql="UPDATE loai set ten_loai ='".$tenloai."' WHERE ma_loai=".$maloai;
                        pdo_execute($sql);      
                        $thongbao = "Cập nhật thành công";
                    }

                $sql="select * from loai order by ten_loai";
                $listdanhmuc=pdo_query($sql);
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
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham();
                    include "sanpham/list.php";
                    break;
                    case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){ 
                        $danhmuc=loadone_sanpham($_GET['id']);   
                        }    
                        include "sanpham/update.php";
                        break;
                    case 'updatesp':
                    if(isset($_POST['capnhat']) && $_POST['capnhat']){
                        $tenloai = $_POST['tenloai'];
                        $id = $_POST['id'];
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