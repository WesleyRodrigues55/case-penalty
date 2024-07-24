<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Representative;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function index()
    {
        $query = Customer::join('representantes', 'clientes.representante_id', '=', 'representantes.id')->select('clientes.*', 'representantes.nome as representante_nome'); 

        $clientes = $query->paginate(2);
        $representantes = Representative::all();
        $data = [
            "clientes" =>  $clientes,
            "representantes"   => $representantes
        ];
        return view("customers.index", compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:representantes',
            'telefone_1' => 'required|string|max:15',
            'telefone_2' => 'nullable|string|max:15',
            'representante_id' => 'required|exists:representantes,id',
        ]);

        $data = $request->only([
            'nome', 'email', 'telefone_1', 'telefone_2', 'representante_id'
        ]);

        if ($request->input('tipo_pessoa') === 'fisica') {
            $request->validate([
                'cpf' => 'nullable|string|max:14|unique:representantes', 
                'data_nascimento' => 'nullable|date|before_or_equal:' . Carbon::now()->subYears(18)->format('Y-m-d'),
            ]);

            $data['cpf'] = $request->input('cpf');
            $data['data_nascimento'] = $request->input('data_nascimento');
            $data['cnpj'] = null;
            $data['data_fundacao'] = null;

        } elseif ($request->input('tipo_pessoa') === 'juridica') {
            $request->validate([
                'cnpj' => 'nullable|string|max:18|unique:representantes',
                'data_fundacao' => 'nullable|date',
            ]);

            $data['cnpj'] = $request->input('cnpj');
            $data['data_fundacao'] = $request->input('data_fundacao');
            $data['cpf'] = null;
            $data['data_nascimento'] = null;
        }

        try {
            Customer::create($data);
    
            return redirect()->route('customers.index')->with('success', 'Client created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('customers.index')->with('error', 'An error occurred while creating the client. Please try again.');
        }
    }
    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'representante_id' => 'required|exists:representantes,id',
        ]);

        try {
            $cliente = Customer::findOrFail($id);
            $cliente->where('id', $id)
                ->update($request->only([
                    'representante_id'
                ]));

            return redirect()->route('customers.index')->with('success', 'Customer Representative Updated Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('customers.index')->with('error', 'An error occurred while updating the customer representative. Please try again.');
        }
    }

    public function create()
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
