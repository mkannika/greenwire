<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Greenwire</title>
	<link rel="stylesheet" href="assets/libs/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/global.css">
	<link rel="stylesheet" href="assets/css/edit_profile.css">
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
						<h1>Edit profile</h1>
						<form action="" method="post">
							<div class="form-group">
								<label for="name">ชื่อจริง</label>
								<input type="text" id="name" name="name">
								<small>ชื่อตามกฎหมายของคุณจำเป็นสำหรับการชำระเงิน</small>
							</div>
							<div class="form-group">
								<label for="username">ชื่อผู้ใช้งาน</label>
								<input type="text" id="username">
								<small>คุณสามารถใช้ข้อมูลนี้เพื่อเข้าสู่ระบบ และร้านค้าจะเห็นข้อมูลนี้เมื่อคุณตรวจสอบ</small>
							</div>
							<div class="form-group">
								<label for="date">วันเกิด</label>
								<input type="date" id="date" name="birthdate">
								<small>สิ่งนี้ช่วยให้เราเข้าใจว่าใครกำลังใช้ Greenwire</small>
							</div>
							<div class="email-verified d-flex align-items-center">
								<img src="assets/images/Email-verified.png" alt="email verified icon">
								Email verified
							</div>
							<div class="form-group">
								<label for="email">อีเมล</label>
								<input type="email" id="email" name="email">
							</div>
							<div class="form-group">
								<label for="phone">เบอร์โทร</label>
								<input type="text" id="phone" name="phone">
								<small>เราจะไม่แชร์สิ่งนี้โดยไม่ได้รับอนุญาตจากคุณ</small>
							</div>
							<h2>Address</h2>
							<div class="form-group">
								<label for="address">จังหวัด, เขตอำเภอ, รหัสไปรษณีย์</label>
								<input type="text" id="address" name="address">
							</div>
							<div class="form-group">
								<label for="address2">รายละเอียดที่อยู่</label>
								<input type="text" id="address2" name="address2">
							</div>
							<div class="form-group btn-group d-flex align-items-center">
								<button type="submit" class="submit-btn d-flex align-items-center justify-content-center">บันทึก</button>
								<button type="reset" class="reset-btn">ยกเลิก</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</article>
	<?php include 'elements/footer.php'; ?>
	<script src="assets/js/edit_profile.js"></script>
</body>
</html>