
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Formulario</title>
</head>

<body>
    <header class="main_header">
        <div class="main_header_content">
            <h1>Primeiro CRUD em Laravel</h1>

            <nav class="main_header_content_nav">
                <ul>
                    <li><a href="{{ route('show.create') }}">Cadastrar</a></li>
                    <li><a href="{{ route('show.home') }}">Consultar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield("content")
</body>

</html>
