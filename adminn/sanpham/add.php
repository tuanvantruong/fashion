<div class="row">
            <div class="row header">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="form_content">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <p class="ma">Mã Sản Phẩm</p>
                    <input type="text" name="masp" placeholder="Auto Number">
                    <p class="ma">Tên Sản Phẩm  </p>
                    <input type="text" name="tensp">
                    <p class="ma">Giá  </p>
                    <input type="text" name="giasp">
                    <p class="ma">Hình ảnh </p>
                    <input type="file" name="hinhanh">
                    <p class="ma">Mô tả </p>
                    <textarea name="mota"  cols="30" rows="10"></textarea>
                    <div class="submit">
                        <input type="submit" name = "themmoi" value="Thêm mới" name="">
                        <input type="reset" value="Nhập lại" name="">
                        <a href="index.php?act=listsp">
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