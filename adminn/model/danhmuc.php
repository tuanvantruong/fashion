<?php
    function insert_danhmuc($tenloai){
        $sql = "insert into loai(ten_loai) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql="delete from loai where ma_loai=".$id;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql="select * from loai order by id desc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql= "select * from loai where ma_loai=".$id;
        $danhmuc=pdo_query_one($sql);
        return $danhmuc;
    }
    function update_danhmuc($id,$tenloai){
        $sql = "update loai set name='".$tenloai."' where ma_loai=".$id;
        pdo_execute($sql);
    }
?>