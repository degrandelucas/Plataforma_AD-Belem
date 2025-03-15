<!DOCTYPE html>
<html>
    <head>
        <title>Painel de Controle</title>
    </head>
    <body>
            <h1>Bem-vindo ao Painel de Controle!</h1>
            <p>Você está logado.</p>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
    </body>
</html>
