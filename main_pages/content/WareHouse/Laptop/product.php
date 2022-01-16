	<ul>
		<li>Bảo hành: <?php echo number_format($abc['Guarantee']). ' tháng' ?></li>
    	<li>CPU: <?php echo $abc['CPU'] ?></li>
    	<li>RAM: <?php echo $abc['RAM'] ?></li>
		<li>Ổ cứng: <?php echo $abc['ROM'] ?></li>
		<li>Card đồ họa: <?php echo $abc['VGA'] ?></li>
		<li>Màn hình: <?php echo $abc['Screen'] ?></li>
		<li>Bàn phím: <?php 
			if($abc['Keyboard'] == null){
				echo 'Thông thường';
			}else{
				echo $abc['Keyboard'];
			}
			?>			
		</li>
		<li>Audio: <?php 
			if($abc['Audio'] == null){
				echo 'Thông thường';
			}else{
				echo $abc['Audio'];
			}
			?>			
		</li>
		<li>Chuẩn LAN: <?php 
			if($abc['LAN'] == null){
				echo 'Thông thường';
			}else{
				echo $abc['LAN'];
			}
			?>			
		</li>
		<li>Bluetooth: <?php 
			if($abc['Wireless'] == null){
				echo 'Không hỗ trợ';
			}else{
				echo $abc['Wireless'];
			}
			?>			
		</li>
		<li>Webcam: <?php 
			if($abc['Webcam'] == false){
				echo 'Không hỗ trợ';
			}else{
				echo 'Có';
			}
			?>			
		</li>
		<li>Cổng giao tiếp: <?php 
			if($abc['Gate'] == null){
				echo 'Thông thuờng';
			}else{
				echo $abc['Gate'];
			}
			?>			
		</li>
		<li>Hệ điều hành: <?php echo $abc['OS'] ?></li>
		<li>Pin: <?php echo number_format($abc['Battery']). ' Cell' ?></li>
		<li>Trọng lượng: <?php echo number_format($abc['Weight']). ' kg' ?></li>
		<li>Kích thước: <?php echo $abc['Size'] ?></li>
		<li>Màu sắc: <?php 
			if($abc['Color'] == null){
				echo 'Đang cập nhật';
			}else{
				echo $abc['Color'];
			}
			?>			
		</li>
		<li>Bảo mật: <?php 
			if($abc['Security'] == null){
				echo 'Không hỗ trợ';
			}else{
				echo $abc['Security'];
			}
			?>			
		</li>
	</ul>
