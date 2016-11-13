@extends('layouts.app')
@section('title', 'มีชีตมากกว่า 1000+ ชีต ที่คุณจะได้ร่วมแบ่งปัน')

@section('custom-css')
	<link rel="stylesheet" href="{{{ asset('css/style.css') }}}">

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
		<h2 class="animated bounce">มีชีตมากกว่า 1000+ ชีต ที่คุณจะได้ร่วมแบ่งปัน</h2>
		<div class="button_border">
			<a id="friststep" href="#step_1">GET STARTED</a>	
		</div>
	</div>

	

	<div class="hero_icon">
	</div>

	<div class="animated bounceInUp bbonweb">
		<img src="images/bbonweb.png" alt="paper">
	</div>
	


</header>

<section id="step_1">
	<div class="warpper">
			<div class="instepONE">
			<div class="number_step1">
				<img src="{{{ asset('images/01.png') }}}" alt="">
			</div>
			<h1>GET<span style="color:#ffc80a;">STARTED</span></h1>
			<h2>But I must explain to you how all this mistaken idea of denouncing </h2>
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
		<h1>FOLLOW<span style="color:#fff;">ME</span></h1>
		<h2>Type $0 to download for free, or any sum if you want to support us and donate</h2>

		<div class="number_step2">
				<img src="{{{ asset('images/02.png') }}}" alt="">
		</div>
		
		<div class="fanpage">
			<a href="http://twitter.com/minimalmonkey" class="icon-button twitter">
			<i class="fa fa-twitter" aria-hidden="true"></i>
			<span></span>
			</a>

			<a href="http://facebook.com" class="icon-button facebook">
			<i class="fa fa-facebook" aria-hidden="true"></i>
			<span></span>
			</a>

			<a href="http://plus.google.com" class="icon-button google-plus">
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


<section id="step_3">
		<div class="movestep3">
	<div class="warpper">
		<div class="instepTHREE">
			<h1>RECENT
				<span style="color:#ffc80a;">
				POST
				</span>
			</h1>
			<span>
				It may be the media's veruse of words like "breakthrough"?
			</span>
		</div>

	</div>


	<div class="more_co">
		<!-- CONTENT 1 -->
			<div class="content">
					<!-- Date And Time -->
					<div class="date_time">
							<p>27</p>
							<p>MAR</p>
					</div>
					<!-- VOTE -->
					<div class="star_vote">
						<ul>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
					</div>
					<!-- Thumbnail -->
					<a href="#">
					<div class="thumbnail-post">
						<img src="images/content/1.jpg">
					</div>
					</a>
					<!-- Descriotion -->
					<div class="description-post">		
						<!-- Category -->
						<div class="cate-post">
							<h1>BIOLOGY</h1>
						</div>				
						<!-- Title -->
						<!-- Title -->
						<div class="post-title">
							<a href="#">
								<h1>สรุปการเคลื่อนที่ของวาฬบนดาวนาเม็ก</h1>
							</a>
							<h2>คําคมความรักเงินเหมือนความรัก. เงินก็เหมือนความรัก มันค่อยๆ ฆ่า ผู้ที่ยึดมั่น ไว้อย่างช้าๆ และเจ็บปวด และจะคืนชีวิตให้กับ ผู้ที่ส่งมอบมันต่อไป ...</h2>
						</div>
						




					</div>
			</div>
		<!-- END CONTENT 1 -->

		<!-- CONTENT 2 -->
			<div class="content">
					<!-- Date And Time -->
					<div class="date_time">
							<p>27</p>
							<p>MAR</p>
					</div>
					<!-- VOTE -->
					<div class="star_vote">
						<ul>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
					</div>
					<!-- Thumbnail -->
					<a href="#">
					<div class="thumbnail-post">
						<img src="{{{ asset('images/content/1.jpg') }}}">
					</div>
					</a>
					<!-- Descriotion -->
					<div class="description-post">		
						<!-- Category -->
						<div class="cate-post">
							<h1>BIOLOGY</h1>
						</div>				
						<!-- Title -->
						<!-- Title -->
						<div class="post-title">
							<a href="#">
								<h1>สรุปการเคลื่อนที่ของวาฬบนดาวนาเม็ก</h1>
							</a>
							<h2>คําคมความรักเงินเหมือนความรัก. เงินก็เหมือนความรัก มันค่อยๆ ฆ่า ผู้ที่ยึดมั่น ไว้อย่างช้าๆ และเจ็บปวด และจะคืนชีวิตให้กับ ผู้ที่ส่งมอบมันต่อไป ...</h2>
						</div>
						




					</div>
			</div>
		<!-- END CONTENT 2 -->

		<!-- CONTENT 3 -->
			<div class="content">
					<!-- Date And Time -->
					<div class="date_time">
							<p>27</p>
							<p>MAR</p>
					</div>
					<!-- VOTE -->
					<div class="star_vote">
						<ul>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
					</div>
					<!-- Thumbnail -->
					<a href="#">
					<div class="thumbnail-post">
						<img src="{{{ asset('images/content/1.jpg') }}}">
					</div>
					</a>
					<!-- Descriotion -->
					<div class="description-post">		
						<!-- Category -->
						<div class="cate-post">
							<h1>BIOLOGY</h1>
						</div>				
						<!-- Title -->
						<!-- Title -->
						<div class="post-title">
							<a href="#">
								<h1>สรุปการเคลื่อนที่ของวาฬบนดาวนาเม็ก</h1>
							</a>
							<h2>คําคมความรักเงินเหมือนความรัก. เงินก็เหมือนความรัก มันค่อยๆ ฆ่า ผู้ที่ยึดมั่น ไว้อย่างช้าๆ และเจ็บปวด และจะคืนชีวิตให้กับ ผู้ที่ส่งมอบมันต่อไป ...</h2>
						</div>
						




					</div>
			</div>
		<!-- END CONTENT 3 -->

		<!-- CONTENT 4 -->
			<div class="content">
					<!-- Date And Time -->
					<div class="date_time">
							<p>27</p>
							<p>MAR</p>
					</div>
					<!-- VOTE -->
					<div class="star_vote">
						<ul>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
					</div>
					<!-- Thumbnail -->
					<a href="#">
					<div class="thumbnail-post">
						<img src="{{{ asset('images/content/1.jpg') }}}">
					</div>
					</a>
					<!-- Descriotion -->
					<div class="description-post">		
						<!-- Category -->
						<div class="cate-post">
							<h1>BIOLOGY</h1>
						</div>				
						<!-- Title -->
						<!-- Title -->
						<div class="post-title">
							<a href="#">
								<h1>สรุปการเคลื่อนที่ของวาฬบนดาวนาเม็ก</h1>
							</a>
							<h2>คําคมความรักเงินเหมือนความรัก. เงินก็เหมือนความรัก มันค่อยๆ ฆ่า ผู้ที่ยึดมั่น ไว้อย่างช้าๆ และเจ็บปวด และจะคืนชีวิตให้กับ ผู้ที่ส่งมอบมันต่อไป ...</h2>
						</div>
						




					</div>
			</div>
		<!-- END CONTENT 4 -->


		<div class="readmore_pop">
			<a href="{{ url('/feed') }}">READ MORE</a>
		</div>
		</div>
