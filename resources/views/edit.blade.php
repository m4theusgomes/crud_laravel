<link rel="stylesheet" href="/css/create.css">

@extends("index")
@section("content")
<section>
    <div class="main_table">
        <header class="main_table_header">
            <article>
                <h1>Editar Usuário</h1>
            </article>
        </header>
    </div>

    <div class="form_content">
        <form action="{{ route('form.update') }}" method="post">
            <h2>{{ $user->status }}</h2>
            @csrf
            <input type="hidden" name='id' value="{{ $user->id }}">

            <label for="name">Nome</label>
            <input class='input' name="name" placeholder="Nome" value="{{ $user->name }}">

            <label for="email">Email</label>
            <input class='input' type="email" name="email" placeholder="Email" value="{{ $user->email }}">

            <label for="email">Data de Nascimento</label>
            <input class='input' type="date" name="birthDate" placeholder="Data de Nascimento" value="{{ $user->birthdate }}">

            <label for="status">Status</label>
            <input type="checkbox" name="status" @if ($user->status == 1) @checked(true) @endif>

            <input class='input' type="submit" value="Cadastrar">
        </form>
    </div>
</section>
@endsection
