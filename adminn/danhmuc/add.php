    
<div class="row">
            <div class="row header">
                <h1>Thêm mới loại hàng hóa</h1>
            </div>
            <div class="form_content">
                <form action="index.php?act=adddm" method="post">
                    <p class="ma">Mã loại</p>
                    <input type="text" name="maloai" placeholder="Auto Number">
                    <p class="ma">Tên loại</p>
                    <input type="text" name="tenloai">
                    <div class="submit">
                        <input type="submit" name = "themmoi" value="Thêm mới" name="">
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

