<ul>	
		<li>Bảo hành: <?php echo number_format($abc['Guarantee']). ' tháng' ?></li>
    	<li>Wireless: <?php 
			if($abc['Wireless'] == false){
				echo 'Không hỗ trợ';
			}else{
				echo 'Có';
			}
			?>			
		</li>
		<li>Kiểu tai nghe: <?php 
			if($abc['Type'] == null){
				echo 'Thông thường ';
			}else{
				echo $abc['Type'];
			}
			?>			
		</li>
		<li>Đèn Led: <?php 
			if($abc['Led'] == false){
				echo 'Không hỗ trợ';
			}else{
				echo 'Có';
			}
			?>			
		</li>
		<li>Màu sắc: <?php 
			if($abc['Color'] == null){
				echo 'Đang cập nhật';
			}else{
				echo $abc['Color'];
			}
			?>			
		</li>
		<li>Microphone: <?php 
			if($abc['Microphone'] == false){
				echo 'Không hỗ trợ';
			}else{
				echo 'Có';
			}
			?>			
		</li>
	</ul>
