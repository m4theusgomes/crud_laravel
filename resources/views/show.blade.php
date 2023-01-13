<link rel="stylesheet" href="/css/show.css">

@extends("index")
@section("content")

<div class="main_table">
    <header class="main_table_header">
        <article>
            <h1>Listagem de Usuário</h1>
        </article>
    </header>
</div>

<div class="main_table_content">
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Status</th>
            <th></th>
            <th></th>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->birthdate }}</td>
            <td>@if ($user->status == true) Ativo @else Inativo @endif</td>
            <td>
                <form action="{{ route('form.edit', $user->id) }}" method="GET">
                    @csrf
                    <button type="submit" class="btn_update">Editar</button>
                </form>
            </td>
            <td>
                <form action="{{ route('form.delete', $user->id) }}" method="GET">
                    @csrf
                    <button type="submit" class="btn_delete">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

{{ $users->links() }}
@endsection
