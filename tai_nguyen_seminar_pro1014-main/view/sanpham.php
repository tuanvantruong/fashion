     <!-- END HEADER -->
     <main class="catalog  mb ">

    <div class="boxleft">
      <div class="  mb">
   
                <div class="box_title">SẢN PHẨM </div>
                <div class="box_content">
                <?php
                $i=1;
                     foreach($dssp as $sp){
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh=$img_path.$img;
                        if(($i==2)||($i==5)||($i==8)||($i==12)){
                           $mr="";
                        }else{
                           $mr="mr";
                        }
         
                        echo '<div  class="box_items '.$mr.'">
                         <div class="row img"><a herf="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                        <p>'.$price.'</p>
                        <a href="'.$linksp.'">'.$name.'</a>
                      </div>';
                      $i+=1;
                     }
                    ?>
             </div>
            </div>
              
           
            </div>            
    
          
         
      </main>