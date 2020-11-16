<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

$users = DB::table('usuarios')->where('nombreusuario', '=', $_POST['usuario'])->first();

//var_dump($users);

if ($_POST['password'] == $users->password){
    $mensaje='<h1>BIENVENIDO</h1> <a class="button" href="iniciado.html">Entrar al sistema</a>';
}
else{
    $mensaje='El usuario o contraseña es incorrecto';
}
echo <<<_HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar</title>
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
</head>
<body>
    {$mensaje}
</body>
</html>
_HTML;