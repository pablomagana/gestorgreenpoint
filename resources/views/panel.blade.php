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
                vertical-align: top;
            }

            .content {
                text-align: center;
                display: inline-block;
            }
            .green{
                font-weight: 400;
                color:#2b542c;
                display: inline-block;
            }
            .point{
                font-weight: 400;
                color:#5e5e5e;
                display: inline-block;
            }

            .title {
                font-size: 20px;
            }
            .listadoIncidencias{
                width: 30%;
                height: 100%;
                background: #2b542c;
            }
            .detallesIncidencia{
                width: 70%;
                height: 100%;
                background: #ff6666;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Gestor de Incidencias de <div class="green">Green</div><div class="point">Pointer</div></div>
            </div>
        </div>
        <div class="listadoIncidencias"></div>
        <div class="detallesIncidencia"></div>
    </body>
</html>
