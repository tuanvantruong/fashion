<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$img;
if(is_file($hinhpath)){
    $hinhpath="<img src='".$hinhpath."' width='100px' height='100px'>";
}else{
  $hinhpath="No file img!";
}
?>
    <div class="boxcenter">
    <div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬP SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">

          <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
            <?php
               foreach($listdanhmuc as $key=>$value){
                if($iddm==$value['id']){
                  echo '<option value="'.$value['id'].'" selected>'.$value['name'].'</option>' ;
                }else{
                  echo '<option value="'.$value['id'].'">'.$value['name'].'</option>' ;
                }
              
              }
            ?>
           </select>
           
           </div>
           <div class="row2 mb10">
            <label>Tên sản phẩm: </label> <br>
            <input type="text" name="tensp" value="<?=$name?>">
           </div>
           <div class="row2 mb10">
            <label>Giá: </label> <br>
            <input type="text" name="giasp" value="<?=$price?>">
           </div>
           <div class="row2 mb10">
            <label>Hình ảnh: </label> <br>
            <input type="file" name="hinh" ><br>
            <?php echo $hinhpath ?>
           </div>
           <div class="row2 mb10">
            <label>Mô tả: </label> <br>
           <textarea name="mota" id="" cols="30" rows="10"> <?=$mota?></textarea>
           </div>
           <div class="row2 mb10">
            <label>Số lượng: </label> <br>
            <select name="soluong" id="">
              <option id="1" value="1">1</option>
              <option id="2" value="2">2</option>
              <option id="3" value="3">3</option>
              <option id="4" value="4">4</option>
            </select>
           </div>
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?=$id?>">
         <input class="mr20" name="capnhat" type="submit" value="Cập Nhật">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp">  <input  class="mr20" type="button" value="DANH SÁCH"></a>
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