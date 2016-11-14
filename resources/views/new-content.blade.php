@extends('layouts.app')
@section('title', 'Add new Sheet')

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
			{{ Form::open(array('url' => 'content/new', 'id' => 'new-content', 'files'=>true)) }}
			<div class="register animated bounceInUp">
			@foreach ($errors->all() as $error) 
				<span style="color: red;"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp; {{ $error }} </span><br>
				@if ($loop->last)
					<div style="height: 50px;"></div>
				@endif
			@endforeach
				<ul>
					<li>
						<h1>NEW SHEET!</h1>
					</li>
					<li>
						<h2>TITLE</h2>
						{{ Form::text('title', null, ['class' => 'text_input', 'required' => 'required']) }}
					</li>
					<li>
						<h2>CATEGORY</h2>
						{{ Form::select('category', [
						'1' => 'ฟิสิกส์',
						'2' => 'เคมี',
						'3' => 'ชีววิทยา',
						'4' => 'คณิตศาสตร์',
						'5' => 'ภาษาอังกฤษ',
						'6' => 'ภาษาไทย',
						'7' => 'สังคมศึกษา',
						], null, ['class' => 'category']) }}

					</li>
					<li>
						<h2>DESCRIPTION</h2>
						{{ Form::textarea('description', null,['class' => 'text_area']) }}
					</li>
					<li>
						<h2>UPLOAD SHEET</h2>
						<div class="button_file">
							<p name="txtFileName" id="txtFileName" style="display: none;"></p>
							<br>
							<span>PDF file only.</span>
							<input class="button_browse" name="btnBrowse" type="button" value="BROWSE" onClick="file.click();">
							<input type="file" name="file" style="display:none" onChange="txtFileName.textContent = this.value; txtFileName.style = 'display: block';">
						</div>
					</li>
					<li>
						<h2>THUMBNAIL</h2>
							<div class="img_avatar">
							<input type="file" id="thumbnail" name="thumbnail" style="display:none" onClick='txtFileName.style = 'display: block';">
							<img src="{{ asset('images/thumbnail.png') }}" id="thumbnail_pic" alt="">
							<div class="button_uploadavatar">
								<button type="button" onClick="thumbnail.click()">UPLOAD</button>
							</div>
						</div>
					</li>
					<script>
						function readURL(input) {
					        if (input.files && input.files[0]) {
					            var reader = new FileReader();
					            
					            reader.onload = function (e) {
					                $('#thumbnail_pic').attr('src', e.target.result);
					            }            
					            reader.readAsDataURL(input.files[0]);
					        }
					    }

					    $("#thumbnail").change(function(){
					        readURL(this);
					    });
					</script>
					<li>
						<p class="signup_login" onclick='document.getElementById("new-content").submit();''>POST</p>
					</li>
					{{ Form::close() }}
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