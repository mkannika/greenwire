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
						<form action="" class="row justify-content-center">
							<div class="col-md-6">
								<div class="choose-image d-flex align-items-center">
									<img src="assets/images/avatar.svg" alt="avatar">
									<div class="choose-image-group">
										<div class="choose-btn d-flex align-items-center justify-content-center">เลือกรูป</div>
										<p>ขนาดไฟล์: สูงสุด 1 MB</p>
										<p>ไฟล์ที่รองรับ: .JPEG, .PNG</p>
										<input type="file" name="profile" id="profile">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="User name *" class="form-control">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Name *" class="form-control">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Phone number *" class="form-control">
							</div>
							<div class="col-md-6">
								<input type="password" placeholder="Password *" class="form-control">
							</div>
							<div class="col-md-6">
								<input type="email" placeholder="Email *" class="form-control">
							</div>
							<div class="col-md-6">
								<h3>หรือลงทะเบียนด้วย</h3>
								<div class="social-auth d-flex">
									<a href="#" class="social-btn d-flex align-items-center justify-content-center"><img src="assets/images/google.svg" alt="google"></a>
									<a href="#" class="social-btn d-flex align-items-center justify-content-center"><img src="assets/images/facebook.svg" alt="facebook"></a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										รับข้อมูลสิทธิพิเศษ และโปรโมชั่นจากลาซาด้า ผ่านทางอีเมล
									</label>
								</div>
								<button type="submit">สมัครสมาชิก</button>
								<p class="policy-content">โดยการกด "ลงทะเบียน" ข้าพเจ้าตกลงตาม <a href="#">ข้อกำหนดการใช้งาน</a> และ <a href="#">นโยบายความเป็นส่วนตัวของ</a> Greenwire</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<?php include 'elements/welcome.php'; ?>
	</article>
	<?php include 'elements/footer.php'; ?>
	<script src="assets/js/register.js"></script>
</body>
</html>