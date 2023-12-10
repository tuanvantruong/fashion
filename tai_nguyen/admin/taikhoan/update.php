<html>
<head>
    <style>
        .row2 {
            margin: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f8f8f8;
        }

        .font_title {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 20px;
        }

        select,
        input[type='select'] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .mb10 {
            margin-bottom: 10px;
        }

        .mr20 {
            margin-right: 20px;
        }

        .row {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="row2">
        <div class="row2 font_title">
            <h1>CẬP NHẬT TRẠNG THÁI VÀ VAI TRÒ</h1>
        </div>
        <div class="row2 form_content">
            <form action="?act=capnhat_taikhoan&id= <?= $_GET['id']?>" method="post">
                <div class="row2 mb10">
                    <label>Trạng thái: </label> <br>
                    <select name="trangthai" id="trangthaiDropdown">
                    <option disabled selected>Lựa chọn</option>
                        <option value="0">Mở tài khoản</option>
                        <option value="1">Khóa tài khoản</option>
                    </select>
                </div>
                <div class="row2 mb10">
                    <label>Vai trò: </label> <br>
                    <select name="vaitro" id="vaitroDropdown">
                    <option disabled selected>Lựa chọn</option>
                        <option value="0">Khách hàng</option>
                        <option value="1">Admin</option>
                    </select>
                </div>
                <div class="row mb10 ">
                    <input class="mr20" name="capnhat" type="submit" value="Cập Nhật">
                    <input class="mr20" type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=dskh">  <input class="mr20" type="button" value="DANH SÁCH"></a>
                </div>
                <?php if(isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>
            </form>
        </div>
    </div>
</body>
</html>
