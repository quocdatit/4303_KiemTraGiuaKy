<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang chủ | DB2</title>
	<?php require_once('partials/css.php') ?>
</head>
<body>
	<?php require_once('partials/header.php') ?>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3>DANH SÁCH MẶT HÀNG</h3>
				<p><a href="<?php echo MY_URL; ?>/BLL/ThemMH.php" class="btn btn-success">Thêm mặt hàng</a></p>
			</div>
			<div class="col-xs-12">
				<table class="table table-bordered">
					<tr class="text-success">
						<th class="text-center">STT</th>
						<th class="text-center">Mã mặt hàng</th>
						<th class="text-center">Tên mặt hàng</th>
						<th class="text-center">Đơn giá</th>
						<th class="text-center">Loại mặt hàng</th>
						<th class="text-center">Chức năng</th>
					</tr>

				<?php foreach ($listMH as $i => $item) { ?>
					<tr>
						<td class="text-center"><?php echo $i + 1; ?></td>
						<td class="text-center"><?php echo $item['MAMH']; ?></td>
						<td class="text-center"><?php echo $item['TENMH']; ?></td>
						<td class="text-center"><?php echo $item['DONGIA']; ?></td>
						<td class="text-center"><?php echo $dbLMH->getLoaiMH($item['MALMH'])[0]['TENLMH']; ?></td>
						<td class="text-center">
							<a href="<?php echo MY_URL; ?>/BLL/SuaMH.php?maMH=<?php echo $item['MAMH']; ?>" class="btn btn-warning btn-sm">Sửa</a>
							<a href="<?php echo MY_URL; ?>/BLL/XoaMH.php?maMH=<?php echo $item['MAMH']; ?>" class="btn btn-danger btn-sm">Xóa</a>
						</td>
					</tr>
				<?php } ?>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<h3>DANH SÁCH LOẠI MẶT HÀNG</h3>
				<p><a href="<?php echo MY_URL; ?>/BLL/ThemLMH.php" class="btn btn-success">Thêm loại mặt hàng</a></p>
			</div>
			<div class="col-xs-12">
				<table class="table table-bordered">
					<tr class="text-success">
						<th class="text-center">STT</th>
						<th class="text-center">Mã loại mặt hàng</th>
						<th class="text-center">Tên loại mặt hàng</th>
						<th class="text-center">Chức năng</th>
					</tr>

				<?php foreach ($listLMH as $i => $item) { ?>
					<tr>
						<td class="text-center"><?php echo $i + 1; ?></td>
						<td class="text-center"><?php echo $item['MALMH']; ?></td>
						<td class="text-center"><?php echo $item['TENLMH']; ?></td>
						<td class="text-center">
							<a href="<?php echo MY_URL; ?>/BLL/SuaLMH.php?maLMH=<?php echo $item['MALMH']; ?>" class="btn btn-warning btn-sm">Sửa</a>
							<a href="<?php echo MY_URL; ?>/BLL/XoaLMH.php?maLMH=<?php echo $item['MALMH']; ?>" class="btn btn-danger btn-sm">Xóa</a>
						</td>
					</tr>
				<?php } ?>
				</table>
			</div>
		</div>
	</div>

	<?php require_once('partials/js.php') ?>
</body>
</html>