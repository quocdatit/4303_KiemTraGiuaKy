<?php
class MatHang {
	
	protected $connection;

	function __construct() {
		global $connection;
		$this->connection = $connection;
	}

	function getMH($maMH = '') {
		if ($maMH=='') {
			$sql = "SELECT * FROM THIGK.MATHANG";
		} else {
			$sql = "SELECT * FROM THIGK.MATHANG WHERE MAMH='".$maMH."'";
		}
		
		$arr = array();
		$stmt = db2_prepare($this->connection, $sql);
		if ($stmt) {
			$result = db2_execute($stmt);
			if ($result) {
				while ($row = db2_fetch_assoc($stmt)) {
					$arr[] = $row;
				}
			}
		}
		return $arr;
	}

	function insertMH($maMH, $tenMH, $donGia, $maLMH) {
		$sql = "INSERT INTO THIGK.MATHANG VALUES ('".$maMH."','".$tenMH."',".$donGia.",'".$maLMH."')";
		return db2_exec($this->connection, $sql);
	}

	function updateMH($maMH, $tenMH, $donGia, $maLMH) {
		$sql = "UPDATE THIGK.MATHANG SET TENMH='".$tenMH."',DONGIA=".$donGia.",MALMH='".$maLMH."' WHERE MAMH='".$maMH."'";
		return db2_exec($this->connection, $sql);
	}

	function deleteMH($maMH) {
		$sql = "DELETE FROM THIGK.MATHANG WHERE MAMH='".$maMH."'";
		return db2_exec($this->connection, $sql);
	}
}