<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Hilo</title>
    <link rel="stylesheet" type="text/css" href="estilosnuevohilo.css">
    <link rel="shortcut icon" href="icons8-circled-user-male-skin-type-1-and-2-80.png">

</head>
<style>
    body{
    font-family: arial,helvetica;
    background: #e8e8e8;

}

.menu{
    list-style: none;
    padding: 0;
    background: #1f293a ;
    width: 100%;
    /*max-width: 1000px; poner el menu mas pequeño*/
    margin: auto;
}

.menu li a{
    text-decoration: none;
    color: white;
    padding: 20px;
    display: block;
}

.menu li{
    display: inline-block; /*ponerlo a lo largo el texto*/
    text-align: center;
}

.menu li a:hover{
    background: #ef8354; /*modificar el background cada que pase el cursor*/
}

.contenedor .form .form-header .form-title{  /*Para la N de nuevo hilo*/
    font-weight: normal;
    font-family: arial,helvetica;
    color: #000000;
    text-align: center;
    padding: 14px 0;
}

.contenedor .form .form-header .form-title span{
    color: #000000;
}


.contenedor .form{
    background: #ABDCFE;
    width: 100%;
    max-width: 650px;
    margin: auto;
    padding: 5px 35px;
    margin-top: 30px;
    padding-bottom: 30px;
    border-radius: 5px;
}


.contenedor .form .form-input, .form-textarea{
    background: #ABDCFE; /* color de titulo y texto */
    border: none;
    outline: none;
    border-bottom: 2px solid #fff;
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border-radius: 2px;
    font-size: 20px; /*tamaño del titulo y texto*/
    color: #000000;
    font-family: Roboto;
}

.contenedor .form .form-textarea{
    resize: vertical;
    max-height: 150px;
    min-height: 50px;
}

.button {
    position: relative;
    bottom: 0; left: 540px;
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
  }


.button2 {
    margin: 0 auto; /*posicion del boton*/
    background-color: #008CBA; 
    color: black; 
    border: 2px solid #008CBA;
    border-radius: 5px;
}

.button2:hover {
  background-color: white;
  color: #008CBA;
  }

.button2 a{
    text-decoration: none;
    color: #000000;
}
</style>
<body>
    <ul class="menu">
    <li><a href="http://127.0.0.1:8000/menu">Menú principal</a> </li>
    <li><a href="http://127.0.0.1:8000/responder">Dashboard</a> </li>
    <li><a href="http://127.0.0.1:8000/nuevohilo">Crear Hilo</a> </li>
    </ul>

    
    <div class="contenedor">
        <form action="" class="form">
            <div class="form-header">
            <h1 class="form-title">C<span>rear Hilo</span></h1>
            <input type="text" class="form-input" placeholder="Titlo del Hilo">
            <textarea id="mensaje" class="form-textarea" placeholder="Texto de hilo"></textarea>
            <button class="button button2"><a href="http://127.0.0.1:8000/menu">Crear</a></button>
        
        </div>
    </form>
</div>
</body>
</html>
@yield('body')