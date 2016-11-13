@extends('layouts.app')
@section('title', 'มีชีตมากกว่า 1000+ ชีต ที่คุณจะได้ร่วมแบ่งปัน')

@section('custom-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
	<style type="text/css">
	.fa-star {
		color: #FFF7DC !important;
	}
	</style>
@endsection
@section('custom-js')
	<script src="{{ asset('js/typed.js')}}"></script>
@endsection

@section('content')

@php

  
function thai_date($time){  
	$thai_month_arr=array(  
	    "0"=>"",  
	    "1"=>"มกราคม",  
	    "2"=>"กุมภาพันธ์",  
	    "3"=>"มีนาคม",  
	    "4"=>"เมษายน",  
	    "5"=>"พฤษภาคม",  
	    "6"=>"มิถุนายน",   
	    "7"=>"กรกฎาคม",  
	    "8"=>"สิงหาคม",  
	    "9"=>"กันยายน",  
	    "10"=>"ตุลาคม",  
	    "11"=>"พฤศจิกายน",  
	    "12"=>"ธันวาคม"                    
	); 
    $thai_date_return="วันที่ ".date("j",$time);  
    $thai_date_return.=" เดือน".$thai_month_arr[date("n",$time)];  
    $thai_date_return.= " พ.ศ.".(date("Yํ",$time)+543);  
    $thai_date_return.= "  ".date("H:i",$time)." น.";  
    return $thai_date_return;  
}  

@endphp

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
							<img src="{{ asset('images/avatars') }}/{{ $record->profilePic }}" alt="{{ $record->firstName }} {{ $record->lastName }}">
						</div>
						<div class="user_email">
						<h1>{{ $record->userName }}</h1>
						<h2>{{ $record->firstName }} {{ $record->lastName }}</h2>
						<p>{{ $record->email }}</p>
					</div>
					</div>
				</li>
				@if (Session::get('userId') == $record->userId)
					<li>
						<div class="editprofile">
							<a href="{{ url('profile/edit') }}">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i> EDIT PROFILE
							</a>
						</div>
					</li>
				@endif
				<div class="mycontent">
					<h1>&nbsp;MY CONTENT&nbsp;</h1>
				</div>
			</ul>
		</div>
		<div class="tab2">
			<ul>
			@foreach ($posts as $post)
				@php
					$score = $post->voteScore/max(1, $post->votePopulation)
				@endphp
				<li>
					<div class="post">
						<div class="post_left">
					<a href="{{ url('content/view') }}/{{ $post->contentId }}">
						<h1>{{ $post->topic }}</h1>
					</a>

					<!-- VOTE -->
					<div class="star_vote">
						<div>
							<i style="@if($score>=1) color:#ffcb18 !important; @endif" class="fa fa-star" aria-hidden="true"></i>
						</div>
						<div>
							<i style="@if($score>=2) color:#ffcb18 !important; @endif" class="fa fa-star" aria-hidden="true"></i>
						</div>
						<div>
							<i style="@if($score>=3) color:#ffcb18 !important; @endif" class="fa fa-star" aria-hidden="true"></i>
						</div>
						<div>
							<i style="@if($score>=4) color:#ffcb18 !important; @endif" class="fa fa-star" aria-hidden="true"></i>
						</div>
						<div>
							<i style="@if($score>=5) color:#ffcb18 !important; @endif" class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					
					<p>{{ thai_date(date('U', strtotime(str_replace('-','/', $post->timestamp).' +0000'))) }}, วิชา{{ $post->catNameThai }}</p>
						</div>
						@if (Session::get('userId') == $record->userId)
						<div class="post_right">
						
							<a href="#">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</a>

							<a href="#">
								<i class="fa fa-trash" aria-hidden="true"></i>
							</a>
						</div>
						@endif
				</li>
			@endforeach
			@if (count($posts) == 0)

			</ul>
		</div>
							
				<div style="height: 600px; width: 100%; text-align: center;"><img style="margin-top: 60px;" src="{{ asset('images/no-data.png') }}">
				@if (Session::get('userId') == $record->userId)
					<p>ว๊า! ยังไม่มีชีทเป็นของตัวเองเลย <a style="color:#ffcb18;" href="{{ url('content/new') }}">มาเริ่มแชร์ชีทฉบับแรก</a>กันสิ</p>
				@endif
				</div>
			@endif
	</div>
</div>
@endsection