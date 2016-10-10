<link rel="stylesheet" href="{{url('css/organizadores.css')}}"></link>
<script src="{{url('js/organizadores.js')}}"></script>
<section id="organizadores">
    <div class="container">
        <div class="row posiciona">
			<map name="mapaOrganizadores" id="mapaOrganizadores">
				<area alt="" title="" shape="poly" coords="487,590,529,538,547,540,550,520,558,522,558,501,565,483,584,474,594,474,605,484,617,496,621,514,620,551,648,570,639,599,622,606,614,622,623,635,627,649,623,664,620,680,590,734,579,642,507,638" onmouseover="muestraSombra()" onmouseout="ocultaSombra()" onclick="muestraColaborador()"/>
			</map>
            <img class="img-responsive" src="{{asset('images/organizadores/organizadores.jpg')}}"/>
			<img id="colaboradorResalta" class="imgEncima invisible img-responsive" src="{{asset('images/organizadores/musicasCompleto.png')}}" onclick="ocultaColaborador()"/>
			<img id="mapaOrganizadores" class="imgEncima img-responsive" src="{{asset('images/organizadores/frenteOrganiza.png')}}" alt="" usemap="#mapaOrganizadores"/>
		</div>
    </div>
</section>