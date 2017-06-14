<?php
require_once('../config.php');
require_once('../DAL/LoaiMH.php');
$dbLMH = new LoaiMH();
// Xử lý
if (!isset($_GET['maLMH'])) {
	header("Location: " . MY_URL);
	die;
}

if (count($dbLMH->getLoaiMH($_GET['maLMH'])) < 1) {
	$result = "Không tìm thấy loại mặt hàng cần xóa. Hãy kiểm tra lại.";
} else {
	$lmh = $dbLMH->getLoaiMH($_GET['maLMH'])[0];
}

if (isset($_POST['btnCapNhatLMH'])) {
	if (!empty($_POST['MaLMH']) && !empty($_POST['TenLMH'])) {
		if ($dbLMH->updateLMH($_POST['MaLMH'],$_POST['TenLMH'])) {
			header("Location: " . MY_URL);
			die;
		} else {
			$result = "Đã có lỗi xảy ra trong quá trình cập nhật loại mặt hàng.";
		}
	} else {
		$result = "Vui lòng nhập đầy đủ thông tin.";
	}
}

// Load GUI
require_once('../GUI/SuaLMH.php');