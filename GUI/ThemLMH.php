<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thêm loại mặt khàng | DB2</title>
	<?php require_once('partials/css.php') ?>
</head>
<body>
	<?php require_once('partials/header.php') ?>

	<div class="container">
		<div class="row">
			<h3>THÊM LOẠI MẶT HÀNG</h3>
		</div>
		<form method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-xs-6">
					<div class="form-group">
						<label>Mã LMH</label>
						<input type="text" class="form-control" name="MaLMH" placeholder="Mã LMH" value="<?php echo ((isset($_POST['MaLMH'])) ? $_POST['MaLMH'] : ''); ?>">
					</div>
					<div class="form-group">
						<label>Tên LMH</label>
						<input type="text" class="form-control" name="TenLMH" placeholder="Tên LMH" value="<?php echo ((isset($_POST['TenLMH'])) ? $_POST['TenLMH'] : ''); ?>">
					</div>
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

					<?php if (isset($result)) echo '<p class="text-danger">'.$result.'</p>'; ?>

					<div class="form-group">
						<button type="submit" class="btn btn-success" name="btnThemLMH">Thêm</button>
						<a href="<?php echo MY_URL; ?>" class="btn btn-default">Hủy bỏ</a>
					</div>
				</div>
			</div>
		</form>
	</div>
	<?php require_once('partials/js.php') ?>
</body>
</html>