$(document).ready(function () {

	programa( 1 );

    $('a.bloque').click(function(e){
    	e.preventDefault();
    	bloque( $(this) ) ;
    });
});

var bloque = function( element ){
	$('a.bloque').each(function(){
		$(this).removeClass('active');
	});
	element.addClass('active');
    
	programa( element.attr("data-bloque") );
};


var programa = function( bloque ){
	var local = this.location.origin;
	enviar( null, local + "/programa/" + bloque, "GET", "html", false, function( m ){
		$("#tabla-programa").html( m );
	});
};


var enviar = function($data, $url, $type, $dataType, $async, functionSuccess){
    $.ajax({
        async : $async,
        url: $url,
        type: $type,
        dataType: $dataType,
        data: $data,
        success: function( msg ){
        	functionSuccess( msg );
        },
        error: function( msg ){
        	console.log( msg );
        }
    });
};