
<div class="row">
            <div class="row frmtitle">
                <h1> Thống kê </h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                           
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Trung bình</th>
                           
                          
                        </tr>
                        <?php
                            foreach($listthongke as $thongke){
                                extract($thongke);
                                echo '<tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$avgprice.'</td>
                                     </tr>';
                            }
                        ?>
                        
                       
                    
   
                    </table>
                </div>
                <div class="row mb10">
                <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                   
                </div>
            </div>
        </div>