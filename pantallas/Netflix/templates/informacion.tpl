<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Index</title>
    <style>
        body {
            font-family: verdana;
            background-color: darkslategrey;
        }

        header {
            padding: 20px;
            font-size: 1em;
            font-weight: bold;
            background-color: black;
            color: white;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
        }
        
        h1{
            color: white;
        }

        article {
            width: 80%;
            margin: 0 auto;
            text-align: justify;
        }

        table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        tr:nth-child(even) {
            background-color: #cacaca;
        }

        th {
            background-color: blue;
            color: white;
        }

        th,
        td {
            padding: 10px;
        }

        .arriba {
            border-top: 1px solid black;
        }

        .enlaceboton {
            text-decoration: none;
            color: white;
            border: 1px solid black;
            padding: 5px;
            background-color: red;
            border-radius: 43px 43px 43px 43px;
            -moz-border-radius: 43px 43px 43px 43px;
            -webkit-border-radius: 43px 43px 43px 43px;
            border: 2px solid white;
        }

        .enlace {
            border: 3px solid black;
            margin-right: 5px;
        }

        #footer {
            position: fixed;
            left: 0px;
            bottom: 0px;
            height: 30px;
            width: 100%;
            background: #999;
            font-size: .8em;
            font-weight: bold;
            color: white;
        }

        .nada {
            font-size: .5em;
        }

        caption {
            background-color: green;
            color: white;
            font-weight: bold;
        }
        
        main {
            display: inline-flex;
        }
        
        div#cerrar {
            padding-top: 15px;
        }
        

    </style>
</head>
<body>
    <header>
        <div>
            <img src="imgNetflix/Netflicks.png" alt="logo" height="50">
        </div>
        <div id="cerrar">
            <a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a>
        </div>
    </header>
    <a href='index.php' class='enlace'>Volver</a>
    <form action="reproductor.php" method="post">
          <input type="hidden" name="codigo" value="{$video->codigo}" />
          <input type="image" src="imgNetflix/boton.png" height="100" width="100" alt="Boton" value="Submit" />
    </form>
    {if $descargable eq "S"}
    <form action="descargar.php" method="post">
          <input type="hidden" name="codigo" value="{$video->codigo}" />
          <input type="image" src="imgNetflix/descargar.png" height="70" width="302" alt="btnDescarga" value="Submit" />
    </form>
    {/if}
    <main>
        <article>
            <h1>{$video->titulo}</h1>
            <img src="carteles/{$video->cartel}" alt="Cartel" height="300" width="225"><br />
            <p>{$video->sinopsis}</p> 
        </article>
    </main>
    <!--<p>{$video->sinopsis}</p><br />-->
    
</body>
</html>