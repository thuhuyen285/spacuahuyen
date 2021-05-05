<style>
	label{
          color: #8da2b7 !important;
          font-weight:bold;
	}
</style> 
    <!-- start with the real content -->
	  <div id="real">
      <!-- start content here -->
      <div class="wrap">
      	<section class="app-content">
      		<div class="row">

      			<div class="col-md-12">
      					<h4 class="m-b-lg"> Thêm bài viết </h4>
                        <form method="post" class="p-5 border" action="?ctrl=dienthoai&act=store">
                            <div class="form-group ">
                                <label for="exampleInputUsername">Tiêu đề</label>
                                <input type="text" class="form-control" id="exampleInputUsername" name="tieude" placeholder="Tiêu đề" required>
                            </div>
                            <div class="form-group">
                                <label for="editor1">Nội dung</label>
                                <textarea type="text" class="form-control-file" id="editor1" name="noidung" type="text" placeholder="Nội dung" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Hình ảnh</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="urlHinh" required >
                            </div>
                            <div class="form-group">
                                <label for="editor1">Mô tả</label>
                                <textarea type="text" class="form-control-file" id="editor1" name="MoTa" placeholder="Mô tả" ></textarea>
                            </div>
                     
                            <div class="form-group">
                                <label for="exampleForm">Chọn loại</label>
                                <select class="form-control" name="idNSX" placeholder="Mã NSX" required>    
                                    <?php 
                            					  $datadm = array("1"=>"Dịch Vụ Nổi Bật","2"=>"Kiến Thức Làm Đẹp","3"=>"Cảm Nhận Khách Hàng","4"=>"Tin Tức Thẩm Mỹ Viện","5"=>"Tin Tức Nổi Bật");
        
                                    ?>
                                    <?php
                                    foreach ($datadm as $key => $value) {
                                       echo '<option value='.$key.'>'.$value.'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="nutsave" > THÊM BÀI VIẾT </button>
                        </form>
      			</div><!-- END column -->
      		</div><!-- .row -->
      	</section><!-- #dash-content -->
      </div><!-- .wrap -->
      <!-- end content -->
    </div>
    <!-- end the real content -->
  </div>
  <!-- end content -->
</section>
<!-- end admin -->
<script src="../lib/ckeditor/ckeditor.js"></script> 
<script src="views/js/ckeditor.js"></script>