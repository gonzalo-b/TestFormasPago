<?php

namespace App\Http\Controllers;

use App\FormaDePago;
use App\Http\Requests\FormaDePagoRequest;
use Illuminate\Http\Request;

class FormasDePagoControlller extends Controller
{
    public function index()
    {
        return view('formasdepago.index');
    }


    public function create()
    {
        return view('formasdepago.create');
    }

    public function store(FormaDePagoRequest $request)
    {
        $formadepago = new FormaDePago($request->all());
        $formadepago->save();

        session()->put('success', 'Forma de pago creada correctamente');
        return redirect('formasdepago');
    }

    public function show(FormaDePago $formadepago)
    {
        $data['formadepago'] = $formadepago;
        return view('formasdepago.show', $data);
    }

    public function edit(FormaDePago $formadepago)
    {
        $data['formadepago'] = $formadepago;
        return view('formasdepago.edit', $data);
    }

    public function update(FormaDePagoRequest $request,FormaDePago $formadepago)
    {
        $formadepago->update($request->all());
        $formadepago->save();

        session()->put('success', 'Forma de pago was successfully updated.');
        return redirect('formasdepago');
    }

    public function destroy(FormaDePago $formadepago)
    {
        $formadepago->delete();

        session()->put('success', 'Forma de pago was successfully deleted.');
        return redirect('formasdepago');
    }
}
