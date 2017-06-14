<?php
require_once('../config.php');
require_once('../DAL/LoaiMH.php');
$dbLMH = new LoaiMH();
require_once('../DAL/MatHang.php');
$dbMH = new MatHang();
// Xử lý
$listLMH = $dbLMH->getLoaiMH();

if(isset($_POST['btnThemMH'])) {
	if (!empty($_POST['MaMH']) && !empty($_POST['TenMH']) && !empty($_POST['DonGia']) && !empty($_POST['MaLMH'])) {
		// Check MaLMH
		if (count($dbMH->getMH($_POST['MaMH'])) > 0) {
			$result = "Không thể thêm vì mã mặt hàng đã tồn tại. Hãy kiểm tra lại.";
		} else {
			if ($dbMH->insertMH($_POST['MaMH'],$_POST['TenMH'],$_POST['DonGia'],$_POST['MaLMH']) !== NULL) {
				header("Location: " . MY_URL);
			} else {
				$result = "Đã xảy ra lỗi trong quá trình thêm mặt hàng.";
			}
		}
	} else {
		$result = "Vui lòng nhập đầy đủ thông tin.";
	}
}

// Load GUI
require_once('../GUI/ThemMH.php');