<h1>Tarefas</h1>

<a href="{{ route('tarefas.create') }}">Nova tarefa</a>

@forelse ($tarefas as $tarefa)
    <div>
        {{ $tarefa->titulo }} ({{ $tarefa->status }})
        <a href="{{ route('tarefas.edit', $tarefa) }}">Editar</a>

        <form action="{{ route('tarefas.destroy', $tarefa) }}" method="POST" style="display:inline"
              onsubmit="return confirm('Excluir esta tarefa?')">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </div>
@empty
    <p>Nenhuma tarefa ainda.</p>
@endforelse