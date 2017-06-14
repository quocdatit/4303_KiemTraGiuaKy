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

if (isset($_POST['btnXoaLMH'])) {
	if ($dbLMH->deleteLMH($_GET['maLMH']) !== NULL) {
		header("Location: " . MY_URL);
		die;
	} else {
		$result = "Đã xảy ra lỗi trong quá trình xóa loại mặt hàng.";
	}
}
// Load GUI
require_once('../GUI/XoaLMH.php');