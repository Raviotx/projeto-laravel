<!DOCTYPE html>
<html>
<head>
    <title>Nova Tarefa</title>
</head>
<body>
    <h1>Nova Tarefa</h1>

    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Título" required>
        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('tarefas.index') }}">Voltar</a>
</body>
</html>
