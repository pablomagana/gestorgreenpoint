<!DOCTYPE html>
<html>
    <head>
        <title>GreenPointer</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
                background: #f7ecb5;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }
            .green{
                font-weight: 900;
                color:#2b542c;
                display: inline-block;
            }
            .point{
                font-weight: 900;
                color:#5e5e5e;
                display: inline-block;
            }
            .incidenciaLink{
                text-align: center;
                font-weight: 400;
                font-size: 50px;
                color: #888a85;
            }
            .incidenciaLink:visited{
                color: #888a85;
            }

            .title {
                font-size: 96px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Gestor de Incidencias de <div class="green">Green</div><div class="point">Pointer</div></div>
                <div class="incidenciaLink"><a href="/panel">Ir al panel de Incidencias</a></div>
            </div>
        </div>
        <div class="listadoIncidencias"><p>asdsa</p></div>
        <div class="detallesIncidencia"><p>asd</p></div>

    </body>
</html>
