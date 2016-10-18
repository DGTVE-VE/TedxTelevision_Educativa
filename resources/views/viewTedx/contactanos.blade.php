<section id="contact">
	<div class="contactanos">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
					<form>
						<div class="form-group">
							<input class="con-text" type="text" name="name" placeholder="nombre">
						</div>
						<div class="form-group">
							<input class="con-text" type="text" name="email" placeholder="correo">
						</div>
						<div class="form-group">
							<textarea id="comentario" name="commit" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="form-group text-right">
							<div id="mensaje-contac"></div>
							<input style="background-color: #FF2B06; border-color: #FF2B06;" class="enviar btn btn-danger" type="submit" value="Enviar">
						</div>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div>
	</div>
</section>