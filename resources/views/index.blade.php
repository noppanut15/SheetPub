@extends('layouts.app')
@section('title', 'Share Once, Surf Anywhere, By Everyone')

@section('custom-css')
	<link rel="stylesheet" href="{{{ asset('css/style.css') }}}">
	<style type="text/css">
		.fa-star {
			color: #FFD546;
		}
	</style>
@endsection
@section('custom-js')
	<script src="{{{ asset('js/script-index.js') }}}" ></script>
	@if(Session::has('userId'))
		<script src="{{{ asset('js/script-logedin.js') }}}" ></script>
	@else
		<script src="{{{ asset('js/script-nologin.js') }}}" ></script>
	@endif
@endsection
@section('header-custom')
<!-- HEAD -->
<header>
@endsection
@section('content')

	<div class="slogan">
		<h1 class="">

			<script src="{{{ asset('js/typed.js') }}}"></script>
					<script>
				    $(function(){
				        $(".element").typed({
				            strings: ["SHEETPUB^1000"],
				            typeSpeed: 0,
				        });
				    });
			</script>
			<span class="element"></span>
		</h1>
		<h2 class="animated bounce">แหล่งรวมชีทมากกว่า 1000+ ชีท ที่คุณจะได้ร่วมแบ่งปัน</h2>
		<div class="button_border">
			<a id="friststep" href="{{ $btn_link }}">{{ $btn_msg }}</a>	
		</div>
	</div>

	

	<div class="hero_icon">
	</div>

	<div class="animated bounceInUp bbonweb">
		<img src="{{{ asset('images/bbonweb.png') }}}" alt="paper">
	</div>
	


</header>
@if(!Session::has('userId'))
<section id="step_1">
	<div class="warpper">
			<div class="instepONE">
			<div class="number_step1">
				<img src="{{{ asset('images/01.png') }}}" alt="">
			</div>
			<h1>YOUR<span style="color:#ffc80a;">SHEET</span></h1>
			<h2>Share Once, Surf Anywhere, By Everyone</h2>
			<h2>ร่วมเรียนรู้และแบ่งปันเนื้อหาของคุณผ่านชีทผับ แหล่งรวมชีทออนไลน์ที่ทุกคนสามารถเข้าถึงได้ทุกที่ทุกเวลา</h2>
			<div class="button_bg ">
				<a href="{{ url('/register') }}">REGISTER</a>	
			</div>
			<div class="next_step">
				<a href="#step_2">Next Step</a>
			</div>
		</div>
	</div>
</section>


<section id="step_2">
	

	<div class="warpper">
		<div class="instepTWO">
		<h1>FOLLOW<span style="color:#fff;">US</span></h1>
		<h2>ไม่พลาดทุกข่าวสารความเคลื่อนไหว และชีทใหม่ๆ ที่พร้อมจะแบ่งปันให้กับคุณ</h2>

		<div class="number_step2">
				<img src="{{{ asset('images/02.png') }}}" alt="">
		</div>
		
		<div class="fanpage">
			<a href="http://twitter.com" target="_blank" class="icon-button twitter">
			<i class="fa fa-twitter" aria-hidden="true"></i>
			<span></span>
			</a>

			<a href="http://facebook.com" target="_blank" class="icon-button facebook">
			<i class="fa fa-facebook" aria-hidden="true"></i>
			<span></span>
			</a>

			<a href="http://plus.google.com" target="_blank" class="icon-button google-plus">
			<i class="fa fa-google-plus" aria-hidden="true"></i>
			<span></span>
			</a>

		</div>
		<div class="next_step_2">
				<a href="#step_3">Next Step</a>
			</div>
		</div>
	</div>
</section>
@endif

