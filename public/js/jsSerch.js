$(document).ready(function () {

	programa( 1 );

    $('a.bloque').click(function(e){
    	e.preventDefault();
    	bloque( $(this) ) ;
    });

    $('.enviar').click(function(e){
        e.preventDefault();
        envio();
    });
});

var envio = function(){
    var local = this.location.origin;
    var data = [];
    $('.contactanos input').each(function(index){
        data.push({name : $(this).attr('name'), value : $(this).val() });
    });
    data.push({name : $('#comentario').attr('name'), value : $('#comentario').val() });
    console.log( data );
    enviar( data, local + "/email", "POST", "html", false, function(m){
        $('#mensaje-contac').html('');
        $('#mensaje-contac').append(m);
    });
    $('.contactanos .con-text').each(function(index){
        $(this).val("");
    });
    $('.contactanos textarea').val("");
};

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