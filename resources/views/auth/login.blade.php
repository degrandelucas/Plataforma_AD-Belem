<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form method="POST" action="/login">
    @csrf
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password" required><br><br>
    <button type="submit">Entrar</button>
</form>
</body>
</html>
