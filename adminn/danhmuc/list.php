<div class="row">
            <div class="row header">
                <h1>Danh sách loại hàng</h1>
            </div>
            <div class="form_content">
                <table class="danhsach">
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);  
                            $xoadm="index.php?act=xoadm&ma_loai=".$ma_loai;
                            $suadm="index.php?act=suadm&ma_loai=".$ma_loai;
                            
                            echo '<tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>'.$ma_loai.'</td>
                            <td>'.$ten_loai.'</td>
                            <td>
                            <a href="'.$xoadm.'"><input type="button" value="Xoá"></a>
                            <a href="'.$suadm.'"><input type="button" value="Sửa"></a>

                            </td>
                        </tr>';

                        }

                    ?>
                    
                </table>
            </div>

            <div class="button">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=adddm">
                    <input type="button" value="Nhập thêm">
                </a>


            </div>
        </div>