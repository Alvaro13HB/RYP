<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;

class controllerRate extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Rate::all();
        return view('exibirPessoas', compact('dados')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoPessoa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Rate();
        $dados->nomePessoa = $request->input('nomePessoa');
        $dados->notaPessoa = $request->input('notaPessoa');
        $dados->save();
        return redirect('/pessoas')->with('success', 'Pessoa cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Rate::find($id);
        if(isset($dados)){
            return view('editarPessoa', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Rate::find($id);
        if(isset($dados)){
            $dados->nomePessoa = $request->input('nomePessoa');
            $dados->notaPessoa = $request->input('notaPessoa');
            $dados->save();
            return redirect('/pessoas')->with('success', 'Pessoa atualizada com sucesso!');
        }
        return redirect('/pessoas')->with('danger', 'Erro ao atualizar pessoa.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Rate::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/pessoas')->with('success', 'Pessoa apagada com sucesso!');
        }
        return redirect('/pessoas')->with('danger', 'Erro ao apagar pessoa.');
    }


    public function pesquisarPessoa(){
        return view('pesquisaPessoa');
    }

    
    public function procurarPessoa(){
        $nome = $request->input('nomePessoa');
        $dados = DB::table('rates')->select('id', 'nomePessoa', 'notaPessoa')->where(DB::raw('lower(nomePessoa)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirPessoas', compact('dados'));
    }
}
