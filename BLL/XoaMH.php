<?php
require_once('../config.php');
require_once('../DAL/MatHang.php');
$dbMH = new MatHang();
// Xử lý
if (!isset($_GET['maMH'])) {
	header("Location: " . MY_URL);
	die;
}

if (count($dbMH->getMH($_GET['maMH'])) < 1) {
	$result = "Không tìm thấy mặt hàng cần xóa. Hãy kiểm tra lại.";
} else {
	$mh = $dbMH->getMH($_GET['maMH'])[0];
}

if (isset($_POST['btnXoaMH'])) {
	if ($dbMH->deleteMH($_GET['maMH']) !== NULL) {
		header("Location: " . MY_URL);
		die;
	} else {
		$result = "Đã xảy ra lỗi trong quá trình xóa loại mặt hàng.";
	}
}
// Load GUI
require_once('../GUI/XoaMH.php');