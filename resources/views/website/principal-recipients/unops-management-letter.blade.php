@extends('layout.app')

@section('menu')

@include('components.header')

@endsection

@section('content')

@include('components.principal-recipients.unops-management-letter')

@endsection

@section('footer')

@include('components.footer')

@endsection