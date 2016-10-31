@extends('layouts.sbadmin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lista de Formas de Pago
                <a href="{{ url('/formasdepago/create') }}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus-circle"></i> Nueva Forma de Pago</a>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover table-actions" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Detalle</th>
                        <th>Tipofpago</th>
                        <th class="center">Diferido</th>
                        <th class="center">Impcheque</th>
                        <th>Cbu</th>
                        <th colspan="3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX">

                    </tr>
                    @forelse($formasdepago as $formadepago)
                        <tr>
                            <td>{{ ucfirst($formadepago->detalle) }}</td>
                            <td>{{ (config('settings.tipos-formas-depago')[$formadepago->tipofpago]) }}</td>
                            <td align="center">
                                <label>
                                    {{Form::checkbox('welfare[]', true, $formadepago->diferido ? '1' : '0')}}
                                </label>
                            </td>
                            <td  align="center">
                                <label>
                                    {{Form::checkbox('welfare[]', true, $formadepago->impcheque ? '1' : '0')}}
                                </label>
                            </td>
                            <td>{{ $formadepago->cbu }}</td>

                            <td align="center">
                                <a href="{{ url('/formasdepago/'.$formadepago->id ) }}" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a>
                            </td>
                            <td>
                                <a href="{{ URL::to('/formasdepago/'.$formadepago->id).'/edit' }}">
                                    <button class="btn btn-xs btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="fa fa-pencil-square-o"> </i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <button class="delBot btn btn-xs btn-danger" data-id ="{{$formadepago->id}}" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                {!! Form::open(array('url' => '/formasdepago/' . $formadepago->id, 'id' => 'submit'.$formadepago->id, 'class' => 'pull-right'))  !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Sites Were Found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
