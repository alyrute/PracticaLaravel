<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<h2>Bienvenido</h2>

@if(session('status'))
    <div style="color: green;">{{ session('status') }}</div>
@endif

<a href="{{ url('/logout') }}">Cerrar sesión</a>

</body>
</html>
