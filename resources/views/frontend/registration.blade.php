{{-- @extends('frontend.master')


@section('content') --}}


<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Login</title>
	<!--favicon-->
	<link rel="icon" href="{{url('frontend/assets/images/favicon-32x32.png')}}" type="image/png" />
	<!-- loader-->
	<link href="{{url('frontend/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{url('frontend/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{url('frontend/assets/css/icons.css')}}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{url('frontend/assets/css/app.css')}}" />
</head>

<body class="bg-register">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-register d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="{{url('frontend/assets/images/logo-icon.png')}}" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Create an Account</h3>
									</div>
									<div class="input-group shadow-sm rounded mt-5">
										<div class="input-group-prepend">	<span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="{{url('frontend/assets/images/icons/search.svg')}}" alt="" width="16"></span>
										</div>
										<input type="button" class="form-control border-0" value="Register with google">
									</div>
									<div class="input-group shadow-sm rounded mt-3">
										<div class="input-group-prepend">	<span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="frontend/assets/images/icons/facebook.svg" alt="" width="16"></span>
										</div>
										<input type="button" class="form-control border-0 text-facebook" value="Register with Facebook">
									</div>
									<div class="login-separater text-center"> <span>OR REGISTER WITH EMAIL</span>
										<hr/>
									</div>
									<form action="{{route('registration.do')}}" method="post">
										@csrf
									<div class="form-group mt-4">
										<label>Email Address</label>
										<input name="email" type="email" class="form-control" placeholder="example@user.com" />
									</div>
									<div class="form-row">
										<div class="form-group col-md-4">
											<label>First Name</label>
											<input name="firstname" type="text" class="form-control" placeholder="Enter First Name" />
										</div>
										<div class="form-group col-md-4">
											<label>Last Name</label>
											<input name="lastname" type="text" class="form-control" placeholder="Enter last name" />
										</div>
										<div class="form-group col-md-4">
											<label>User Name</label>
											<input name="username" type="text" class="form-control" placeholder="Enter user name" />
										</div>
									</div>
									<div class="form-group">
										<label>Password</label>
										<div class="input-group" id="show_hide_password">
											<input name="password" class="form-control border-right-0" type="password" value="Enter password">
											<div class="input-group-append">	<a href="javascript:;" class="input-group-text bg-transparent border-left-0"><i class='bx bx-hide'></i></a>
											</div>
										</div>
									</div>
									

									<div class="btn-group mt-3 w-100">
										<button type="submit" class="btn btn-primary btn-block">Register</button>
										<button type="button" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
										</button>
									</div>
									<hr/>
									
								</div>
							</div>
							<div class="col-lg-6">
								<img src="{{url('frontend/assets/images/login-images/register-frent-img.jpg')}}" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{url('frontend/assets/js/jquery.min.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
</body>

</html>

{{-- @endsection --}}