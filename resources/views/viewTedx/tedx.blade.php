@extends('indexTedx')

@section('headerTedx')
@include('viewTedx.header')
@endsection

@section('bodyTedx')
@include('viewTedx.quees')
@include('viewTedx.ponentes')
@endsection

@section('footerTedx')
@include('viewTedx.footer')   
@endsection