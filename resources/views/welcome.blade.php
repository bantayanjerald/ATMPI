<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					<!-- parent.window.location="http://122.55.220.157/ATMPI/CustomMenu/list_menu2.php?whiteout=yes&sessionid=123123&customer_login=NO"; -->

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input class="input100" type="text" id="username" name="username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">

					</div>

					<div class="w-full text-center">

					</div>
				</form>

				<div class="login100-more" style="background-image: url({{asset('images/bg-01.jpg')}}"></div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

	function addsession(username,password, callback)
	{

		$.ajax({
			type: "post",
			url: "CustomMenu/Database_Reports/php/login.php",
			data: {"username":username,
				   "password":password,
				   "action":"addsession"
			},
			success: function (response) {
				callback(response);
			}
		});
	}
	// function login(username,password);
	// {
	// 	$.ajax({
	// 		type: "post",
	// 		url: "CustomMenu/Database_Reports/php/login.php",
	// 		data: {"username":username,
	// 			   "password":password,
	// 			   "action":"login",
	// 		},
	// 		success: function (response) {
	// 			alert(response);
	// 			//addsession(username, password);
	// 		}
	// 	});
	// }
	$('.login100-form').submit(function (e) {
		e.preventDefault();
		//alert("asdasd");
		var username = $('#username').val();
		var password = $('#password').val();

		// login(username, password);
		$.ajax({
			type: "post",
			url: "CustomMenu/Database_Reports/php/login.php",
			data: {"username":username,
				   "password":password,
				   "action":"login",
			},
			success: function (response) {
				if(response == "success")
				{
					addsession(username, password, function(data){
						parent.window.location="CustomMenu/list_menu2.php?whiteout=yes&sessionid="+data+"&customer_login=NO";
					});



				}
				else
				{
					alert("Incorrect username or password");
				}



			}
		});
	});



	</script>
<!--===============================================================================================-->
	<script src="{{asset('/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/js/main.js')}}"></script>

</body>
</html>
