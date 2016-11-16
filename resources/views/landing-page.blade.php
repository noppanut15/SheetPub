@extends('layouts.landing')
@section('title', 'Share Once, Surf Anywhere, By Everyone')
@section('custom-css')

@endsection

@section('content')

	<div id="section_1">
	<div class="wrapper">
	<div class="image">
	</div>
	<div class="title">
		<h1 class="mo1">สถิตในดวงใจตราบนิจนิรันดร์</h1>
		<h2 class="mo2">น้อมศิระกราน กราบแทบพระยุคลบาท </h2>
		<h2 class="mo3">ด้วยสำนึกในพระมหากรุณาธิคุณเป็นล้นพ้นอันหาที่สุดมิได้</h2>
		<div class="sub">
			<h1 class="mo4">ข้าพระพุทธเจ้า</h1>
			<h2 class="mo5">เว็บไซต์ ชีทพับดอทคอม</h2>
		</div>

		<div class="btn mo6">
			<a href="{{ url('/') }}">
				เข้าสู่เว็บไซต์
			</a>
		</div>
	</div>
	</div>
	</div>

<audio controls autoplay>
  <source src="{{ asset('audios/tonmaikhonpo.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

@endsection
