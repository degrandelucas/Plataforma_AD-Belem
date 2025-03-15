<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <h1>Login</h1>
    <form method="POST" action="/login">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Lembrar-me</label><br><br>

        <button type="submit">Entrar</button>
    </form>
    </body>
</html>
