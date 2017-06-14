<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sửa loại mặt hàng | DB2</title>
	<?php require_once('partials/css.php') ?>
</head>
<body>
	<?php require_once('partials/header.php') ?>

	<div class="container">
		<div class="row">
			<h3>SỬA LOẠI MẶT HÀNG</h3>
		</div>
		
		<?php if (!isset($lmh) && isset($result)) { ?>
			<div class="row">
				<p><?php echo $result; ?></p>
				<div class="form-group">
					<a href="<?php echo MY_URL; ?>" class="btn btn-default">Trở về</a>
				</div>
			</div>
		<?php } elseif (isset($lmh)) { ?>
			<form method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label>Mã LMH</label>
							<input type="text" class="form-control" name="MaLMH" placeholder="Mã LMH" value="<?php echo ((isset($_POST['MaLMH'])) ? $_POST['MaLMH'] : $lmh['MALMH']); ?>" readonly>
						</div>
						<div class="form-group">
							<label>Tên LMH</label>
							<input type="text" class="form-control" name="TenLMH" placeholder="Tên LMH" value="<?php echo ((isset($_POST['TenLMH'])) ? $_POST['TenLMH'] : $lmh['TENLMH']); ?>">
						</div>
						<?php if (isset($result)) { ?>
							<p class="text-danger"><?php echo $result; ?></p>
						<?php } ?>
						<div class="form-group">
							<button type="submit" class="btn btn-info" name="btnCapNhatLMH">Cập nhật</button>
							<a href="<?php echo MY_URL; ?>" class="btn btn-default">Hủy bỏ</a>
						</div>
					</div>
				</div>
			</form>
		<?php } ?>
	</div>
	<?php require_once('partials/js.php') ?>
</body>
</html>