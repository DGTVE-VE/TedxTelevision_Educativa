<?php

$strEnd   = '2016-11-15 9:00:00';
$strJSEnd = '2016, 10, 15, 9, 0, 0';


$dteStart = new DateTime();
$dteEnd   = new DateTime($strEnd, new DatetimeZone('America/Mexico_City'));
$dteStart->setTimezone( new DatetimeZone('America/Mexico_City') );

$actual = getdate();
?>
<section id="player">
	<div class="player" class="parallax-window" data-parallax="scroll" data-speed="0.3" data-image-src="{{url('images/foto_header.jpg')}}" data-position="0px -20px">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="delimitador">
						@if( $dteEnd < $dteStart )
						<div class="contenedor">
							<img src="{{ asset('/images/banner_felicidades.png') }}" alt="Banner_Felicidades">
							{{--<iframe src="//player.cdnmedia.tv/embed/1025781c" style="box-shadow: 1px 1px 5px #444444;" frameborder="0" width="560" height="450" allowfullscreen></iframe>--}}
						</div>
						@else
						<div class="caja-clock">
							<p class="text-center">...tic, tac...</p>
							<div class="clock"></div>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
		<div class="box-shadow">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<p class="text-right">15 - 11 - 2016</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<p class="text-center">CDMX</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<p class="text-left">15 ORADORES</p>
				</div>
			</div>
		</div>
	</div>
</section>

@if( $dteEnd > $dteStart )
<link rel="stylesheet" type="text/css" href="{{ asset ('css/flipclock.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset ('css/app.css') }}">
<script type="text/javascript" src="{{ asset ('js/flipclock.js') }}"></script>
<script type="text/javascript">
	var finishDate = new Date({{ $strJSEnd }});
	var startDate = new Date( {{ $actual['year'] }}, {{ $actual['mon']-1 }}, {{ $actual['mday'] }}, {{ $actual['hours']-6 }}, {{ $actual['minutes'] }}, {{ $actual['seconds'] }} );
	var dif = finishDate.getTime() / 1000 - startDate.getTime() / 1000;
	var clock = $('.clock').FlipClock({
		clockFace: 'DailyCounter',
        autoStart: false,
        language : 'es',
        callbacks: {
            stop: function() {
                location.reload();
	            }
	        }
	    });

	    // clock.setTime(220880);
	    clock.setTime(dif);
	    clock.setCountdown(true);
	    clock.Lang = 'es';
	    clock.start();
</script>
@endif