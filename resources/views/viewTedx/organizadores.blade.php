<style>
	.imgEncima{
		position:absolute;
		top:0px;
		left:0px;
	}
	.posiciona{
		position:relative;
	}
	.invisible{
		visibility: hidden;
	}
</style>
<script>
	function muestraColaborador(){
		$("#colaboradorResalta").removeClass("invisible");
		console.log("muestra");
	}
	function ocultaColaborador(){
		$("#colaboradorResalta").addClass("invisible");
	}
</script>
<section id="organizadores">
    <div class="container">
        <div class="row posiciona">
			<map name="mapaOrganizadores" id="mapaOrganizadores">
				<area alt="" title="" href="#" shape="poly" coords="487,590,529,538,547,540,550,520,558,522,558,501,565,483,584,474,594,474,605,484,617,496,621,514,620,551,648,570,639,599,622,606,614,622,623,635,627,649,623,664,620,680,590,734,579,642,507,638" onmouseover="muestraColaborador()" onmouseleave="ocultaColaborador()"/>
			</map>
            <img class="img-responsive" src="{{asset('images/organizadores/organizadores.jpg')}}"/>
			<img id="colaboradorResalta" class="imgEncima invisible img-responsive" src="{{asset('images/organizadores/musicasCompleto.png')}}"/>
			<img class="imgEncima img-responsive" src="{{asset('images/organizadores/frenteOrganiza.png')}}" alt="" usemap="#mapaOrganizadores"/>
		</div>
    </div>
</section>
<script>
    /* rwdImageMaps jQuery plugin v1.5
     *
     * Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize
     *
     * Copyright (c) 2013 Matt Stow
     * https://github.com/stowball/jQuery-rwdImageMaps
     * http://mattstow.com
     * Licensed under the MIT license
     */
    ;
    (function ($) {
        $.fn.rwdImageMaps = function () {
            var $img = this;

            var rwdImageMap = function () {
                $img.each(function () {
                    if (typeof ($(this).attr('usemap')) == 'undefined')
                        return;

                    var that = this,
                            $that = $(that);

                    // Since WebKit doesn't know the height until after the image has loaded, perform everything in an onload copy
                    $('<img />').load(function () {
                        var attrW = 'width',
                                attrH = 'height',
                                w = $that.attr(attrW),
                                h = $that.attr(attrH);

                        if (!w || !h) {
                            var temp = new Image();
                            temp.src = $that.attr('src');
                            if (!w)
                                w = temp.width;
                            if (!h)
                                h = temp.height;
                        }

                        var wPercent = $that.width() / 100,
                                hPercent = $that.height() / 100,
                                map = $that.attr('usemap').replace('#', ''),
                                c = 'coords';

                        $('map[name="' + map + '"]').find('area').each(function () {
                            var $this = $(this);
                            if (!$this.data(c))
                                $this.data(c, $this.attr(c));

                            var coords = $this.data(c).split(','),
                                    coordsPercent = new Array(coords.length);

                            for (var i = 0; i < coordsPercent.length; ++i) {
                                if (i % 2 === 0)
                                    coordsPercent[i] = parseInt(((coords[i] / w) * 100) * wPercent);
                                else
                                    coordsPercent[i] = parseInt(((coords[i] / h) * 100) * hPercent);
                            }
                            $this.attr(c, coordsPercent.toString());
                        });
                    }).attr('src', $that.attr('src'));
                });
            };
            $(window).resize(rwdImageMap).trigger('resize');

            return this;
        };
    })(jQuery);
//* End image maps to be used in a responsive design by recalculating the area coordinates**//

    /* ------    Se llama la función que redimensiona mapas de imagenes responsivas -----  */
    $(document).ready(function (e) {
        $('img[usemap]').rwdImageMaps();
		console.log('ejecutado');
    });
</script>