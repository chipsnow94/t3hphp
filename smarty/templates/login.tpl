<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>ĐĂNG NHẬP</h2>
					<form action="#" method="post">
					  <input type="text" name="Username" placeholder="Username" required>
					  <input type="password" name="Password" placeholder="Password" required>
					  <input type="submit" value="Login" name="btnLogin">
					</form>
				  </div>
				  <div class="form">
					<h2>ĐĂNG KÝ MỚI</h2>
					<form action="#" method="post">
					  <input type="text" name="Username" placeholder="Username" required>
					  <input type="password" name="Password" placeholder="Password" required>
					  <input type="email" name="Email" placeholder="Email Address" required>
					  <input type="text" name="Phone_number" placeholder="Phone Number" required>
					  <input type="submit" value="Register" name="btnRegister">
					</form>
				  </div>
				  <div class="cta"><a href="#">QUÊN MẬT KHẨU
				    <input type="text" name="Phone_number" placeholder="Phone Number" required>
				  </a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>