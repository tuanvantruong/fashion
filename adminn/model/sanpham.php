<?php
    function insert_sanpham($ten_hh,$ngay_nhap,$mo_ta,$so_luot_xem,$hinh,$gia,$ma_loai){
        $sql = "insert into hang_hoa(ten_hh,ngay_nhap,mo_ta,so_luot_xem,hinh,gia,ma_loai) values('$ten_hh,$ngay_nhap,$mo_ta,$so_luot_xem,$hinh,$gia,$ma_loai')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql="delete from hang_hoa where ma_hh=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham(){
        $sql="select * from hang_hoa order by ma_hh desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadone_sanpham($id){
        $sql= "select * from hang_hoa where ma_hh=".$id;
        $danhmuc=pdo_query_one($sql);
        return $danhmuc;
    }
    function update_sanpham($id,$tenloai){
        $sql = "update hang_hoa set name='".$tenloai."' where ma_hh=".$id;
        pdo_execute($sql);
    }
?>