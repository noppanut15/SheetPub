@extends('layouts.app')
@section('title', 'มีชีตมากกว่า 1000+ ชีต ที่คุณจะได้ร่วมแบ่งปัน')

@section('custom-css')
	<link rel="stylesheet" type="text/css" href="{{{ asset('css/content.css') }}}">
@endsection

@section('content')

<div class="content">
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
	<div class="tab1">
		<ul>
			<li>
				<div class="aboutme">
					<div class="avatar">
						<img src="images/unknown-avatar.png" alt="">
					</div>
					<div class="user_email">
						<h1>javascript5</h1>
						<h2>Pongpanot Na Ubon</h2>
						<p>yiwman-gm@hotmail.com</p>
					</div>
				</div>
			</li>
			<li>
				<div class="social-share">
					<div class="facebook">
						<a href="">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</div>
					<div class="twitter">
						<a href="">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
					<div class="google-plus">
						<a href="">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="in-content">
		<div class="content_left">
			<div class="title">
				<a href="#">
					<h1>
					การเคลื่อนที่ของปลาวาฬบนดาวนาเม็กที่ 170 M อิอิอิ มั่วๆนิ่มๆ
					</h1>
				</a>
				
			</div>
			<div class="thumbnail">
				<img src="images/content/2.jpg" alt="">
			</div>
		</div>
		
		<div class="content_right">
			<ul>
				<li style="border-bottom: 1px dashed #ccc; padding-bottom: 15px;">
					<p>
						DESSCRIPTION
					</p>
					<span>
						คําคมความรักเงินเหมือนความรัก. เงินก็เหมือนความรัก มันค่อยๆ ฆ่า ผู้ที่ยึดมั่น ไว้อย่างช้าๆ และเจ็บปวด และจะคืนชีวิตให้กับ ผู้ที่ส่งมอบมันต่อไป ...
					</span>
				</li>
				<li style="border-bottom: 1px dashed #ccc; padding-bottom: 15px;">
					<p>
						POST DATE
					</p>
					<span>
						1 ธันวาคม 2559
					</span>
				</li>
				<li style="border-bottom: 1px dashed #ccc; padding-bottom: 15px;">
					<p>
						CATEGORY
					</p>
					<span>
						ชีวะวิทยา
					</span>
				</li>
				<li>
					<p>
						VOTE
					</p>
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
				</li>
				<li>
					<a href="" style="float: left;width: 100%;">
						<h1 style="text-align: center;background-color: #ffcb18;border-bottom: 5px solid #efbb09; font-family: 'Monster';">Download</h1>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!--
<div class="bg_login_page">
</div>
-->
@endsection