@extends('layouts.sbadmin')

@section('content')'
    {!! Form::model($formadepago, ['role' => 'form', 'method' => 'PATCH', 'url' => ["formasdepago/". $formadepago->id ], 'files'=>true]) !!}
        @include('formasdepago.formFormasdepago', [ 'edit' => true] )
    {!! Form::close() !!}
@endsection
