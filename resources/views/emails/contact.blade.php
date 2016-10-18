@if($flag)
<div class="alert alert-success text-center" role="alert">Tu mensaje {{ $name }} se a enviado</div>
@else
<div class="alert alert-danger" role="alert">{{$name}} intentalo más tarde</div>
@endif