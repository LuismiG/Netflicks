<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8" />
    <style type="text/css">
        body {
            font-family: verdana;
        }

        header {
            padding: 20px;
            font-size: 2em;
            font-weight: bold;
            background-color: slateblue;
            color: white;
            margin-bottom: 15px;
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
            background-color: black;
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

    </style>

</head>

<body>
    <header>
        Streaming | Login
    </header>
    <section>
        <article>
            Identificación:
               
                <form action='validar.php' method='post'>
            <table>
              <tr>
                  <br>
                  <td>DNI:</td>
                    <td><input type='text' name='dni' size='20' maxlength='9' placeholder='Dni' required='required' /></td></tr>
                    <tr><td>Contraseña: </td>
                 <td><input type='password' name='clave' size='20' maxlength='20' placeholder='Contraseña' required='required' /></td></tr>
                <tr><td><input type='submit' value='Validar' /></tr>
                </table></form>
        </article>
    </section>
</body>

</html>
