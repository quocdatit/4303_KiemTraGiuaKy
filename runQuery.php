<?php
require('config.php');

function getTypeAction($str) {
	$arr = explode(" ", $str);
	if (strtoupper($arr[0]) == 'CREATE' || strtoupper($arr[0]) == 'DROP') {
		return $arr[0]." ".$arr[1];
	}
	return $arr[0];
}

if (isset($_POST['run-query'])) {
	if (isset($_POST['strCreateTbl']) && !empty($_POST['strCreateTbl'])) {
		$action = strtoupper(getTypeAction($_POST['strCreateTbl']));
		$arr = array();
		if ($action == "SELECT") {
			$stmt = db2_prepare($connection, $_POST['strCreateTbl']);
			if ($stmt) {
				$result = db2_execute($stmt);
				if ($result) {
					while ($row = db2_fetch_assoc($stmt)) {
						$arr[] = $row;
					}
					$result = $arr;
				} else {
					$result = "Error 1: Không thể lấy dữ liệu! Vui lòng kiểm tra lại.";
				}
			} else {
				$result = "Error 2: Dường như câu truy vấn chưa hợp lệ! Vui lòng kiểm tra lại.";
			}
		} else {
			$result = db2_exec($connection, $_POST['strCreateTbl']);
			if ($result != NULL) {
				if ($action == "CREATE TABLE") {
					$result = "Tạo bảng thành công!";
				} elseif ($action == "CREATE SCHEMA") {
					$result = "Tạo schema thành công!";
				} elseif ($action == "DROP TABLE") {
					$result = "Xóa bảng thành công!";
				} elseif ($action == "DROP SCHEMA") {
					$result = "Xóa schema thành công!";
				} elseif ($action == "DELETE") {
					$result = "Xóa dữ liệu thành công!";
				} elseif ($action == "UPDATE") {
					$result = "Cập nhật dữ liệu thành công!";
				} elseif ($action == "INSERT") {
					$result = "Thêm dữ liệu thành công!";
				}
			} else {
				$result = "Error 3: Dường như câu truy vấn chưa hợp lệ! Vui lòng kiểm tra lại.";
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thực hiện truy vấn | DB2</title>
	<?php require_once('GUI/partials/css.php') ?>
</head>
<body>
	<?php require_once('GUI/partials/header.php') ?>
	
	<div class="container">
		<h2>Thực hiện câu truy vấn DB2</h2>
		<form action="runQuery.php" method="POST" accept-charset="utf-8">
			<div class="row">
				<textarea name="strCreateTbl" class="form-control" rows="5"><?php echo ((isset($_POST['strCreateTbl'])) ? $_POST['strCreateTbl'] : "Mẫu: CREATE TABLE schema.tblName();"); ?></textarea>
			</div>
			<div class="row">
				<div class="pull-right" style="margin-top: 20px;">
					<button type="submit" name="run-query" class="btn btn-success">Thực hiện</button>
				</div>
			</div>
		</form>
	<?php if (isset($result)) { ?>
		<h2>Kết quả</h2>
		<pre style="margin-bottom: 50px;">
<?php 
	if (is_array($result)) {
		print_r($result);
	} else {
		echo $result;
	}
?>
		</pre>
	<?php } ?>
	</div>
	<?php require_once('GUI/partials/js.php') ?>
</body>
</html>