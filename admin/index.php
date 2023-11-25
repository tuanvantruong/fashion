<?php
    include "./model/pdo.php";
    include_once "header.php";

    // Controller

    if(isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                // Kiểm tra xem người có click vào nut add hay không 
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $tenloai = $_POST['tenloai'];
                    $sql = "insert into danhmuc(name_danhmuc) value ('$tenloai')";
                    pdo_execute($sql);
                    $thongbao = "Thêm thành công";
                }
               
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $sql="SELECT * FROM danhmuc order by name";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
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