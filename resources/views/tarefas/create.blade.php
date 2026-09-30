<h1>Nova tarefa</h1>

<form action="{{ route('tarefas.store') }}" method="POST">
    @csrf

    <p>
        <input type="text" name="titulo" placeholder="Título" value="{{ old('titulo') }}">
        @error('titulo') <br><small>{{ $message }}</small> @enderror
    </p>

    <p>
        <textarea name="descricao" placeholder="Descrição">{{ old('descricao') }}</textarea>
    </p>

    <p>
        <input type="date" name="prazo" value="{{ old('prazo') }}">
    </p>

    <button type="submit">Salvar</button>
</form>