<!DOCTYPE html>
    <html>
    <head>
        <title>GreenPointer</title>

        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <style>
            html, body {
                height: 100px;
                background: #8CDE8C;

            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Merriweather Sans', sans-serif;
            }

            .container {
                max-height: 100px;
                text-align: center;
                /*display: table-cell;*/

                vertical-align: top;
                margin-bottom: 5px;
                margin-top: 25px;
                box-shadow: 0px 5px 0px 0px #2ecc71;
            }

            .content {
                text-align: center;
                display: inline-block;

            }
            .green{
                font-weight: 400;
                color:#2b542c;
                font-size: 40px;
                display: inline-block;
            }
            .point{
                font-weight: 400;
                color:#5e5e5e;
                font-size: 40px;
                display: inline-block;
            }
            .title {
                font-size: 30px;
            }
            .listadoIncidencias{
                width: 450px;
                min-height: 875px;
                max-height: 875px;
                background: #AAE282;
                float: left;
                display: inline-block;
                overflow-y:auto;
            }
            .detallesIncidencia{
                height: 875px;
                padding-left: 500px;
                /*float:right;
                display: inline-block;*/
                background: #8CDE8C
            }

            .incidenciaautor{
                float: right;
                padding-right: 10px;
            }
            .listadotituloincidencia,.cabeceraincidencia p
            {
                display:inline-block ;
            }
            .incidenciadescripcion{
                /*float: left;*/
                min-width: 350px;
                min-height: 50px;

            }
            li div{
                padding-left:30px;
                border-bottom: 3px solid #2ecc71;
            }
            .seleccionalerta{
                height: auto;
                min-width: 400px;
                min-height: 50px;
                background: #8CDE8C;
            }
            .seleccionalerta,.incidenciadescripcion{

            }
            ul{
                margin: 0px;
                padding:0px;
            }
            li:hover{
                cursor:pointer;
            }
            /**
            **
            */
            .titulo,.nin,.estadoresuelta{
                display: inline-block;
                margin-right: 30px;
            }
            .btnresolver{
                position:fixed;
                top: 100px;
                right:50px;
                padding:7px;
                background-color: #2ecc71;
                box-shadow: 0px 5px 0px 0px #15B358;}

            .btnresolver:hover {
                background-color: #48E68B;
                cursor:pointer;
            }
            .btnresolver:active{
                background-color: #15B358;
            }
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
    <script type="text/javascript">
        $(document).ready(function () {
            $(".imgincidencia").attr("src","../img/alerticon.png");
        });

    </script>
    </body>
    </html>