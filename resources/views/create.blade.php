<link rel="stylesheet" href="/css/create.css">

@extends("index")
@section("content")
<section>
    <div class="main_table">
        <header class="main_table_header">
            <article>
                <h1>Cadastro de Usuário</h1>
            </article>
        </header>
    </div>

    <div class="form_content">
        <form action="{{ route('form.create') }}" method="post">
            @csrf

            <label for="name">Nome</label>
            <input class='input' type="text" name="name">
            {{ $errors->first('name') }}

            <label for="email">Email</label>
            <input class='input' type="email" name="email">
            {{ $errors->first('email') }}

            <label for="birthDate">Data de Nascimento</label>
            <input class='input' type="date" name="birthDate" placeholder="Data de Nascimento">
            {{ $errors->first('birthDate') }}

            <label>Status</label>
            <input type="checkbox" name="status">

            <input class='input' type="submit" value="Cadastrar">
        </form>
    </div>
</section>
@endsection
