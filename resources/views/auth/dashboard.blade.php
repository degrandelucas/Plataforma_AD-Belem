<!DOCTYPE html>
<html>
    <head>
        <title>Painel de Controle</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">
                <header class="d-flex justify-content-between align-items-center mb-4 px-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icone-curso.jpg') }}" alt="Logo do Curso" class="img-fluid mr-3" style="max-width: 100px;">
                        <h1 class="mb-0 d-none d-md-block">Bem-vindo ao Painel de Controle, {{ Auth::user()->name }}!</h1>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </header>
            </div>
        </div>
    </body>
</html>
