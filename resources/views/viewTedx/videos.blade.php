<section id="videos" class="parallax-window" data-parallax="scroll" data-speed="0.3" data-image-src="{{url('images/backvideos.jpg')}}" data-position="0px -20px">
    <div class="container">
        <div class="row" style="padding-top:50px;">
			<div class="flexslider" style="background-color: transparent; border:none;">
				<ul class="slides">
					<li>
						<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
							<iframe src="https://embed.ted.com/talks/lang/es/sir_ken_robinson_bring_on_the_revolution" width="360" height="220" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							<p class="col-md-12 bottom-align-text">TED talks<br>6,611,604 visualizaciones</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
							<iframe src="https://embed.ted.com/talks/rita_pierson_every_kid_needs_a_champion" width="360" height="220" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							<p class="col-md-12 bottom-align-text">TED talks<br>6,189,600 visualizaciones</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
							<iframe src="https://embed.ted.com/talks/lang/es/sugata_mitra_build_a_school_in_the_cloud" width="360" height="220" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							<p class="col-md-12 bottom-align-text">TED talks<br>2,671,931 visualizaciones</p>
						</div>
					</li>
					<li>
						<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
							<iframe src="https://embed.ted.com/talks/angela_lee_duckworth_grit_the_power_of_passion_and_perseverance" width="360" height="220" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							<p class="col-md-12 bottom-align-text">TED talks<br>9,379,027 visualizaciones</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
							<iframe src="https://embed.ted.com/talks/lang/es/salman_khan_let_s_use_video_to_reinvent_education" width="360" height="220" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							<p class="col-md-12 bottom-align-text">TED talks<br>4,264,221 visualizaciones</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
							<iframe src="https://embed.ted.com/talks/elizabeth_gilbert_success_failure_and_the_drive_to_keep_creating" width="360" height="220" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							<p class="col-md-12 bottom-align-text">TED talks<br>3,079,938 visualizaciones</p>
						</div>
					</li>
				</ul>
			</div>
        </div>  
    </div>
</section>
<!--	********* Incluir libreria flexslider	***************	-->
<link rel="stylesheet" href="js/FlexSlider/flexslider.css" type="text/css" media="screen"/>
<script src="js/FlexSlider/jquery.flexslider.js"></script>
<script>

<!--	***********	Activar slider colaboradores	*************	>
	$('.flexslider').flexslider({
		animation: "slide"
	});
</script>
<style>
	.flex-direction-nav a {
		display: block;
		width: 40px;
		height: 40px;
		margin: -20px 0 0;
		position: absolute;
		top: 50%;
		z-index: 10;
		overflow: hidden;
		opacity: 0;
		cursor: pointer;
		color: rgba(0, 0, 0, 0.8);
		text-shadow: none;
		-webkit-transition: all 0.3s ease-in-out;
		-moz-transition: all 0.3s ease-in-out;
		-ms-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
		color: #fff;
		background-color: #000;
		border-radius: 50%;
		text-align: center;
	}
	.flex-direction-nav a:before {
		font-family: "flexslider-icon";
		font-size: 20px;
		display: inline-block;
		content: '\f001';
		color: #FFF;
		text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
		line-height: 40px;
	}
	.flex-direction-nav .flex-next {
		right: -50px;
		text-align: center;
	}
</style>