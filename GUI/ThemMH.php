<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thêm mặt khàng | DB2</title>
	<?php require_once('partials/css.php') ?>
</head>
<body>
	<?php require_once('partials/header.php') ?>

	<div class="container">
		<div class="row">
			<h3>THÊM MẶT HÀNG</h3>
		</div>
		<form method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-xs-6">
					<div class="form-group">
						<label>Mã MH</label>
						<input type="text" class="form-control" name="MaMH" placeholder="Mã MH" value="<?php echo ((isset($_POST['MaMH'])) ? $_POST['MaMH'] : ''); ?>">
					</div>
					<div class="form-group">
						<label>Tên MH</label>
						<input type="text" class="form-control" name="TenMH" placeholder="Tên MH" value="<?php echo ((isset($_POST['TenMH'])) ? $_POST['TenMH'] : ''); ?>">
					</div>
					<div class="form-group">
						<label>Đơn giá</label>
						<input type="text" class="form-control" name="DonGia" placeholder="Đơn giá" value="<?php echo ((isset($_POST['DonGia'])) ? $_POST['DonGia'] : ''); ?>">
					</div>
					<div class="form-group">
						<label>Loại MH</label>
						<select name="MaLMH" class="form-control select2" style="width: 100%;">
						<?php foreach ($listLMH as $lmh): ?>
							<option value="<?php echo $lmh['MALMH']; ?>" <?php echo ((isset($_POST['MaLMH']) && $_POST['MaLMH']==$lmh['MALMH']) ? 'selected' : ''); ?>><?php echo $lmh['TENLMH']; ?></option>
						<?php endforeach ?>
						</select>
					</div>
					
					<?php if (isset($result)) echo '<p class="text-danger">'.$result.'</p>'; ?>

					<div class="form-group">
						<button type="submit" class="btn btn-success" name="btnThemMH">Thêm</button>
						<a href="<?php echo MY_URL; ?>" class="btn btn-default">Hủy bỏ</a>
					</div>
				</div>
			</div>
		</form>
	</div>
	<?php require_once('partials/js.php') ?>
</body>
</html>


<!-- <div class="form-group">
						<label>Radio</label>
						<div class="radio-group">
							<label>
								<input type="radio" name="nameRadio" class="minimal-blue icheck" value="1" checked> Lựa chọn 1
							</label>
							<label style="padding-left: 40px;">
								<input type="radio" name="nameRadio" class="minimal-blue icheck" value="0"> Lựa chọn 2
							</label>
						</div>
					</div>
					<div class="form-group">
						<label>Chọn ngày</label>
						<input type="text" class="form-control" name="Ngay" id="dpic-ngsinh">
					</div>
					<div class="form-group">
						<label>Select</label>
						<select name="MaCD" class="form-control select2" style="width: 100%;">
							<option selected="selected" value="">Chọn</option>
							<option value="1">Lựa chọn 1</option>
							<option value="2">Lựa chọn 2</option>
						</select>
					</div> -->