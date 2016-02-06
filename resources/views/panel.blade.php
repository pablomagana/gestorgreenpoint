<!DOCTYPE html>
<html>
    <head>
        <title>GreenPointer</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100px;
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
                max-height: 100px;
                text-align: center;
                /*display: table-cell;*/
                vertical-align: top;
                margin-bottom: 25px;
                margin-top: 25px;
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
                width: 450px;
                max-height: 875px;
                background: #bcf6d4;
                float: left;
                display: inline-block;
                overflow: scroll;
            }
            .detallesIncidencia{
                height: 875px;
                padding-left: 500px;
                /*float:right;
                display: inline-block;*/
                background: #00802b;
            }
            .listadotituloincidencia{
                float: left;
            }
            .incidenciaautor{
                float: right;
            }
            .listadotituloincidencia,.cabeceraincidencia p
            {
               display:inline-block ;
            }
            .incidenciadescripcion{
                float: left;
                border-bottom: 1px solid #f7e1b5;
            }
            li{
                margin-right: 30px;
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
            }
            .btnresolver:active{
                background-color: #128744;
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
                    <li>
                        <span class="cabeceraincidencia">
                            <h4 class="listadotituloincidencia">Contenedor organico en llamas </h4><p class="incidenciaautor"> MªJesus Olmos</p>
                        </span>
                        <span class="incidenciadescripcion">
                            <p>Paseando por la calle pude fijarme en una pequeña luz muy tenue naranja que resplandecia crepitosamente arrojando un olor bastante desagradable a plastico quemado.Llevada por la curiosidad, acabe de cruzar la esquina y descubri que el contenedor donde siempre tiro mi basura ardia en llamas en la calle alcala</p>
                        </span>
                    </li>
                    <li>
                        <span class="cabeceraincidencia">
                            <h4 class="listadotituloincidencia">Contenedor organico en llamas </h4><p class="incidenciaautor"> MªJesus Olmos</p>
                        </span>
                        <span class="incidenciadescripcion">
                            <p>Paseando por la calle pude fijarme en una pequeña luz muy tenue naranja que resplandecia crepitosamente arrojando un olor bastante desagradable a plastico quemado.Llevada por la curiosidad, acabe de cruzar la esquina y descubri que el contenedor donde siempre tiro mi basura ardia en llamas en la calle alcala</p>
                        </span>
                    </li>
                    <li>
                        <span class="cabeceraincidencia">
                            <h4 class="listadotituloincidencia">Contenedor organico en llamas </h4><p class="incidenciaautor"> MªJesus Olmos</p>
                        </span>
                        <span class="incidenciadescripcion">
                            <p>Paseando por la calle pude fijarme en una pequeña luz muy tenue naranja que resplandecia crepitosamente arrojando un olor bastante desagradable a plastico quemado.Llevada por la curiosidad, acabe de cruzar la esquina y descubri que el contenedor donde siempre tiro mi basura ardia en llamas en la calle alcala</p>
                        </span>
                    </li>
                    <li>
                        <span class="cabeceraincidencia">
                            <h4 class="listadotituloincidencia">Contenedor organico en llamas </h4><p class="incidenciaautor"> MªJesus Olmos</p>
                        </span>
                        <span class="incidenciadescripcion">
                            <p>Paseando por la calle pude fijarme en una pequeña luz muy tenue naranja que resplandecia crepitosamente arrojando un olor bastante desagradable a plastico quemado.Llevada por la curiosidad, acabe de cruzar la esquina y descubri que el contenedor donde siempre tiro mi basura ardia en llamas en la calle alcala</p>
                        </span>
                    </li>
                    <li>
                        <span class="cabeceraincidencia">
                            <h4 class="listadotituloincidencia">Contenedor organico en llamas </h4><p class="incidenciaautor"> MªJesus Olmos</p>
                        </span>
                        <span class="incidenciadescripcion">
                            <p>Paseando por la calle pude fijarme en una pequeña luz muy tenue naranja que resplandecia crepitosamente arrojando un olor bastante desagradable a plastico quemado.Llevada por la curiosidad, acabe de cruzar la esquina y descubri que el contenedor donde siempre tiro mi basura ardia en llamas en la calle alcala</p>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="detallesIncidencia">
                <div><h3 class="titulo">Incidencia Nº&nbsp;&nbsp;</h3> <p class="nin">59</p><p class="estadoresuelta">Resuelta : </p><h4 class="estadoresuelta">NO</h4>
                </div>
                <div>
                    <h5>Usuario</h5><p>Pepet Woody</p>
                </div>
                <h2>Contenedor organico en llamas</h2>
                <p>Paseando por la calle pude fijarme en una pequeña luz muy tenue naranja que resplandecia crepitosamente arrojando un olor bastante desagradable a plastico quemado.Llevada por la curiosidad, acabe de cruzar la esquina y descubri que el contenedor donde siempre tiro mi basura ardia en llamas en la calle alcala</p>
                <img height="300px" src="https://yoyocronaldo7.files.wordpress.com/2008/07/homer-simpson-bum.jpg" alt="Imagen de incidencia no disponible">
                <a class="btnresolver" ng-click="resolver()">Resolver Incidencia<a/>
            </div>
        </div>
    </body>
</html>
