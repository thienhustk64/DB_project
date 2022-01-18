<ul>
    	<li>Wireless: <?php 
			if($abc['Wireless'] == false){
				echo 'Không hỗ trợ';
			}else{
				echo 'Có';
			}
			?>			
		</li>
		<li>Độ nhạy: <?php echo $abc['DPI'] . ' DPI'?></li>
		<li>IPS: <?php echo $abc['Led'] . ' IPS' ?></li>
		<li>Màu sắc: <?php 
			if($abc['Color'] == null){
				echo 'Đang cập nhật';
			}else{
				echo $abc['Color'];
			}
			?>			
		</li>
		<li>Kích thước: <?php echo $abc['Size']?></li>
		<li>Trọng lượng: <?php echo number_format($abc['Weight']) . ' gram'?></li>
		<li>Đèn Led: <?php 
			if($abc['Led'] == null){
				echo 'Không hỗ trợ';
			}else{
				echo $abc['Led'];
			}
			?>			
		</li>
	</ul>
