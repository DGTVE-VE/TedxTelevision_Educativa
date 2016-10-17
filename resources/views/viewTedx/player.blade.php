<?php
$strEnd   = '2016-11-17 9:00:00';
$strJSEnd = '2016, 11, 17, 9, 0, 0';

$dteStart = new DateTime();
$dteEnd   = new DateTime($strEnd); 

$actual = getdate();
?>
<section id="player">
	<div class="player">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="delimitador">
						@if( $dteEnd < $dteStart )
						<div class="contenedor">
							<iframe src='//www2.streamvdn.net/embed/1870faf2' style='box-shadow: 1px 1px 5px #444444;' frameborder='0' width='560' height='450' allowfullscreen></iframe>
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
					<p class="text-right">15 / 11 / 2016</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<p class="text-center">CDMX</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<p class="text-left">20 ORADORES</p>
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
	var startDate = new Date( {{ $actual['year'] }}, {{ $actual['mon'] }}, {{ $actual['mday'] }}, {{ $actual['hours'] }}, {{ $actual['minutes'] }}, {{ $actual['seconds'] }} );
	var dif = finishDate.getTime() / 1000 - startDate.getTime() / 1000;
	var clock = $('.clock').FlipClock({
		clockFace: 'DailyCounter',
        autoStart: false,
        language : 'es',
        callbacks: {
            stop: function() {
                // $('.message').html('The clock has stopped!')
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