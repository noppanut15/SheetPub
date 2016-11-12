@extends('layouts.app')
@section('title', 'มีชีตมากกว่า 1000+ ชีต ที่คุณจะได้ร่วมแบ่งปัน')

@section('custom-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

<div id="login">
<div class="login_box">
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
	<!--
	<h2 class="animated bounce">มีชีตมากกว่า 1000+ ชีต ที่คุณจะได้ร่วมแบ่งปัน</h2>
	-->
</div>
	<div class="bglogin animated bounceInUp">
		<div class="login_left">
			<div class="register_inlog">
				<h1>REGISTER</h1>
				<p>
					<a href="{{ url('/register') }}">SIGN UP</a>
				</p>
			</div>
		</div>
	

		<div class="login_right">
		<ul>
			<li>
				<h1>Login !</h1>
			</li>

			<li>
				<h2>USERNAME OR EMAIL</h2>
				<input class="text_input" type="text">
			</li>
			<li>
				<h2>PASSWORD</h2>
				<input class="text_input" type="password">
			</li>
			<li>
				<input type="checkbox">
				<span>REMEMBER ME</span>
			</li>
			<li class="signin_login">
				<a href="#">SIGN IN</a>
			</li>

			<li class="forget_login">
				<a href="#">Forget your password ?</a>
			</li>
		</ul>	
	</div>
	</div>
	
</div>
</div>


<!--
<div class="bg_login_page">
</div>
-->

@endsection