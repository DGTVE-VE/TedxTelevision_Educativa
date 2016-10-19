@if($flag)
<div class="alert alert-success text-center" role="alert">Tu mensaje {{ $name }} ha sido enviado</div>
@else
<div class="alert alert-danger" role="alert">{{$name}} intentalo más tarde</div>
@endif