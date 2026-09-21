<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loggin CEKALIX SAC</title>
</head>
<body>
    <h1>Iniciar Sesión mi Rey 👑</h1>

    <!--"Cuando envíe este formulario, manda los datos mediante POST a la URL /login."-->
    <form method="POST" action="/login">
        @csrf

        <label for="email">Correo electrónico: </label>
        <input type="text" id="email" name="email">

        <br><br>

        <label for="password">Contraseña: </label>
        <input type="password" id="password" name="password">

        <br><br>

        <button type="submit">Iniciar Sesion</button>


    </form>
    
</body>
</html>