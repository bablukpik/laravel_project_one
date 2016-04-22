@extends('layouts.master')

@section('title', 'This is my about page')


@section('header')
     <h1>This is my header of about us page</h1>
@endsection

@section('sidebar')
    <h1>This is my my sidebar</h1>
@endsection

@section('content')
    <p>This is my body content of about us page</p>
@endsection


@section('footer')
	@parent
    <h1>This is my footer of about us page</h1>
@show