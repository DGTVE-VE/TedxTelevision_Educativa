@extends('indexTedx')

@section('headerTedx')
@include('viewTedx.header')
@endsection

@section('bodyTedx')
@include('viewTedx.quees')
@include('viewTedx.videos')
@include('viewTedx.ponentes')
@include('viewTedx.organizadores')
@include('viewTedx.galeria')
@endsection

@section('footerTedx')
@include('viewTedx.footer')   
@endsection