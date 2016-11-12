@extends('layouts.app')
@section('title', 'มีชีตมากกว่า 1000+ ชีต ที่คุณจะได้ร่วมแบ่งปัน')

@section('custom-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

<div id="login">
<div class="register_box">
<div class="logo ">
	<h1>
		<script src="js/typed.js"></script>
				<script>
			    $(function(){
			        $(".element").typed({
			            strings: ["SHEETPUB^1000"],
			            typeSpeed: 2,
			        });
			    });
		</script>
		<span class="element"></span>
	</h1>
</div>
	<div class="bgregister">

		{{ Form::open(array('url' => 'register', 'id' => 'register')) }}
		<div class="register animated bounceInUp">
		@foreach ($errors->all() as $error) 
			<span style="color: red;"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp; {{ $error }} </span><br>
			@if ($loop->last)
				<div style="height: 50px;"></div>
			@endif
		@endforeach
		<ul>
			<li>
				<h1>Sign Up!</h1>
			</li>
			<li>
				<div class="namel_regis">
					<h2>FIRSTNAME</h2>
					{{ Form::text('firstname', null, ['required' => 'required']) }}
				</div>

				<div class="namel_regis">
					<h2>LASTNAME</h2>
					{{ Form::text('lastname', null, ['required' => 'required']) }}
				</div>
			</li>
			<li>
				<h2>E-MAIL</h2>
				{{ Form::email('mail', null, ['class' => 'text_input', 'required' => 'required']) }}
			</li>
			<li>
				<h2>USERNAME</h2>
				{{ Form::text('username', null, ['class' => 'text_input', 'required' => 'required']) }}
			</li>
			<li>
				<h2>PASSWORD</h2>
				{{ Form::password('password', ['class' => 'text_input', 'required' => 'required']) }}

			</li>
			<li>
				<h2>REPEAT PASSWORD</h2>
				{{ Form::password('password_confirmation', ['class' => 'text_input', 'required' => 'required']) }}
			</li>

			<li>
				<div class="img_avatar">
					<img src="images/avatar.png" alt="">
					<div class="button_uploadavatar">
						<button type="button">BROWSE</button>
					</div>
				</div>
			</li>

			<li >
				<p class="signup_login" onclick='document.getElementById("register").submit();'>SIGN UP</p>
			</li>
		</ul>	
	</div>
	</div>
	{{ Form::close() }}
</div>
</div>

<!--

<div class="bg_login_page">
</div>
-->
@endsection
