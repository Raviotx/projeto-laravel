<h1>Lista de Tarefas</h1>
<a href="{{ route('tarefas.create') }}">Nova Tarefa</a>

<table border="1">
    <tr>
        <th>Título</th>
        <th>Concluída</th>
        <th>Ações</th>
    </tr>
    @foreach($tarefas as $tarefa)
    <tr>
        <td>{{ $tarefa->titulo }}</td>
        <td>{{ $tarefa->concluida ? 'Sim' : 'Não' }}</td>
        <td>
            <a href="{{ route('tarefas.edit', $tarefa->id) }}">Editar</a>
            <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
