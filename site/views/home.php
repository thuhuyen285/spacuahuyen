    <!-- Noi dung -->
    <div class="container noidung col-11  ">

        <!-- Banner -->
        <div class="banner col-12 ">
            <img width="100%" src="../uploads/banner2.jpg" alt="">
        </div>

        <!-- DỊCH VỤ NỔI BẬT THẨM MỸ -->
        <div class="dichvu ">
            <h2 class="text-center mt-5 "> DỊCH VỤ NỔI BẬT TẠI TRUNG TÂM THẨM MỸ SPA LINH HƯƠNG
            </h2>
            <div class="text-center"><img width="100px" src="views/assets/img/logonho.png" alt=""></div>
            <div class="row ">
                <?php
                        foreach ($getServiceSpecial as $row) {
                            $link = ROOT_URL."/bai-viet/".$row['slug'];
                           echo '<div class="col-sm-4 mt-4  col-md-6 col-lg-4" >
                                    <div class="card carddv">
                                        <div class="card-body text-center">
                                            <a href="'.$link.'"><img src="'.PATH_IMG.$row['urlHinh'].'" width="100%" height="270px" alt=""></a>
                                            <a href="'.$link.'" class="pt-2 text-white font-weight-bold card-text mt-3">'.addslashes($row['tieude']).'</a>
                                        </div>
                                    </div>
                                </div>';
                        }
                    
                    ?>
               
            </div>
        </div>

        <!-- CAM NHAN KHACH HANG -->
        <div class="camnhan mt-5">
            <div class="camnhan ">
                <h2 class="text-center mt-5 "> CẢM NHẬN KHÁCH HÀNG</h2>
                <div class="text-center"><img width="100px" src="views/assets/img/logonho.png" alt=""></div>
                <div class="row">
                <?php
                        foreach ($getCustomerFeel as $row) {
                            $link = ROOT_URL."/bai-viet/".$row['slug'];
                            echo '<div class="col-sm-4 mt-4 col-md-6 col-lg-4">
                                     <div class="card carddv">
                                         <div class="card-body text-center">
                                         <a href="'.$link.'"><img src="'.PATH_IMG.$row['urlHinh'].'" width="100%" height="270px" alt=""></a>
                                             <a href="'.$link.'" class="pt-2 text-white font-weight-bold card-text mt-3">'.addslashes($row['tieude']).'</a>
                                         </div>
                                     </div>
                                 </div>';
                        }
                    
                    ?>
                </div>
            </div>

            <!-- ĐIÊU KHẮC CHÂN MÀY -->
            <div class="dieukhac">
                <h2 class="text-center mt-5 ">DỊCH VỤ ĐIÊU KHẮC CHÂN MÀY</h2>
                <div class="text-center mb-3"><img width="100px" src="views/assets/img/logonho.png" alt=""></div>

                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="card phuntheu p-4">
                            <div class="card-body ">
                                <h5 class="card-title">PHUN THÊU - ĐIÊU KHẮC CHÂN MÀY</h5>
                                <ul>
                                    <li>Phương pháp phun xăm hiện đại nhất 2021 đến từ châu Âu.</li>
                                    <li>Không để lại sẹo hay dấu vết thẩm mỹ trên gương mặt. Màu bột, màu mực được chiết xuất hoàn toàn từ tự nhiên.</li>
                                    <li>Không gây đau đớn, sưng tấy hay khó chịu trong quá trình thực hiện.</li>
                                    <li>Chân mày tự nhiên như thật, mềm mại, sắc nét như thật.</li>
                                    <li>Phun thêu và Điêu Khắc tạo đường nét chính xác cho dáng mày, xuôi theo chiều mắt.</li>
                                    <li>Thời gian thực hiện nhanh chóng, không cần nghỉ dưỡng.</li>
                                    <li>Có thể lựa chọn màu lông mày sao cho phù hợp với làn da, màu tóc, sở thích.</li>
                                    <li>Nhờ công thức pha trộn màu sắc hoàn hảo mà tông màu có sự nhạt dần.</li>
                                    <li>Hiệu ứng chuyển màu một cách tự nhiên giúp dáng mày đẹp nhẹ nhàng và rất tự nhiên.</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 ">
                        <div class="card dieukhacimg">
                            <div class="card-body dieukhacimg ">
                                <img width="100%" height="478px"  src="views/assets/img/dk1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TIN TỨC NỔI BẬT THẨM MỸ  -->
            <div class="dichvu ">
                <h2 class="text-center mt-5 ">
                    TIN TỨC NỔI BẬT TRUNG TÂM THẨM MỸ SPA LINH HƯƠNG
                </h2>
                <div class="text-center"><img width="100px" src="views/assets/img/logonho.png" alt=""></div>
                <div class="row ">
                    <?php
                        foreach ($getNewsSpecial as $row) {
                            $link = ROOT_URL."/bai-viet/".$row['slug'];
                            echo '<div class="col-sm-4 mt-4 col-md-6 col-lg-4">
                                     <div class="card carddv">
                                         <div class="card-body text-center">
                                            <a href="'.$link.'"><img src="'.PATH_IMG.$row['urlHinh'].'" width="100%" height="270px" alt=""></a>
                                             <a href="'.$link.'" class="pt-2 text-white font-weight-bold card-text mt-3">'.addslashes($row['tieude']).'</a>
                                         </div>
                                     </div>
                                 </div>';
                        }
                    
                    ?>
                    
        
                </div>
            </div>

            <!-- ĐỘI NGŨ CHUYÊN VIÊN -->
            <div class="chuyenvien mt-5">
                <h2 class="text-center mt-5 ">
                    ĐỘI NGŨ CHUYÊN VIÊN GIỎI CỨNG TAY NGHỀ
                </h2>
                <div class="text-center"><img width="100px" src="views/assets/img/logonho.png" alt=""></div>

                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="card phuntheu p-2">
                            <div class="card-body ">
                                <p class="card-text doingu">
                                    Lời đầu tiên,<b> Trung Tâm Thẩm Mỹ SPA Linh Hương </b> xin gửi tới Quý khách hàng lời chào trân trọng, lời chúc sức khỏe và lời cảm ơn sâu sắc nhất. Thành lập từ năm 2006, sau hơn 15 năm đứng vững trên thị trường, thẩm mỹ
                                    Linh Hương hiện đã trở thành một trong những thương hiệu thẩm mỹ chăm sóc sắc đẹp hàng đầu, một địa chỉ đáng tin cậy, hội tụ đủ 3 tiêu chí: Công nghệ thẩm mỹ hiện đại, quy tụ đội ngũ bác sĩ thẩm mỹ giỏi, dịch vụ
                                    thẩm mỹ hoàn hảo. Trong suốt thời gian qua, Linh Hương luôn là điểm đến chăm sóc sắc đẹp đáng tin cậy của khách hàng.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card p-0 border-0">
                            <div class="card-body p-0 border-0">
                                <img width="100%" height="300px" src="views/assets/img/doingu2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CƠ SỞ VẬT CHẤT -->
            <div class="coso mt-5">
                <h2 class="text-center mt-5 ">
                    CƠ SỞ VẬT CHẤT SANG TRỌNG, HIỆN ĐẠI
                </h2>
                <div class="text-center"><img width="100px" src="views/assets/img/logonho.png" alt=""></div>
                <p>Các cơ sở vật chất, không gian trong và ngoài phòng khám Trung Tâm Thẩm Mỹ SPA Linh Hương luôn được chú trọng đến từng chi tiết nhỏ, tạo nên sự khác biệt về đăng cấp sang trong. Về trang thiết bị máy móc và công nghệ, Linh Hương sẽ luôn cập nhật
                    những dòng công nghệ mới, tiên tiến nhất nhằm mang lại hiệu quả tốt nhất cho quí Khách hàng. Công dụng và hiệu quả của sản phẩm còn tùy vào cơ địa của mỗi người.</p>
                <h5>► Địa chỉ các chi nhánh Trung Tâm Thẩm Mỹ SPA Linh Hương:</h5>
                <ul class="ml-3">
                    <a><b> ♦ BÌNH DƯƠNG :</b> 37 Nguyễn Văn Tiết - Lái Thiêu- Thuận An - Bình Dương</a> <br>
                    <a><b> ♦ TP.HCM :</b> 666 Đường Hưng Phú- Phường 10- Quận 8- Hồ Chí Minh</a> <br>
                    <a><b> ♦ HẢI PHÒNG :</b> 147 Tổ 1- TT An Dương- Hải Phòng</a>
                </ul>
                <div class="row">
                    <div class="col-sm-3 col-6  p-0 col-md-4 col-lg-3">
                        <div class="card border-0 p-0">
                            <div class="card-body">
                                <img src="views/assets/img/coso1.jpg" width="100%" height="200px" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 p-0 col-md-4 col-lg-3" >
                        <div class="card border-0 p-0">
                            <div class="card-body">
                                <img src="views/assets/img/coso2.jpg" width="100%" height="200px" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 p-0 col-md-4 col-lg-3">
                        <div class="card border-0 p-0">
                            <div class="card-body">
                                <img src="views/assets/img/coso3.jpg" width="100%" height="200px" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 p-0 col-md-4 col-lg-3">
                        <div class="card border-0 p-0">
                            <div class="card-body">
                                <img src="views/assets/img/coso4.jpg" width="100%" height="200px" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 p-0 col-md-4 col-lg-3">
                        <div class="card border-0 p-0">
                            <div class="card-body">
                                <img src="views/assets/img/cs5.jpg" width="100%" height="200px" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 p-0 col-md-4 col-lg-3">
                        <div class="card border-0 p-0">
                            <div class="card-body">
                                <img src="views/assets/img/cs7.jpg" width="100%" height="200px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>