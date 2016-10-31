{{ csrf_field() }}

<div class="form-group formHeader">
    <h2> {{ isset($edit) ? 'Editar ': 'Nueva' }} Forma de Pago</h2>
</div>

<div class="form-group{{ $errors->has('detalle') ? ' has-error' : '' }}">
    {{Form::text('detalle', null, ['class' => 'form-control', 'maxlength'=>'60', 'placeholder' => 'Detalle'])}}

    @if ($errors->has('detalle'))
        <span class="help-block">
            <strong>{{ $errors->first('detalle') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('tipofpago') ? ' has-error' : '' }}">
    <label> Tipo de Forma de Pago</label>

    {{Form::select('tipofpago', config('settings.tipos-formas-depago'), null, ['class' => 'form-control', 'id' => 'tipofpago'])}}

    @if ($errors->has('tipofpago'))
        <span class="help-block">
            <strong>{{ $errors->first('tipofpago') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('diferido') ? ' has-error' : '' }} camposBanco">
    <label> Permite emisión de cheque diferidos?</label>
    {{Form::checkbox('diferido', true ,$formadepago->diferido, ['class' => 'mRight58'])}}

    @if ($errors->has('diferido'))
        <span class="help-block">
                <strong>{{ $errors->first('diferido') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('impcheque') ? ' has-error' : '' }} camposBanco">
    <label>Permite impresión de cheque por el sistema?</label>
    {{Form::checkbox('impcheque', true ,$formadepago->impcheque, ['class' => 'mRight10'])}}

    @if ($errors->has('impcheque'))
        <span class="help-block">
                <strong>{{ $errors->first('impcheque') }}</strong>
        </span>
    @endif
</div>


<div class="form-group{{ $errors->has('cuit') ? ' has-error' : '' }} camposBanco">
    {{Form::text('cuit', null, ['class' => 'form-control', 'maxlength'=>'60', 'placeholder' => 'CUIT'])}}

    @if ($errors->has('cuit'))
        <span class="help-block">
                <strong>{{ $errors->first('cuit') }}</strong>
        </span>
    @endif
</div>


<div class="form-group{{ $errors->has('cbu') ? ' has-error' : '' }} camposBanco">
    {{Form::text('cbu', null, ['class' => 'form-control', 'maxlength'=>'60', 'placeholder' => 'CBU'])}}

    @if ($errors->has('cbu'))
        <span class="help-block">
            <strong>{{ $errors->first('cbu') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('cuenta_contable') ? ' has-error' : '' }}">
    {{Form::text('cuenta_contable', null, ['class' => 'form-control', 'maxlength'=>'60', 'placeholder' => 'Cuenta Contable'])}}

    @if ($errors->has('cuenta_contable'))
        <span class="help-block">
            <strong>{{ $errors->first('cuenta_contable') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('moneda') ? ' has-error' : '' }}">
    <label> Moneda</label>

    {{Form::select('moneda', config('settings.tipos-moneda'), null, ['class' => 'form-control'])}}

    @if ($errors->has('moneda'))
        <span class="help-block">
            <strong>{{ $errors->first('moneda') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <div class="col-lg-12 center final">
        <a href="{{ url('formasdepago')  }}" class="btn btn-danger btn-md separte">
            CANCELAR
        </a>
        <button type="submit" class="btn btn-success btn-md separte">
            {{ isset($edit) ? 'Actualizar': 'CREAR' }}
        </button>
    </div>
</div>

{{-- Javascript --}}
@push('scripts')
<script>
    $('#tipofpago').change(function () {
        console.log($(this).val());
    })
</script>
@endpush