<section id="step_3">
		<div class="movestep3">
	<div class="warpper">
		<div class="instepTHREE">
			<h1>FRESH<span style="color:#ffc80a;">SHEET</span>
			</h1>
			<span style="font-family: 'Supermarket';">
				ชีทใหม่ล่าสุด
			</span>
		</div>

	</div>


	<div class="more_co">
	@foreach ($contents as $content)
		<!-- CONTENT CARD -->
			<div class="content">
					<!-- Date And Time -->
					<div class="date_time">
							<p>{{ date('d', strtotime(str_replace('-','/', $content->timestamp).' +0000')) }}</p>
							<p>{{ strtoupper(date('M', strtotime(str_replace('-','/', $content->timestamp).' +0000'))) }}</p>
					</div>
					<!-- VOTE -->
					<div class="star_vote">
						<ul>
							<li><i style="@if($content->score>=1) color:#fff; @endif" class="fa fa-star" aria-hidden="true"></i></li>
							<li><i style="@if($content->score>=2) color:#fff; @endif" class="fa fa-star" aria-hidden="true"></i></li>
							<li><i style="@if($content->score>=3) color:#fff; @endif" class="fa fa-star" aria-hidden="true"></i></li>
							<li><i style="@if($content->score>=4) color:#fff; @endif" class="fa fa-star" aria-hidden="true"></i></li>
							<li><i style="@if($content->score==5) color:#fff; @endif" class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
					</div>
					<!-- Thumbnail -->
					<a href="{{ url('content/view') }}/{{ $content->contentId }}">
					<div class="thumbnail-post">
						<img src="{{ asset('uploads/thumbnails') }}/{{ $content->thumbnail }}">
					</div>
					</a>
					<!-- Descriotion -->
					<div class="description-post">		
						<!-- Category -->
						<div class="cate-post">
							<h1>{{ strtoupper($content->catName) }}</h1>
						</div>				
						<!-- Title -->
						<!-- Title -->
						<div class="post-title">
							<a href="{{ url('content/view') }}/{{ $content->contentId }}">
								<h1>{{ $content->topic }}</h1>
							</a>
							@if (mb_strlen($content->description, 'UTF-8') > 140)
								<h2>{{ mb_substr($content->description, 0, 140, 'UTF-8') }}...</h2>
							@else
								<h2>{{ $content->description }}</h2>
							@endif
						</div>
					</div>
			</div>
		<!-- END CONTENT CARD -->
		@endforeach

		<div class="readmore_pop">
			<a href="{{ url('/feed') }}">READ MORE</a>
		</div>
		</div>
</section>


<section id="step_4">
	<div class="warpper">
		<div class="instepFOUR">
			<h1>OUR<span style="color:#fff;">TEAM</span>
			</h1>
			<!-- <span>It may be the media's veruse of words like "breakthrough"?</span> -->
			
		</div>
	</div>


	<div id="ourteam">
	<div class="team">
		<ul>
			<li>
				<figure class="snip1321"><img src="{{{ asset('images/team/pleng.png') }}}" alt="sq-sample26"/>
  					<figcaption><i class="ion-upload"></i>
    					<h4>Pongpanot Na Ubon</h4>
    					<h2>PLENG</h2>
  					</figcaption>
  					<a href="https://www.facebook.com/pleng.prongpanot" target="_blank"></a>
				</figure>			
			</li>

			<li>
				<figure class="snip1321"><img src="{{{ asset('images/team/top.png') }}}" alt="sq-sample26"/>
  					<figcaption><i class="ion-upload"></i>
    					<h4>Noppanut Ploywong</h4>
    					<h2>TOP</h2>
  					</figcaption>
  					<a href="https://www.facebook.com/noppanut" target="_blank"></a>
				</figure>	
			</li>

			<li>
				<figure class="snip1321"><img src="{{{ asset('images/team/song.png') }}}" alt="sq-sample26"/>
  					<figcaption><i class="ion-upload"></i>
    					<h4>Paroot Satjawanit‎</h4>
    					<h2>SONG</h2>
  					</figcaption>
  					<a href="https://www.facebook.com/justdrinktoxic" target="_blank"></a>
				</figure>	
			</li>

			<li>
				<figure class="snip1321"><img src="{{{ asset('images/team/pong.png') }}}" alt="sq-sample26"/>
  					<figcaption><i class="ion-upload"></i>
    					<h4>Pongsaton Petsuk</h4>
    					<h2>PONG</h2>
  					</figcaption>
  					<a href="https://www.facebook.com/Pongdekba" target="_blank"></a>
				</figure>	
			</li>

			<li>
				<figure class="snip1321"><img src="{{{ asset('images/team/sky.png') }}}" alt="sq-sample26"/>
  					<figcaption><i class="ion-upload"></i>
    					<h4>Thanawat Loardkawe</h4>
    					<h2>SKY DOG</h2>
  					</figcaption>
  					<a href="https://www.facebook.com/hideokyjima" target="_blank"></a>
				</figure>	
			</li>


		</ul>
	</div>
	</div>
</section>


<footer>
	<div class="write_by">
		<span>
		Made with <i class="fa fa-heart" style="color:#FF8C74;" aria-hidden="true"></i>&nbsp;&nbsp; — &nbsp;&nbsp;SheetPub Team
		</span>
	</div>
</footer>

@endsection