<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sửa mặt hàng | DB2</title>
	<?php require_once('partials/css.php') ?>
</head>
<body>
	<?php require_once('partials/header.php') ?>

	<div class="container">
		<div class="row">
			<h3>SỬA MẶT HÀNG</h3>
		</div>
		
		<?php if (!isset($mh) && isset($result)) { ?>
			<div class="row">
				<p><?php echo $result; ?></p>
				<div class="form-group">
					<a href="<?php echo MY_URL; ?>" class="btn btn-default">Trở về</a>
				</div>
			</div>
		<?php } elseif (isset($mh)) { ?>
			<form method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label>Mã MH</label>
							<input type="text" class="form-control" name="MaMH" placeholder="Mã MH" value="<?php echo ((isset($_POST['MaMH'])) ? $_POST['MaMH'] : $mh['MAMH']); ?>" readonly>
						</div>
						<div class="form-group">
							<label>Tên MH</label>
							<input type="text" class="form-control" name="TenMH" placeholder="Tên MH" value="<?php echo ((isset($_POST['TenMH'])) ? $_POST['TenMH'] : $mh['TENMH']); ?>">
						</div>
						<div class="form-group">
							<label>Đơn giá</label>
							<input type="text" class="form-control" name="DonGia" placeholder="Đơn giá" value="<?php echo ((isset($_POST['DonGia'])) ? $_POST['DonGia'] : $mh['DONGIA']); ?>">
						</div>
						<div class="form-group">
							<label>Loại MH</label>
							<select name="MaLMH" class="form-control select2" style="width: 100%;">
							<?php foreach ($listLMH as $lmh): ?>
								<option value="<?php echo $lmh['MALMH']; ?>" <?php echo (($mh['MALMH']==$lmh['MALMH']) ? 'selected' : ''); ?>><?php echo $lmh['TENLMH']; ?></option>
							<?php endforeach ?>
							</select>
						</div>
						<?php if (isset($result)) { ?>
							<p class="text-danger"><?php echo $result; ?></p>
						<?php } ?>
						<div class="form-group">
							<button type="submit" class="btn btn-info" name="btnCapNhatMH">Cập nhật</button>
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