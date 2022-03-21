<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Greenwire</title>
	<link rel="stylesheet" href="assets/libs/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/global.css">
	<link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
	<?php include 'elements/header.php'; ?>
	<article>
		<section class="section-register">
			<div class="container">
				<div class="row">
					<div class="col col-group">
						<div class="row">
							<div class="col-md-6">
								<h1>สมัครสมาชิก</h1>
								<p>เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-6">
								<div class="choose-image">
									<img src="assets/images/avatar.svg" alt="avatar">
									<div class="choose-image-group">
										<div class="choose-btn">เลือกรูป</div>
										<p>ขนาดไฟล์: สูงสุด 1 MB</p>
										<p>ไฟล์ที่รองรับ: .JPEG, .PNG</p>
										<input type="file" name="profile" id="profile">
									</div>
								</div>
							</div>
							<div class="col-md-6"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</article>
	<?php include 'elements/footer.php'; ?>
	<script src="assets/js/register.js"></script>
</body>
</html>