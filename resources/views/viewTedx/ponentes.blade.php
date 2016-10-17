<section id="ponentes">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center textBlanco"><h3><strong>PONENTES</strong></h3></div>
            <div class="col-lg-offset-0 col-md-offset-0 col-sm-offset-1 col-xs-offset-2 margenPonentes">
                @foreach($ponentes as $ponente)
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">            
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>{{$ponente->grado}}.{{$ponente->nombre}}</h4>
                            <h5>{{$ponente->institucion}}</h5>
                            <p>
                                <a href="#" class="redPonentes"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="#" class="redPonentes"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </p>
                        </div>
                        <img src="{{$ponente->foto_ponente}}" alt="...">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $("[rel='tooltip']").tooltip();

        $('.thumbnail').hover(
                function () {
                    $(this).find('.caption').slideDown(250); //.fadeIn(250)
                },
                function () {
                    $(this).find('.caption').slideUp(250); //.fadeOut(205)
                }
        );
    });
</script>