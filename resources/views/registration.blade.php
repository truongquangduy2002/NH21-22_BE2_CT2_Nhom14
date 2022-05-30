@extends('master_login')
@section('body')

<div class="reg-w3">
	<div class="w3layouts-main">
		<h2>Register</h2>
		<form action="#" method="post">
			<form method="post" action="" role="form">
				@csrf
				<!-- Name -->
				<p class="content-item">
					<label for="name">Name
						<input id="name" class="block w-full" type="text" name="customer_name" />
					</label>
					@if($errors->has('customer_name'))
				<p style="color:red"> {{$errors->first('customer_name') }} !!!</p>
				@endif
				</p>

				<!-- Email Address -->
				<p class="content-item">
					<label for="email">Email address
						<input id="email" class="block w-full" type="text" name="email" />
						@if($errors->has('email'))
						<p style="color:red"> {{$errors->first('email') }} !!!</p>
						@endif
					</label>

				</p>

				<!-- Password -->
				<p class="content-item">
					<label for="password">Password
						<input id="password" class="block w-full" type="password" name="password" />
					</label>
					@if($errors->has('password'))
				<p style="color:red"> {{$errors->first('password') }} !!!</p>
				@endif
				</p>

				<!-- Confirm Password -->
				<p class="content-item">
					<label for="confirm_password">Confirm Password
						<input id="confirm_password" class="block w-full" type="password" name="confirm_password" />
					</label>
					@if($errors->has('confirm_password'))
				<p style="color:red"> {{$errors->first('confirm_password') }} !!!</p>
				@endif
				</p>

				<!-- Phone -->
				<p class="content-item">
					<label for="phone">Phone
						<input id="phone" class="block w-full" type="text" name="phone" />
					</label>
					@if($errors->has('phone'))
				<p style="color:red"> {{$errors->first('phone') }} !!!</p>
				@endif
				</p>

				<!-- Address -->
				<p class="content-item">
					<label for="address">Address
						<input id="address" class="block w-full" type="text" name="address" />
					</label>
				</p>

				<div class="flex items-center justify-end mt-4">
					<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}"></a>
					<button type="submit" class="signup">Register</button>
					<a href="{{route('home.login')}}" class="login">Login</a>
				</div>
			</form>
			<p>Already Registered.<a href="{{ route('login') }}">Login</a></p>
	</div>
</div>
@endsection