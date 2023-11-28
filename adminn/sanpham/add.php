<div class="row">
            <div class="row header">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="form_content">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                   
                    
                    <p class="ma">Mã Sản Phẩm</p>
                    <input type="text" name="ma_hh" placeholder="Auto Number">
                    <p class="ma">Tên Sản Phẩm  </p>
                    <input type="text" name="ten_hh">
                    <p class="ma">Ngày Nhập</p>
                    <input type="date" name="ngay_nhap">
                    <p class="ma">Giá  </p>
                    <input type="text" name="gia">
                    <p class="ma">Hình ảnh </p>
                    <input type="file" name="hinh">
                    <p class="ma">Số Lượt Xem</p>
                    <input type="text" name="so_luot_xem">
                    <br>
                    <p class="ma">Mô tả </p> <br><br><br><br>       
                    <textarea name="mo_ta"  cols="30" rows="10"></textarea> <br><br>
                    Danh Mục 
                    <select name="ma_loai" id="">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option  value="'.$id.'">'.$ten_loai.'
                            </option>';
                        }
                        ?>
                       <br> 
                    </select>
                    <div class="submit">
                        <input type="submit" name = "themmoi" value="Thêm mới" >
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