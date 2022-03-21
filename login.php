<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Greenwire</title>
	<link rel="stylesheet" href="assets/libs/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/global.css">
	<link rel="stylesheet" href="assets/css/login.css">
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
								<h1>เข้าสู่ระบบ</h1>
								<p>เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
							</div>
						</div>
						<form action="" class="row justify-content-center">
							<div class="col-md-6">
								<input type="text" placeholder="User name / email" class="form-control">
								<input type="text" placeholder="Password" class="form-control">
							</div>
							<div class="col-md-6">
								<h3>หรือเข้าสู่ระบบด้วย</h3>
								<div class="social-auth d-flex">
									<a href="#" class="social-btn d-flex align-items-center justify-content-center"><img src="assets/images/google.svg" alt="google"></a>
									<a href="#" class="social-btn d-flex align-items-center justify-content-center"><img src="assets/images/facebook.svg" alt="facebook"></a>
								</div>
								<button type="submit">เข้าสู่ระบบ</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<?php include 'elements/welcome.php'; ?>
	</article>
	<?php include 'elements/footer.php'; ?>
</body>
</html>