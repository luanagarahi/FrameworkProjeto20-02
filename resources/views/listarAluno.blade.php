<html>
<body>
<div>
    <h1>Lista de Alunos</h1>
    @error('erro')
        <div>{{ $message }}</div>
    @enderror

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
        <tbody>
            <tr>
                <td>{{ $aluno->id }}</td>
                <td>{{ $aluno->nome }}</td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>


