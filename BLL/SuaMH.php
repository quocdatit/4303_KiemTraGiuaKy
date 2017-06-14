<?php
require_once('../config.php');
require_once('../DAL/LoaiMH.php');
$dbLMH = new LoaiMH();
require_once('../DAL/MatHang.php');
$dbMH = new MatHang();
// Xử lý
$listLMH = $dbLMH->getLoaiMH();

if (!isset($_GET['maMH'])) {
	header("Location: " . MY_URL);
	die;
}

if (count($dbMH->getMH($_GET['maMH'])) < 1) {
	$result = "Không tìm thấy loại mặt hàng cần xóa. Hãy kiểm tra lại.";
} else {
	$mh = $dbMH->getMH($_GET['maMH'])[0];
}

if (isset($_POST['btnCapNhatMH'])) {
	if (!empty($_POST['MaMH']) && !empty($_POST['TenMH']) && !empty($_POST['DonGia']) && !empty($_POST['MaLMH'])) {
		if ($dbMH->updateMH($_POST['MaMH'],$_POST['TenMH'],$_POST['DonGia'],$_POST['MaLMH']) !== NULL) {
			header("Location: " . MY_URL);
			die;
		} else {
			$result = "Đã có lỗi xảy ra trong quá trình cập nhật mặt hàng.";
		}
	} else {
		$result = "Vui lòng nhập đầy đủ thông tin.";
	}
}

// Load GUI
require_once('../GUI/SuaMH.php');