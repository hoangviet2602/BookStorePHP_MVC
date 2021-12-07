<!-- pages-title-start -->

<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Đơn hàng của bạn</h2>
				
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- cart content section start -->
<div class="pages-title-text text-center">
</div>
<section class="pages cart-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="table-responsive padding60">
					<table class="wishlist-table text-center" id="dxd">
						<thead>
							<tr>
								<th>STT</th>
								<th>Ngày đặt</th>
								<th>Tổng tiền</th>						
                                <th>Số điện thoại liên hệ</th>
								<th>Trạng thái</th>
							
							</tr>
						</thead>
						<tbody>
                        <?php foreach ($data as $row) { ?>
                            <tr>
                                <td><?= $row['orderid'] ?></td>
                                <td><?= $row['timestamp'] ?></td>
                                <td><?= number_format($row['totalmoney']) ?>VNĐ</td>
                                <td>
                                <?= $row['phone']?> </td>
                                
                                <td><?php if($row['orderstatus']==0){
                                    echo 'Chưa xét duyệt';
                                }elseif($row['orderstatus']==1){
                                    echo 'Đã xét duyệt';
                                }else{
                                echo 'Đã từ chối';
                                }
                                ?></td>
                                
                            </tr>
    <?php } ?>
							
						</tbody>
						
					</table>
					
  						
					  
					
			
			</div>
		</div>
	
	</div>
</section>
<!-- cart content section end -->