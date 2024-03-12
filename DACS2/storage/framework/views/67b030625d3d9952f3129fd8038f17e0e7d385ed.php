
<!DOCTYPE html>
<html>
<!-- Head -->
<head>
<title>login</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo e(('public/frontend/css/popuo-box.css')); ?>" rel="stylesheet" type="text/css" media="all" />
<!-- Style --> 
<link rel="stylesheet" href="<?php echo e(('public/frontend/css/style-login.css')); ?>" type="text/css" media="all">
<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>
<!-- //Head -->
<body background="<?php echo e(('public/frontend/images/account/b2.jpg')); ?>">
	<h1></h1>
	<div class="w3layoutscontaineragileits">
	<h2>Đăng nhập</h2>
		<form action="<?php echo e(URL::to('login-customer')); ?>" method="post">
			<?php echo e(csrf_field()); ?>

			<input type="email" Name="email_account" placeholder="EMAIL" required="">
			<input type="password" Name="password_account" placeholder="Mật khẩu" required="">
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Nhớ mật khẩu</label>
					<a href="#">Quên mật khẩu?</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="LOGIN">
				<p> Tạo tài khoản mới <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Đăng ký </a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	<!-- for register popup -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<h3>Đăng Ký</h3>
				<form action="<?php echo e(URL::to('/add-customer')); ?>" method="post">
					<?php echo e(csrf_field()); ?>

						<div class="form-sub-w3ls">
							<input placeholder="Nhập tên của bạn" name="customer_name" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Nhập địa chỉ email" class="mail" name="customer_email" type="email" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Nhập số điện thoại" name="customer_phone" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Nhập mật khẩu" name="customer_password" type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Nhập lại mật khẩu" name="customer_password" type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Tôi đồng ý với các điều khoản</label>
					</div>
					<div class="submit-w3l">
						<input type="submit" value="Đăng ký">
					</div>
				</form>
			</div>
		</div>	
	</div>
	<script src="<?php echo e(('public/frontend/js/jquery-2.1.4.min.js')); ?>"></script>
	<script src="<?php echo e(('public/frontend/js/jquery.magnific-popup.js')); ?>"></script>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\DACS2\resources\views/pages/checkout/login_checkout.blade.php ENDPATH**/ ?>