<?php
require_once('../config.php');
require_once('../DAL/LoaiMH.php');
$dbLMH = new LoaiMH();
// Xử lý
if(isset($_POST['btnThemLMH'])) {
	if (!empty($_POST['MaLMH']) && !empty($_POST['TenLMH'])) {
		// Check MaLMH
		if (count($dbLMH->getLoaiMH($_POST['MaLMH'])) > 0) {
			$result = "Không thể thêm vì mã loại mặt hàng đã tồn tại. Hãy kiểm tra lại.";
		} else {
			if ($dbLMH->insertLMH($_POST['MaLMH'],$_POST['TenLMH']) !== NULL) {
				header("Location: " . MY_URL);
			} else {
				$result = "Đã xảy ra lỗi trong quá trình thêm loại mặt hàng.";
			}
		}
	} else {
		$result = "Vui lòng nhập đầy đủ thông tin.";
	}
}

// Load GUI
require_once('../GUI/ThemLMH.php');