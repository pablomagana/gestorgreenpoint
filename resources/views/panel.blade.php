@extends('layout.plantilla')

@section('detalles')<!--modulo de detalles de incidencia-->

<div><h3 class="titulo">Incidencia Nº&nbsp;&nbsp;</h3>

    <p class="nin">59</p>

    <p class="estadoresuelta">Resuelta : </p><h4 class="estadoresuelta">NO</h4>
</div>
<div>
    <h5>Usuario</h5>

    <p>Pepet Woody</p>
</div>
<h2>Contenedor organico en llamas</h2>
<p>Paseando por la calle pude fijarme en una pequeña luz muy tenue naranja que resplandecia crepitosamente arrojando
    un olor bastante desagradable a plastico quemado.Llevada por la curiosidad, acabe de cruzar la esquina y
    descubri que el contenedor donde siempre tiro mi basura ardia en llamas en la calle alcala</p>
<img height="300px" src="https://yoyocronaldo7.files.wordpress.com/2008/07/homer-simpson-bum.jpg"
     alt="Imagen de incidencia no disponible">
<a class="btnresolver" ng-click="resolver()">Resolver Incidencia</a>

@stop

@section('listado')<!--modulo de listado de incidencias-->
<?php
foreach ($incidencias as $incidencia) {
    if ($incidencia->id_alerta==2){
       echo ("<li>
                <div class='seleccionalerta'>");
    }else{
        echo ("<li>
                <div>");
    }
    echo("
     <h4 class='listadotituloincidencia'>$incidencia->tipo</h4>
     <p class='incidenciaautor'> $incidencia->email_usuario</p>
    <p class='incidenciadescripcion'>$incidencia->descripcion</p>
    </div>
</li>");
}
?>

@stop
