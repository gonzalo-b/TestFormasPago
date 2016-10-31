@extends('layouts.sbadmin')

@section('content')'
    <div class="row content top-buffer">

        <div class="col-md-6 noMgBot">
            <div class="form-group lessPadding">
                <label>Detalle</label>
                <input class="form-control" value="{{ $formadepago->detalle }}" readonly>
            </div>
            <div class="form-group lessPadding">
                <label>Tipo Forma de Pago</label>
                <input class="form-control" value="{{ (config('settings.tipos-formas-depago')[$formadepago->tipofpago]) }}" readonly>
            </div>
            <div class="form-group lessPadding">
                <label>Permite emisión de cheque diferidos? </label>
                {{Form::checkbox('diferido', true ,$formadepago->diferido, ['class' => 'mRight58', 'disabled'])}}
            </div>
            <div class="form-group lessPadding">
                <label>Permite impresión de cheque por el sistema? </label>
                {{Form::checkbox('impcheque', true ,$formadepago->impcheque, ['class' => 'mRight10', 'disabled'])}}
            </div>
            @if($formadepago->cuit)
            <div class="form-group lessPadding">
                <label>CUIT</label>
                <input class="form-control" value="{{ $formadepago->cuit }}" readonly>
            </div>
            @endif
            @if($formadepago->cbu)
            <div class="form-group lessPadding">
                <label>CBU</label>
                <input class="form-control" value="{{$formadepago->cbu }}" readonly>
            </div>
            @endif
            @if($formadepago->cuenta_contable)
            <div class="form-group lessPadding">
                <label>Cuenta Contable</label>
                <input class="form-control" value="{{ $formadepago->cuenta_contable  }}" readonly>
            </div>
            @endif
            @if($formadepago->moneda)
                <div class="form-group lessPadding">
                    <label>Moneda</label>
                    <input class="form-control" value="{{ (config('settings.tipos-moneda') [$formadepago->moneda])  }}" readonly>
                </div>
            @endif
            <div class="form-group">
                <div class="col-lg-12 center">
                    <a href="{{ url('formasdepago')  }}" class="btn btn-danger btn-md separte">
                        VOLVER
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
