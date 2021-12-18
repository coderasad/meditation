<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Meditation ') }} - Signin</title>
	<!------- FONTS ------->
	<link rel="stylesheet" href="{{ asset('') }}asset/frontend/fonts/fonts.css">
	<!----- CSS HERE ----->
	<link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/style.css" />
	<link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/reuseble-code.css" />
	<link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/responsive.css" />
</head>

<body>

	<main>

		<section class="fixed-height">
			<div class="container-fluid px-sm-0">
				<div class="row g-5">
					<div class="col-xl-5 col-lg-6 order-2 order-sm-1">
						<div class="sign-img p-relative vh-100">
							<img src="{{ asset('') }}asset/frontend/images/reg.png" alt="Sign In" class="d-block img sign-img-main">
						</div>
					</div>
					<div class="col-xl-7 col-lg-6 d-flex align-items-lg-center align-items-xl-center p-relative order-1 order-sm-2 s-column">
						<a href="{{ url('') }}" class="ps-700 c86 s16 back-link d-flex align-items-lg-center">
							<img src="{{ asset('') }}asset/frontend/svg-icon/arrow_back.svg" alt="arrow_back"> <span>Back</span></a>
						<div class="sign-content mx-auto">
							<h2 class="ps-700 c00 s42 tc my-5">Log In</h2>
							<form action="javascript:void(0)">
								<div class="sign-form">
									<label for="email" class="c69 ps-400 s16">
										Your email
									</label>
									<input type="email" id="email" placeholder="Your email" class="s14 c869 w-100">
								</div>
								<div class="sign-form">
									<label for="passwd" class="c69 ps-400 s16">
										Choose a password
									</label>
									<div class="d-flex align-items-center pass-form">
										<input type="password" id="passwd" class="s14 c869 w-100" id="myInput" placeholder="•••••••••">
										<img src="{{ asset('') }}asset/frontend/images/show-hide.png" alt="show-hide" onclick="showPwd('passwd', this)" class="showpwd">
									</div>
								</div>
								<div class="sign-btn sign-form mt-5">
									<input type="submit" value="Sign In" class="submit-button">
								</div>
							</form>
							<div class="tc or-text">
								<p class="ps-400 cba s14 p-relative">Or</p>
							</div>

                            <div class="d-flex justify-content-center mb-5 social-icon">
                                <a href="">
                                    <img class="w-100 h-100" src="{{ asset('') }}asset/frontend/svg-icon/reg-google.svg" alt="google">
                                </a>
                                <a href="">
                                    <img class="w-100 h-100" src="{{ asset('') }}asset/frontend/svg-icon/reg-apple.svg" alt="apple">
                                </a>
                                <a href="">
                                    <img class="w-100 h-100" src="{{ asset('') }}asset/frontend/svg-icon/reg-fb.svg" alt="fb" >
                                </a>
                            </div>
							<p class="ps-400 c69 s16 tc c-new-acc">Create an account? <a href="{{ url('signup') }}" class=""> Sign Up</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>

	<script>

		function showPwd(id, el) {
			let x = document.getElementById(id);
			if (x.type === "password") {
				x.type = "text";
				el.className = 'showpwd';
			} else {
				x.type = "password";
				el.className = 'showpwd';
			}
		}

	</script>
</body>

</html>
