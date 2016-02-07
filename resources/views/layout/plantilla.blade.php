<!DOCTYPE html>
    <html>
    <head>
        <title>GreenPointer</title>

        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
        <link href="/style/panel.css" rel="stylesheet" type="text/css" />
        <style>

        </style>
    </head>
    <body>
    <div class="container">
        <div class="content">
            <div class="title">Gestor de Incidencias de <div class="green">Green</div><div class="point">Pointer</div></div>
        </div>
    </div>
    <div>
        <div class="listadoIncidencias">
            <ul style="list-style: none">
                @yield('listado')
            </ul>
        </div>
        <div class="detallesIncidencia">
            @yield('detalles')
        </div>
    </div>
    </body>
    </html>