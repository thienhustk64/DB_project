<ul>
    	<li>Wireless: <?php 
			if($abc['Wireless'] == false){
				echo 'Không hỗ trợ';
			}else{
				echo 'Có';
			}
			?>			
		</li>
		<li>Kiểu Switch: <?php 
			if($abc['Switch'] == null){
				echo 'Thông thường ';
			}else{
				echo $abc['Switch'];
			}
			?>			
		</li>
		<li>Đèn Led: <?php 
			if($abc['Led'] == null){
				echo 'Không hỗ trợ';
			}else{
				echo $abc['Led'];
			}
			?>			
		</li>
		<li>Dạng bàn phím: <?php 
			if($abc['Type'] == null){
				echo 'Thông thường';
			}else{
				echo $abc['Type'];
			}
			?>			
		</li>
		<li>Kích thước: <?php echo $abc['Size']?></li>
	</ul>
