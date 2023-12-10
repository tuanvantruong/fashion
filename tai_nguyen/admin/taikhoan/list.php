<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }
        td {
            color: #666;
        }
        /* Các phần tử nút */
        input[type="button"] {
            padding: 15px 30px;
            border: none;
            background-color: black ;
            color: white;
            cursor: pointer;
            border-radius: 3px;
        }
        input[type="button"]:hover {
            background-color: #b9a06f;
        }
    </style>
<div class="boxcenter">
        <div class="row2">
         <div class="row2 font_title">
          <h1>Danh sách khách hàng</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>MÃ TK</th>
                <th>TÊN ĐĂNG NHẬP</th>
                <th>MẬT KHẨU</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>ĐIỆN THOẠI</th> 
                <th>VAI TRÒ</th> 
                <th>TRẠNG THÁI</th>
                <th >THAO TÁC</th>
               
                
            </tr>
            <?php 
            foreach($listtaikhoan as $taikhoan){
                extract($taikhoan);
                $update_taikhoan="index.php?act=capnhat_taikhoan&id=".$id;
                // Hiển thị vai trò của khách hàng với admin
                if($role == 0){
                    $vaitro = "Khách hàng";
                }else{
                    $vaitro = "Admin";

                }
                // Hiện thị trạng thái tài khoản
                if($trang_thai == 0){
                    $tt = "Tk đang kích hoạt";
                }else{
                    $tt = "Tk đã bị khóa";

                }
             
             echo ' <tr>
             <td><input type="checkbox" name="" id=""></td>
             <td>'.$id.'</td>
             <td>'.$user.'</td>
             <td>'.$pass.'</td>
             <td>'.$email.'</td>
             <td>'.$address.'</td>
             <td>'.$tel.'</td>
             <td>'.$vaitro.'</td>
         
             <td>'.$tt.'</td>
             <td>
             <a href="'.$update_taikhoan.'"><input type="button" value="Cập nhật"> </a>
             </td>
         </tr>';
            }
            ?>
           
           
           </table>
           </div>
          </form>
         </div>
        </div>
      

       
    </div>
    
</body>
</html>