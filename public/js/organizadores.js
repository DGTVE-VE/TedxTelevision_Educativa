	function muestraSombra(numOrganizador){
		var archivoSombra = "images/organizadores/hover/hover" + numOrganizador + ".png";
		$("#colaboradorSombra").attr("src",archivoSombra);
		$("#colaboradorSombra").removeClass("invisible");
	}
	function ocultaSombra(){
		$("#colaboradorSombra").addClass("invisible");
		$("#colaboradorSombra").attr("src","images/organizadores/frenteOrganiza.png");
	}
	function muestraColaborador(numOrganizador){
		var archivoDatos = "images/organizadores/click/click" + numOrganizador + ".png";
		$("#colaboradorResalta").attr("src",archivoDatos);
		var mapaRedes = "#mapaRedes" + numOrganizador;
		$("#colaboradorResalta").attr("usemap",mapaRedes);
		$('#colaboradorResalta').rwdImageMaps();
		$("#colaboradorResalta").addClass('pasaFrente');
		$("#mapaOrganizadores").addClass('pasaAtras');
		$("#colaboradorResalta").removeClass("invisible");
	}
	function ocultaColaborador(){
		$("#colaboradorResalta").addClass("invisible");
		$("#colaboradorResalta").removeClass('pasaFrente');
		$("#mapaOrganizadores").removeClass('pasaAtras');
		$("#colaboradorResalta").attr("src","");
	}
	
	
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

    /* ------    Se llama la funci�n que redimensiona mapas de imagenes responsivas -----  */
    $(document).ready(function (e) {
        $('img[usemap]').rwdImageMaps();
		
		  // Add smooth scrolling to all links
		  $("a").on('click', function(event) {

			// Make sure this.hash has a value before overriding default behavior
			if (this.hash !== "") {
			  // Prevent default anchor click behavior
			  event.preventDefault();

			  // Store hash
			  var hash = this.hash;

			  // Using jQuery's animate() method to add smooth page scroll
			  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			  $('html, body').animate({
				scrollTop: $(hash).offset().top
			  }, 800, function(){
		   
				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			  });
			} // End if
		  });
    });