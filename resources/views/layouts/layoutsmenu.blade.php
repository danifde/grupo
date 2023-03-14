<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <link rel="stylesheet" type="text/css" href="estilosmenu.css">
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

/* contenedor numero 1 */
.container{
  position: center;
  margin: 0 auto;
  background: #ABDCFE ;
  width: 1000px;
  height: 256px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 15px;
}

.container hr{
  min-width: 1000px;
}

.container h3{
  padding-left: 25px;
}

.container p{
  padding-left: 30px;
}



.button {
  position: relative;
  bottom: 0; left: 780px;
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
margin: 0 3%; /* posicion del boton */
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
  color: #000;
}

/* contenedor numero 2 */

.container-1{
  position: center;
  margin: 0 auto;
  background: #ABDCFE ;
  width: 1000px; 
  height: 256px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 15px;
}

.container-1 hr{
    min-width: 1000px;
}

.container-1 h3{
  padding-left: 25px;
}

.container-1 p{
  padding-left: 30px;

}



.button3 {
  margin: 0 3%; /*posicion del boton*/
  background-color: #008CBA; 
  color: black; 
  border: 2px solid #008CBA;
  border-radius: 5px;
  }
  
  .button3:hover {
  background-color: white;
  color: #008CBA;
  }

  .button3 a{
    text-decoration: none;
    color: #000;
  }




</style>
<body>
    <ul class="menu">
    <li><a href="http://127.0.0.1:8000/nuevohilo">Menú principal</a> </li>
    <li><a href="http://127.0.0.1:8000/responder">Dashboard</a> </li>
    <li><a href="http://127.0.0.1:8000/nuevohilo">Crear Hilo</a> </li>
    </ul>
    
    <br>
    <br>
    <br>
    <br>

    <div class="container">
    <div class="input-box">
    <h3>Tema: Programacion</h3>
    <hr>
    <p>Autor: Monica Sepulveda</p>
    <p>Fecha: 5/03/2023</p>
    <button class="button button2"><a href="http://127.0.0.1:8000/responder">Responder</a></button>
    </div>
    </div>


    <br>
    <br>
    <br>
    <br>

    <div class="container-1">
    <div class="input-box">
    <h3>Tema: Programacion</h3>
    <hr>
    <p>Autor: Ana luisa</p>
    <p>Fecha: 5/03/2023</p>
    <button class="button button3"><a href="http://127.0.0.1:8000/responder">Responder</a></button>
</div>
</div>
</body>
</html>
@yield('body')