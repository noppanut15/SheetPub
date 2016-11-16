@extends('layouts.app')
@section('title', 'วิชา'.$catNameThai)

@section('custom-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/feed.css') }}">
	<style type="text/css">
		.fa-star {
			color: #FFD546;
		}
	</style>
@endsection
@section('content')

<div class="content_header" style="margin:50px auto">
<div class="logo ">
		<h1>
		SHEETPUB
		</h1>
		<h2>
			{{ $catNameThai }}
		</h2>
		<!--
		<h2 class="animated bounce">มีชีตมากกว่า 1000+ ชีต ที่คุณจะได้ร่วมแบ่งปัน</h2>
		-->
	</div>
</div>
@foreach ($rows as $row) 

<div class="wall">
	<!-- CONTENT 1 -->
	<div class="wall-item">
		<div class="content">
			<!-- Date And Time -->
			<div class="date_time">
				<p>{{ date('d', strtotime(str_replace('-','/', $row->timestamp).' +0000')) }}</p>
				<p>{{ strtoupper(date('M', strtotime(str_replace('-','/', $row->timestamp).' +0000'))) }}</p>
			</div>
			<!-- VOTE -->
			<div class="star_vote">
				<ul>
					<li><i style="@if($row->score>=1) color:#fff; @endif" class="fa fa-star" aria-hidden="true"></i></li>

					<li><i style="@if($row->score>=2) color:#fff; @endif" class="fa fa-star" aria-hidden="true"></i></li>
					<li><i style="@if($row->score>=3) color:#fff; @endif" class="fa fa-star" aria-hidden="true"></i></li>

					<li><i style="@if($row->score>=4) color:#fff; @endif" class="fa fa-star" aria-hidden="true"></i></li>
					<li><i style="@if($row->score==5) color:#fff; @endif" class="fa fa-star" aria-hidden="true"></i></li>
				
				</ul>
			</div>
			<!-- END VOTE -->
			<!-- Thumbnail -->
			<a href="{{ url('content/view') }}/{{ $row->contentId }}">
				<div class="thumbnail-post">
					<img src="{{ asset('uploads/thumbnails') }}/{{ $row->thumbnail }}">
				</div>
			</a>
			<!-- Descriotion -->
			<div class="description-post">
				<!-- Category -->
				<div class="cate-post">
					<h1>{{ strtoupper($row->catName) }}</h1>
				</div>
				<!-- Title -->
				<div class="post-title">
					<a href="{{ url('content/view') }}/{{ $row->contentId }}">
						<h1>{{ $row->topic }}</h1>
					</a>
					@if (mb_strlen($row->description, 'UTF-8') > 140)
						<h2>{{ mb_substr($row->description, 0, 140, 'UTF-8') }}...</h2>
					@else
						<h2>{{ $row->description }}</h2>
					@endif
				</div>
				
			</div>
		</div>
	</div>
@endforeach
</div>
<script src="{{ asset('js/jaliswall.js') }}"></script>
<script>
$('.wall').jaliswall({item:'.wall-item'});
</script>
@endsection