<?php
if(is_array($dm)){
    extract($dm);
}
?>
<body>
    <div class="boxcenter">
    <div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatedm" method="POST">
           <div class="row2 mb10 form_content_container">
           <label> Mã loại </label> <br>
            <input type="text" name="maloai" >
           </div>
           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
           </div>
           <div class="row mb10 ">
             <!-- bởi khi dữ liệu đc gửi đến controler nên cần input:hidden để lưu trữ id  -->
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
         <input class="mr20" name="capnhat" type="submit" value="Cập nhật">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=suadm">  <input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
           
            ?>
          </form>
         </div>
        </div>
        </div>
       
</body>
</html>