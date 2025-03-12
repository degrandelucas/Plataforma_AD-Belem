<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
<h1>Registro</h1>
<form method="POST" action="/register">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password" required><br><br>
    <button type="submit">Registrar</button>
</form>
</body>
</html>
