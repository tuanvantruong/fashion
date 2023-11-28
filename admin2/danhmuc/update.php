<?php
 if(is_array($danhmuc)){
    extract($danhmuc);
 }
?>
<div class="row">
            <div class="row header">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="form_content">
                <form action="index.php?act=updatedm" method="post">
                    <p class="ma">Mã loại</p>
                    <input type="text" name="maloai" disabled >
                    <p class="ma">Tên loại</p>
                    <input type="text" name="tenloai" value="<?php if(isset($name) && ($name != "")) echo $name;?>">
                    <div class="submit">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id;?>">
                        <input type="submit" name = "capnhat" value="Cập nhật" name="">
                        <input type="reset" value="Nhập lại" name="">
                        <a href="index.php?act=listdm">
                            <input type="button" value="Danh sách" name="">
                        </a>
                    </div>
                    <?php
                        if(isset($thongbao) && ($thongbao != "")){
                             echo $thongbao;

                        }
                    ?>
                </form>
            </div>
</div>