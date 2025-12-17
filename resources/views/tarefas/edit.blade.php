<h1>Editar Tarefa</h1>
<form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="titulo" value="{{ $tarefa->titulo }}">
    <label>
        Concluída
        <input type="checkbox" name="concluida" value="1" {{ $tarefa->concluida ? 'checked' : '' }}>
    </label>
    <button type="submit">Atualizar</button>
</form>
<a href="{{ route('tarefas.index') }}">Voltar</a>
