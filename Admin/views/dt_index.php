
	  <!-- start with the real content -->
	  <div id="real">
      <!-- start content here -->
      <div class="wrap">
      	<section class="app-content">
      		<div class="row">
      			<div class="col-md-12">
      				<div class="widget p-lg">
      					<h4 class="m-b-lg"> Danh sách sản phẩm</h4>
      					<table class="table table-striped  table-bordered">
							<thead class="">
								<tr style="color:#8da2b7;" class="text-center" >
								<th scope="col" >ID</th>
								<th scope="col">Tiêu đề</th>
								<th scope="col">Nội dung</th>
								<th scope="col">Mô tả</th>
								<th scope="col">Ngày tạo</th>
								<th scope="col">Avt</th>
								<th scope="col">Loại</th>
								<th scope="col" colspan="2" class="text-center">Quản lý</th>
								</tr>
							</thead>
							<tbody>
							<?php
							  $datadm = array("1"=>"Dịch Vụ Nổi Bật","2"=>"Kiến Thức Làm Đẹp","3"=>"Cảm Nhận Khách Hàng","4"=>"Tin Tức Thẩm Mỹ Viện","5"=>"Tin Tức Nổi Bật");
							if ($list==NULL) echo "Chưa có dữ liệu";
							else foreach ($list as $row) {
								$stt+=1;
							?>
								<tr class="border"> 
									<th style="width:30px;" class="text-center" scope="row"><?php echo $stt;?></th>
									<td  style="width:110px;"><?=addslashes(substr($row["tieude"],0,20))?></td>
									<td  style="width:350px;"><?=addslashes(substr($row["noidung"],0,80))?></td>
									<td style="width:220px;"><?=addslashes(substr($row["MoTa"],0,20))?></td>
									<td style="width:90px;"><?=$row["ngaytao"]?></td>
									<td><img src="<?=PATH_IMG.$row["urlHinh"]?>" width="90px" alt=""></td>
									<td style="width:110px;"><?= $datadm[$row["idNSX"]]?></td>
									<td style="width:80px;" class="text-center"><a class="btn btn-dark" href="?ctrl=dienthoai&act=edit&id=<?=$row["idDT"]?>">Sửa</a></td>
									<td style="width:80px;" class="text-center"><a  onclick="return confirm('Bạn có chắc chắn muốn xóa?');" class="btn btn-danger bg-red text-white" href="?ctrl=dienthoai&act=delete&id=<?=$row["idDT"]?>">Xóa</a></td>
								</tr>
							<?php
							}
							?>
							</tbody>
						</table>

						
						<nav style="margin-left:37%;margin-top:20px;" aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item">
								<?=$links?> 
								</a>
								</li>
							<?php for ($i=1; $i <=$totalpages ; $i++) { 
								?>
								<li class='page-item'><a href='<?=$baseurl?>&pagenum=<?=$i?>' class='page-link'> 
								<?php if ($pagenum == $i) {
								echo '<strong style="color: red;">'.$i.'</strong>';
								}
								else{
									echo '<span>'.$i.'</span>';
								}?>
								</a></li>
								<?php
							}?>
								<li class="page-item">
								<?=$link?> 
								</a>
								</li>
							</ul>
						</nav>
						

						</div><!-- .widget -->
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
