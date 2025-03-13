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
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password" required><br><br>
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit">Registrar</button>
</form>
</body>
</html>
