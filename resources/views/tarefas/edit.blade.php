<h1>Editar tarefa</h1>

<form action="{{ route('tarefas.update', $tarefa) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        <input type="text" name="titulo" value="{{ old('titulo', $tarefa->titulo) }}">
        @error('titulo') <br><small>{{ $message }}</small> @enderror
    </p>

    <p>
        <textarea name="descricao">{{ old('descricao', $tarefa->descricao) }}</textarea>
    </p>

    <p>
        <select name="status">
            @foreach (['a_fazer' => 'A fazer', 'fazendo' => 'Fazendo', 'feito' => 'Feito'] as $valor => $rotulo)
                <option value="{{ $valor }}" @selected(old('status', $tarefa->status) === $valor)>{{ $rotulo }}</option>
            @endforeach
        </select>
    </p>

    <p>
        <input type="date" name="prazo" value="{{ old('prazo', $tarefa->prazo) }}">
    </p>

    <button type="submit">Atualizar</button>
</form>