<?php
	class ABC {
		// Biến
		public $name;
		// Phương Thức - Lấy 1 cái tên bên ngoài gán vào thuộc tính
		public function set__name($ten) {
			// Để truy cập được name thì ta sữ dụng từ khóa this
			$this -> name = $ten;
		}
		// Phương Thức - Đổ kết quả ra ngoài
		public function get__name() {
			return $this->name;
		}
	}
	// Khởi tạo đối tượng
	$a = new ABC;
	// Để có thễ sử dụng được phương thức
	$a -> set__name("Ku Đức");
	// Hiển thị ra màn hình
	// echo $a -> get__name();
?>