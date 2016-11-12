@extends('layouts.app')
@section('title', 'มีชีตมากกว่า 1000+ ชีต ที่คุณจะได้ร่วมแบ่งปัน')

@section('custom-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/edit-profile.css') }}">
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
			
			<div class="register animated bounceInUp">
				<ul>
					<li>
						<h1>Edit Profile !</h1>
					</li>
					<li>
						<div class="namel_regis">
							<h2>NAME</h2>
							<input type="text">
						</div>
						<div class="namel_regis">
							<h2>LAST NAME</h2>
							<input type="text">
						</div>
					</li>
					<li>
						<h2>E-MAIL</h2>
						<input class="text_input" type="text">
					</li>
					<li>
						<h2>USERNAME</h2>
						<input class="text_input" type="text">
					</li>
					<li>
						<h2>PASSWORD</h2>
						<input class="text_input" type="password">
					</li>
					<li>
						<h2>REPEAT PASSWORD</h2>
						<input class="text_input" type="password">
					</li>
					<li>
						<div class="img_avatar">
							<img src="images/avatar.png" alt="">
							<div class="button_uploadavatar">
								<button type="button">BROWSE</button>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="signup_login">SAVE</a>
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