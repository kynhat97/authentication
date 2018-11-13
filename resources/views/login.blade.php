<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="{{url('login')}}" method="POST" role="form">
					<legend>Login</legend>
					@if($errors->has('errorlogin'))
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{$errors->first('errorlogin')}}
						</div>
					@endif
					<div class="form-group">
						<label for="">name</label>
						<input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{old('name')}}">
						@if($errors->has('name'))
							<p style="color:red">{{$errors->first('name')}}</p>
						@endif
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password" name="password">
						@if($errors->has('password'))
							<p style="color:red">{{$errors->first('password')}}</p>
						@endif
					</div>
				<div class="form-group">
						<label for="">account_type</label>
						<input type="text" class="form-control" id="account_type" placeholder="account_type" name="account_type" value="{{old('account_type')}}">
						@if($errors->has('account_type'))
							<p style="color:red">{{$errors->first('account_type')}}</p>
						@endif
					</div>

						
					{!! csrf_field() !!}
					<button type="submit" class="btn btn-primary">Đăng nhập</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>