</section>


<section id="step_4">
	<div class="warpper">
		<div class="instepFOUR">
			<h1>
			OUR 
			<span style="color:#fff;">
			TEAM
			</span>
			</h1>
			<span>It may be the media's veruse of words like "breakthrough"?</span>
			
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
  					<a href="#"></a>
				</figure>			
			</li>

			<li>
				<figure class="snip1321"><img src="{{{ asset('images/team/top.png') }}}" alt="sq-sample26"/>
  					<figcaption><i class="ion-upload"></i>
    					<h4>Noppanut Ploywong    </h4>
    					<h2>TOP</h2>
  					</figcaption>
  					<a href="#"></a>
				</figure>	
			</li>

			<li>
				<figure class="snip1321"><img src="{{{ asset('images/team/song.png') }}}" alt="sq-sample26"/>
  					<figcaption><i class="ion-upload"></i>
    					<h4>Paroot Satjawanit‎</h4>
    					<h2>SONG</h2>
  					</figcaption>
  					<a href="#"></a>
				</figure>	
			</li>

			<li>
				<figure class="snip1321"><img src="{{{ asset('images/team/pong.png') }}}" alt="sq-sample26"/>
  					<figcaption><i class="ion-upload"></i>
    					<h4>Pongsaton Petsuk</h4>
    					<h2>PONG</h2>
  					</figcaption>
  					<a href="#"></a>
				</figure>	
			</li>

			<li>
				<figure class="snip1321"><img src="{{{ asset('images/team/sky.png') }}}" alt="sq-sample26"/>
  					<figcaption><i class="ion-upload"></i>
    					<h4>Thanawat Loardkawe</h4>
    					<h2>SKY DOG</h2>
  					</figcaption>
  					<a href="#"></a>
				</figure>	
			</li>


		</ul>
	</div>
	</div>
</section>


<footer>
	<div class="write_by">
		<span>
		Copyright © 2016 SheetPub Team
		</span>
	</div>
</footer>

@endsection