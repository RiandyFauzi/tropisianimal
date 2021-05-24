<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="template3/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="template3/css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="template3/images/image-1.png" alt="" class="image-1">
				<form method="POST" action="{{ route('login') }}">
                        @csrf

					<h3>Login</h3>
					<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input placeholder="Username" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror

					</div>
					<div class="form-holder">
					
                        
					<input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror  <span class="lnr lnr-phone-handset"></span>
                        
					</div>
					
					
                    
          
					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
                    </div>
                    
                  

                    <div class="container" style="margin-top: 10px;" >
                        
                   

						
                        @if (Route::has('register'))
          
                                
                                    <a class="badge badge-primary" style="margin-left: 130px; margin-top: 200px;" href="{{ route('register') }}">{{ __('') }}</a>
                               
                            @endif
						
					</div>

                    </div>
				</form>
				<img src="template3/images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="template3/js/jquery-3.3.1.min.js"></script>
		<script src="template3/js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

