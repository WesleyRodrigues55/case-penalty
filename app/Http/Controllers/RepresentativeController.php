<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Representative;


class RepresentativeController extends Controller
{
    public function index(Request $request)
    {
        $query = Representative::query();

        if ($request->has('nome') && !empty($request->input('nome'))) {
            $query->where('nome', 'like', '%' . $request->input('nome') . '%');
        }

        if ($request->has('email') && !empty($request->input('email'))) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }

        $representantes = $query->paginate(2);
        return view('representatives.index', compact('representantes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:representantes',
            'cep' => 'required|string|max:10',
            'logradouro' => 'required|string|max:50',
            'numero' => 'required|string|max:20',
            'bairro' => 'required|string|max:50',
            'cidade' => 'required|string|max:50',
            'uf' => 'required|string|size:2',
        ]);

        try {
            Representative::create($request->all());

            return redirect()->route('representatives.index')->with('success', 'Successfully created representative.');
        } catch (\Exception $e) {
            return redirect()->route('representatives.index')->with('error', 'An error occurred while creating the representative. Please try again.');
        }
    }


    public function destroy(string $id)
    {
        $representante = Representative::findOrFail($id);

        try {
            $representante->delete();

            return redirect()->route('representatives.index')->with('success', 'Representative Deleted Successfully.');
        } catch (\Exception $e) {
            return redirect()->route('representatives.index')->with('error', 'An error occurred while deleting the representative. Please try again.');
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

    public function update(Request $request, string $id)
    {
        //
    }
}
