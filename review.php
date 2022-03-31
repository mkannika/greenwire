<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Greenwire</title>
	<link rel="stylesheet" href="assets/libs/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/global.css">
	<link rel="stylesheet" href="assets/css/review.css">
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
						<h1>Reviews</h1>
						<div class="box-review">
							<div class="title d-flex align-items-center justify-content-between">
								<h3>Wedding Cake</h3>
								<time>September 11, 2017</time>
							</div>
							<div class="comment">
								<p>เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum และล่าสุดกว่านั้น คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง Aldus PageMaker ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย</p>
								<div class="text-end">
									<p class="helpful text-start">1072 people found this helpful</p>
									<a href="#">Read full review</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</article>
	<?php include 'elements/footer.php'; ?>
	<script src="assets/js/favorite_strains.js"></script>
</body>
</html>