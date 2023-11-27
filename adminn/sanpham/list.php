<div class="row">
            <div class="row header">
                <h1>Danh sách loại hàng</h1>
            </div>
            <div class="form_content">
                <table class="danhsach">
                    <tr>
                        <th></th>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Ngày Nhập</th>
                        <th>Mô Tả</th>
                        <th>Số Lượt Xem</th>
                        <th>Hình Ảnh</th>
                        <th>Giá </th>
                        <th>Mã Loại</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach ($listsanpham as $sanpham) {
                            extract($danhmuc);
                            $suasp="index.php?act=suadm&id=".$id;
                            $xoasp="index.php?act=xoadm&id=".$id;
                            echo '<tr>
                            <td>
                         
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>'.$id.'</td>
                            <td>'.$ten_hh.'</td>
                            <td>'.$ngay_nhap.'</td>
                            <td>'.$mo_ta.'</td>
                            <td>'.$so_luot_xem.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$gia.'</td>
                            <td>'.$ma_loai.'</td>
                            
                            <td>
                            <a href="'.$suasp.'">    <input type="button" value="Sửa"></a>
                            <a href="'.$xoasp.'">    <input type="button" value="Xoá"></a>
    
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
                <a href="index.php?act=addsp">
                    <input type="button" value="Nhập thêm">
                </a>


            </div>
        </div>