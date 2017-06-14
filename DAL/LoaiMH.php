<?php
class LoaiMH {
	
	protected $connection;

	function __construct() {
		global $connection;
		$this->connection = $connection;
	}

	function getLoaiMH($maLMH = '') {
		if ($maLMH=='') {
			$sql = "SELECT * FROM THIGK.LoaiMH";
		} else {
			$sql = "SELECT * FROM THIGK.LoaiMH WHERE MALMH='".$maLMH."'";
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

	function insertLMH($maLMH, $tenLMH) {
		$sql = "INSERT INTO THIGK.LOAIMH VALUES ('".$maLMH."', '".$tenLMH."')";
		return db2_exec($this->connection, $sql);
	}

	function updateLMH($maLMH, $tenLMH) {
		$sql = "UPDATE THIGK.LOAIMH SET TENLMH='".$tenLMH."' WHERE MALMH='".$maLMH."'";
		return db2_exec($this->connection, $sql);
	}

	function deleteLMH($maLMH) {
		$sql = "DELETE FROM THIGK.LOAIMH WHERE MALMH='".$maLMH."'";
		return db2_exec($this->connection, $sql);
	}
}