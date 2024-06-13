@section('titulo', 'Login')
<link rel="stylesheet" href="assets/styles.css" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title> Login </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/styles.css" type="text/css">

</head>
<!--Coded with love by Mutiullah Samim-->
<body>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://e7.pngegg.com/pngimages/713/762/png-clipart-computer-icons-button-login-image-file-formats-logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
			 <div class="d-flex justify-content-center form_container">
				   <form method="POST" action="{{ route('login') }}">
						@csrf

						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="username" required autocomplete="email" autofocus>

								@error('email')
										<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
										</span>
								@enderror
						
						</div>

						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="current-password">

                                 @error('password')
	                               <span class="invalid-feedback" role="alert">
		                              <strong>{{ $message }}</strong>
	                               </span>
                                 @enderror
                        </div>
						
						
						<div class="form-group">
							<div class="custom-control custom-checkbox">
							    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								
							       <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
							</div>
						</div>

						  <div class="d-flex justify-content-center mt-3 login_container">
				 	          <button type="submit" class="btn btn-primary">Ingresar</button>
							   
							  
				          </div>
					</form>

				</div>

				<div class="mt-4">
					<div class="d-flex justify-content-center links">
					¿No tienes una cuenta? <a href="{{Route('register')}}" class="ml-2">Registrarse</a>
				</div>
				
			 </div>
	

			</div>
		</div>
	</div>
</body>
</html>