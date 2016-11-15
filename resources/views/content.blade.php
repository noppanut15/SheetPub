@extends('layouts.app')
@section('title', $content->topic)

@section('custom-css')
	<link rel="stylesheet" type="text/css" href="{{{ asset('css/content.css') }}}">
	<link rel="stylesheet" href="{{ asset('css/jquery.rateyo.min.css') }}">
@endsection
@section('custom-js')
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5dd3f8d2-d20c-435b-9525-a0d494570864", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script src="{{ asset('js/jquery.rateyo.min.js') }}"></script>
@endsection
@section('content')

<div class="content">
	<div class="logo ">
		<h1>
		<script src="{{{ asset('js/typed.js') }}}"></script>
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
						<a href="{{ url('/profile') }}/{{ $content->userId }}"><img src="{{ asset('images/avatars') }}/{{ $content->profilePic }}" alt="{{ $content->firstName }} {{ $content->lastName }}"></a>
					</div>
					<div class="user_email">
						<a href="{{ url('/profile') }}/{{ $content->userId }}"><h1>{{ $content->userName }}</h1></a>
						<h2>{{ $content->firstName }} {{ $content->lastName }}</h2>
						<p>{{ $content->email }}</p>
					</div>
				</div>
			</li>
			<li>
				<div class="social-share">
					<!-- <div class="facebook">
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
					</div> -->
					<br>
					<div>
					<span class='st_facebook_hcount' displayText='Facebook'></span>
					</div><div>
					<span class='st_twitter_hcount' displayText='Tweet'></span></div>
					<div><span class='st_googleplus_hcount' displayText='Google +'></span></div>
				</div>
			</li>
		</ul>
	</div>
	<div class="in-content">
		<div class="content_left">
			<div class="title">
				<a href="javascript:void(0);">
					<h1>
					{{ $content->topic }}
					</h1>
				</a>
				
			</div>
			<div class="thumbnail">
				<img src="{{ asset('uploads/thumbnails') }}/{{ $content->thumbnail }}" alt="">
			</div>
		</div>
		
		<div class="content_right">
			<ul>
				<li style="border-bottom: 1px dashed #ccc; padding-bottom: 15px;">
					<p>
						DESCRIPTION
					</p>
					<span>
						{{ $content->description }}
					</span>
				</li>
				<li style="border-bottom: 1px dashed #ccc; padding-bottom: 15px;">
					<p>
						POST DATE
					</p>
					<span>
						{{ $time }}
					</span>
				</li>
				<li style="border-bottom: 1px dashed #ccc; padding-bottom: 15px;">
					<p>
						CATEGORY
					</p>
					<span>
						{{ $content->catName }}
					</span>
				</li>
				<li>
					<p>
						VOTE
					</p>
					<div id="rateYo"></div>

				</li>
				<li>
					<a href="{{ asset('uploads/files') }}/{{ $content->file }}" style="float: left;width: 100%;">
						<h1 style="text-align: center;background-color: #ffcb18;border-bottom: 5px solid #efbb09; font-family: 'Monster';">Download</h1>
					</a>
				</li>
			</ul>
		</div>
	</div>

	@if(!Session::has('userId'))
		<div class="lernmore">
			<div class="btn_lernmore">
			<h1>New to Sheetpub ?</h1>
				<a href="{{ url('/') }}">Learn More</a>
		</div>
	@endif
</div>



<script>
	$(function () { 
	  $("#rateYo").rateYo({
	    normalFill: "#A0A0A0",
	    ratedFill: "#ffcb18",
	    rating: {{ $content->voteScore/max(1, $content->votePopulation) }},
	    readOnly: {{ $viewOnly }},
	    onSet: function (rating, rateYoInstance) {
				  $("#rateYo").rateYo("option", "readOnly", true);
		      $.get('/vote/{{ $content->contentId }}/'+rating, function(data, status){
					if (status == 'success')
						$("#rateYo").rateYo("option", "readOnly", true);
		      });
		    }
	  });
	 
	});
</script>
<!--
<div class="bg_login_page">
</div>
-->
@endsection