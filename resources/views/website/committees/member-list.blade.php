@extends('layout.app')

@section('menu')

@include('components.header')

@endsection

@section('content')

@include('components.committees.member-list')

@endsection

@section('footer')

@include('components.footer')

@endsection