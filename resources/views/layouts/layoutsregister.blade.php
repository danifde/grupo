<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, user-scalabe=yes, initial-scale=1.0, maximum-scale=3.0, minium-scale=1.0">
<meta http-equiv="X-UA-compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">
<title>Registro</title>
<link rel="shortcut icon" href="icons8-circled-user-male-skin-type-1-and-2-80.png">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: arial,helvetica;

}

body {
    background-color: #1F293A;
}
.form-register {
    width: 500px;
    background: #3f3f3f;
    padding: 30px;
    margin: auto;
    margin-top: 100px;
    border-radius: 4px;
    /*font-family: 'calibri';*/
    color: white;
    box-shadow: 7px 13px 37px rgb(0, 0, 0);
}

.form-register h4 {
    font-size:22px ;
    margin-bottom: 20px;
}

.controls {
    width: 100%;
    background: #424242;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 16px;
    border: 1px solid #265c86;
    /*font-family: 'calibri';*/
    font-size: 18px;
}

.form-register p {
    height: 40px;
    text-align: center;
    font-size: 18px;
    line-height: 40px;
}

.form-register a:hover {
    color: white;
    text-decoration: underline;
}

.form-register .botons {
    width: 100%;
    background: #182e7c ;
    border: none;
    padding: 12px;
    color: white;
    margin: 16px 0;
    font-size: 16px;
}

.form-register p a{
    text-decoration: none;
    color: rgb(238, 50, 50);

}

</style>
<body>
    <section class="form-register">
        <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombres"   id="nombres" placeholder="Ingrese su nombre" >
    <input class="controls" type="text" name="apellidos"   id="apellidos" placeholder="Ingrese su apellido" >
    <input class="controls" type="email" name="correo"   id="correo" placeholder="Ingrese su correo" >    
    <input class="controls" type="password" name="contraseña"   id="contraseña" placeholder="Ingrese su contraseña" >
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <p><a href="http://127.0.0.1:8000/">resgistrar</a></p>
    <p><a href="http://127.0.0.1:8000/">Ya tengo cuenta</a></p>

</section>  

</body>
@yield('body')