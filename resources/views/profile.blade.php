@extends('layouts.app')
@section('title', 'มีชีตมากกว่า 1000+ ชีต ที่คุณจะได้ร่วมแบ่งปัน')

@section('custom-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
@endsection
@section('custom-js')
	<script src="{{ asset('js/typed.js')}}"></script>
@endsection

@section('content')

<div id="profile">
	<div class="logo ">
		<h1>
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
	<div class="about_me">
		<div class="tab1">
			<ul>
				<li>
					<div class="aboutme">
						<div class="imgme">
							<img src="{{ asset('images/unknown-avatar.png') }}" alt="">
						</div>
						<div class="user_email">
						<h1>javascript5</h1>
						<h2>Pongpanot Na Ubon</h2>
						<p>yiwman-gm@hotmail.com</p>
					</div>
					</div>
				</li>
				<li>
					<div class="editprofile">
						<a href="">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i> EDIT PROFILE
						</a>
					</div>
				</li>
				<div class="mycontent">
					<h1>MY CONTENT</h1>
				</div>
			</ul>
		</div>
		<div class="tab2">
			<ul>
				<li>
					<div class="post">
						<div class="post_left">
					<a href="#">
						<h1>การเคลื่อนที่ของปลาวาฬบนดาวนาเม็กที่ 170 M อิอิอิ มั่วๆนิ่มๆ	</h1>
					</a>


					<!-- VOTE -->
					<div class="star_vote">
					<div>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<div>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<div>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<div>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<div>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					</div>
					
					<p>1 กุมพาพันธ์ 2559, วิชาชีวะวิทยา</p>
						</div>
						<div class="post_right">
							<a href="#">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</a>

							<a href="#">
								<i class="fa fa-trash" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</li>

				<li>
					<div class="post">
						<div class="post_left">
					<a href="#">
						<h1>การเคลื่อนที่ของปลาวาฬบนดาวนาเม็กที่ 170 M อิอิอิ มั่วๆนิ่มๆ	</h1>
					</a>


					<!-- VOTE -->
					<div class="star_vote">
					<div>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<div>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<div>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<div>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<div>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					</div>


					<p>1 กุมพาพันธ์ 2559, วิชาชีวะวิทยา</p>
						</div>
						<div class="post_right">
							<a href="#">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</a>

							<a href="#">
								<i class="fa fa-trash" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</li>

			</ul>
		</div>
		
	</div>
</div>
@endsection