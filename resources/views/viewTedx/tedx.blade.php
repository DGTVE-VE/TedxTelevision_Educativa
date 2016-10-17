@extends('indexTedx')

@section('headerTedx')
@include('viewTedx.header')
@endsection

@section('bodyTedx')
@include('viewTedx.player')
@include('viewTedx.quees')
@include('viewTedx.videos')
@include('viewTedx.ponentes')
@include('viewTedx.programa')
@include('viewTedx.organizadores')
@include('viewTedx.galeria')
@include('viewTedx.contactanos')
@endsection

@section('footerTedx')
@include('viewTedx.footer')   
@endsection