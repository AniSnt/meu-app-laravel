<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * lista todas as tarefas.
     */
    public function index()
    {
        $tarefas = Tarefa::latest()->get();

        return view('tarefas.index', ['tarefas' => $tarefas]);
    }

    /**
     * mostra o formulário de nova tarefa.
     */
    public function create()
    {
        return view('tarefas.create');
    }

    /**
     * salva a tarefa nova no banco.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo'    => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'prazo'     => 'nullable|date',
        ]);

        Tarefa::create($dados);

        return redirect()->route('tarefas.index');
    }

    /**
     * mostra uma tarefa específica.
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * mostra o formulário de edição.
     */
    public function edit(Tarefa $tarefa)
    {
        return view('tarefas.edit', ['tarefa' => $tarefa]);
    }

    /**
     * salva a edição no banco.
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        $dados = $request->validate([
            'titulo'    => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'status'    => 'required|in:a_fazer,fazendo,feito',
            'prazo'     => 'nullable|date',
        ]);

        $tarefa->update($dados);

        return redirect()->route('tarefas.index');
    }

    /**
     * exclui a tarefa do banco.
     */
    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();

        return redirect()->route('tarefas.index');
    }
}