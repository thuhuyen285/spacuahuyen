
<style>
	label{
          color: #8da2b7 !important;
          font-weight:bold;

	}
    textarea{
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
         outline:none;
    }
</style> 
    <!-- start with the real content -->
	  <div id="real">
      <!-- start content here -->
      <div class="wrap">
      	<section class="app-content">
      		<div class="row">
      			<div class="col-md-12">
      					<h4 class="m-b-lg"> Sửa bài viết</h4>
                        <form method="post" class="p-5 border" action="?ctrl=dienthoai&act=update">
                        <div class="form-group ">
                                <label for="exampleInputUsername">Tiêu đề </label>
                                <input type="text" value="<?=$row['tieude']?>" class="form-control" id="exampleInputUsername" name="tieude"  >
                            </div>
                            <div class="form-group">
                                <label for="editor1">Nội dung</label>
                                <textarea type="text" class="form-control-file" id="editor1" name="noidung"  ><?=$row['noidung']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Hình ảnh</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="urlHinh" value="<?=$row['urlHinh']?>" >
                            </div>
                            <div class="form-group">
                                <label for="editor1">Mô tả</label>
                                <textarea type="text" class="form-control-file" id="editor1" name="MoTa"  ><?=$row['MoTa']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="editor1">Ngày tạo</label>
                                <input type="date" class="form-control-file" id="exampleFormControlFile1" name="ngaytao" value="<?=$row['ngaytao']?>"  >
                            </div>
                            <div class="form-group">
                            <select class="form-control" name="idNSX" placeholder="Mã NSX"> 
                                <option value="" >Nhà sản xuất</option>
                                <?php  foreach($list as $value) {?>
                                <option value="<?=$value['idNSX']?>" <?php if($value['idNSX']==$row['idNSX']) echo 'selected'; else echo'';?>><?=$value['TenNSX']?></option>	
                                <?php } ?>
                            </select> <br>
                            </div>
                           
                            <input type="hidden" name="idDT" value="<?=$row['idDT']?>">
                            <button type="submit" class="btn btn-primary" name="nutsave" > SỬA SẢN PHẨM </button>
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