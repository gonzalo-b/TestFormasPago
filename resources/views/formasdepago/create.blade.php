@extends('layouts.sbadmin')

@section('content')
    {!! Form::model($formadepago = new \App\FormaDePago, ['url' => '/formasdepago']) !!}
        @include('formasdepago.formFormasdepago')
    {!! Form::close() !!}
@endsection
