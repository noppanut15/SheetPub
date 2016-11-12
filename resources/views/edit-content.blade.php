@extends('layouts.app')
@section('title', 'มีชีตมากกว่า 1000+ ชีต ที่คุณจะได้ร่วมแบ่งปัน')

@section('custom-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/new-content.css') }}">
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
						<h1>NEW SHEET!</h1>
					</li>
					<li>
						<h2>TITLE</h2>
						<input class="text_input" type="text">
					</li>
					<li>
						<h2>CATEGORY</h2>
						<select class="category">
							<option value="physic">ฟิสิกส์</option>
							<option value="chem">เคมี</option>
							<option value="biology">ชีววิทยา</option>
							<option value="math">คณิตศาสตร์</option>
							<option value="english">ภาษาอังกฤษ</option>
							<option value="thai">ภาษาไทย</option>
							<option value="social">สังคมศึกษา</option>
						</select>
					</li>
					<li>
						<h2>DESCRIPTION</h2>
						<textarea class="text_area" ></textarea>
					</li>
					<li>
						<div class="button_file">
							<form action="" method="post" enctype="multipart/form-data" name="frmMain" id="frmMain">
								<input class="filed_file" name="txtFileName" type="text" id="txtFileName" size="50">
								<br>
								<span>Upload file (pdf, jpg, png, doc, docx, ppt, pptx, xls, xlsx only!)</span>
								<input class="button_browse" name="btnBrowse" type="button" id="btnBrowse" value="Browse" onClick="filName.click();">
								<input type="file" name="filName" STYLE="display:none" onChange="txtFileName.value = this.value;">
							</form>
						</div>
					</li>
					<li>
						<div class="img_avatar">
							<img src="{{ asset('images/avatar.png') }}" alt="">
							<div class="button_uploadavatar">
								<button type="button">UPLOAD IMAGES</button>
							</div>
						</div>
					</li>
					
					<li>
						<a href="#" class="signup_login">POST</a>
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
