@extends('guru::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('guru.name') !!}</p>
@endsection
