<table>
	@foreach($speakers as $speaker)
	<tr>
		<td>
			<div class="caja">
				<div class="caja-foto">
					<?php $foto = ($speaker->name_photograph == "foto.jpg" ? "http://placehold.it/68x68" : "images/programa/" . $speaker->name_photograph) ?>
					<img src="{{ $foto }}" class="img-foto" alt="">
				</div>
				<div class="caja-info">
					<div class="caja-encabezado">
						<div class="caja-nombre">
							<div><strong>{{ $speaker->name }}</strong></div>
							<div><p>{{ $speaker->role }}</p></div>
						</div>
						<div class="caja-horario">
							<p><span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{ substr( $speaker->start, 0, -3) }} - {{ substr( $speaker->finish, 0, -3) }} hrs.</p>
						</div>
					</div>
					<div style="clear: both;"></div>
					<div class="caja-cuerpo">
						<p>{{ $speaker->title }}</p>
					</div>
				</div>
			</div>
		</td>
	</tr>
	@endforeach
</table>