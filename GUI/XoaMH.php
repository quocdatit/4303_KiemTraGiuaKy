<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Xóa mặt hàng | DB2</title>
	<?php require_once('partials/css.php') ?>
</head>
<body>
	<?php require_once('partials/header.php') ?>

	<div class="container">
		<div class="row">
			<h3>XÓA MẶT HÀNG</h3>
		</div>
		<form method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-xs-6">
					<?php if (isset($mh)) { ?>
						<p>Bạn có chắc chắn muốn xóa: <?php echo $mh['MAMH']; ?> - <?php echo $mh['TENMH']; ?>?</p>
						<div class="form-group">
							<button type="submit" class="btn btn-danger" name="btnXoaMH">Xóa</button>
							<a href="<?php echo MY_URL; ?>" class="btn btn-default">Hủy bỏ</a>
						</div>
					<?php } elseif (isset($result)) { ?>
						<p><?php echo $result; ?></p>
						<div class="form-group">
							<a href="<?php echo MY_URL; ?>" class="btn btn-default">Trở về</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</form>
	</div>
	<?php require_once('partials/js.php') ?>
</body>
</html>