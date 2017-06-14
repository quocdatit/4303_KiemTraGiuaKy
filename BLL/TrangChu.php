<?php
require_once('../config.php');
require_once('../DAL/LoaiMH.php');
$dbLMH = new LoaiMH();
require_once('../DAL/MatHang.php');
$dbMH = new MatHang();
// Xử lý

$listLMH = $dbLMH->getLoaiMH();
$listMH = $dbMH->getMH();
// Load GUI
require_once('../GUI/TrangChu.php');