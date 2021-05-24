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
                <form method="POST" action="{{ route('register') }}">
                        @csrf
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror	</div>

					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
                        <select name="jabatan" class="form-control" >
                                    <option value="admin">admin</option>
                                    <option value="tester">tester</option>
                                   
                                </select> </div>
                    
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror</div>

					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror</div>

					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">	</div>
                        <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" href="{{ route('login') }}">{{ __('Register') }}
                                </button>
                            </div>
				</form>
				<img src="template3/images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="template3/js/jquery-3.3.1.min.js"></script>
		<script src="template3/js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>