<div class="row mb">
                    <div class="boxtitle">
                        Tài Khoản
                    </div>
                    <div class="boxcontent formdangnhap">

                    <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                     ?>  
                      
                        <?php
                            if($role==1){

                          
                        ?>
                        <li>
                            <a href="admin">Đăng nhập admin</a>
                        </li>
                        <?php }?>
                        <li>
                            <a href="index.php?act=thoat">Thoát</a>
                        </li>
                        </div>

                     <?php
                        }else{
                    ?>

                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                            Tên đăng nhập <br>
                            <input type="text" name="user"> <br>
                        </div>  
                        <div class="row mb10">
                            Mật khẩu <br>
                            <input type="password" name="pass"> <br>
                        </div>
                        <div class="row mb10">
                            <input type="checkbox" name="check">
                            Ghi nhớ tài khoản ?<br>
                        </div>
                        <div class="row mb10">
                            <input type="submit" value="Đăng nhập" name="dangnhap">
                        </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký thành viên</a>
                        </li>
                        <?php }?>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">
                        Danh mục
                    </div>
                    <div class="boxcontent2 menudoc">
                    <ul>
                        <?php
                            foreach($dsdm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li>
                                    <a href="'.$linkdm.'">'.$name.'</a>
                                </li>';
                            }
                        ?> 
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw">
                            <input type="submit" name="tiemkiem" value="Tiềm Kiếm">
                        </form>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">
                        Top 10 Yêu thích
                    </div>
                    <div class="row boxcontent">
                        <?php
                            foreach($dstop10 as $sp){
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp".$id;
                                $img=$img_path.$img;
                                echo '<div class="row m10 top10">
                                <a href="'.$linksp.'"><img src="'.$img.'" alt="">
                                    <a href="'.$linksp.'">'.$name.'</a>
                                      </div>';
                            }
                        ?>
                        
                    </div>
                </div>