<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Greenwire</title>
	<link rel="stylesheet" href="assets/libs/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/global.css">
	<link rel="stylesheet" href="assets/css/favorite_strains.css">
</head>
<body>
	<?php include 'elements/header.php'; ?>
	<article>
		<section class="section-profile">
			<div class="container">
				<div class="row">
					<div class="col"></div>
					<div class="col">
						<div class="box-upload d-flex align-items-center">
							<img src="assets/images/profile-demo.png" alt="profile image">
							<div class="box-btn d-flex align-items-center">
								<div class="choose-btn d-flex align-items-center justify-content-center">เลือกรูป</div>
								<div class="box-text">
									<p>ขนาดไฟล์: สูงสุด 1 MB</p>
									<p>ไฟล์ที่รองรับ: .JPEG, .PNG</p>
								</div>
								<input type="file" name="profile" id="profile">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<?php include 'elements/profile_menu.php'; ?>
					</div>
					<div class="col col-content">
						<h1>Favorite strains</h1>
					</div>
				</div>
			</div>
		</section>
	</article>
	<?php include 'elements/footer.php'; ?>
	<script src="assets/js/favorite_strains.js"></script>
</body>
</html>