@extends('layout.plantilla')

@section('detalles')<!--modulo de detalles de incidencia-->
<?php
foreach ($incidencias as $incidencia) {
    if($incidencia->id_alerta== $indice){
        echo("
            <div><h3 class='titulo'>Incidencia Nº&nbsp;&nbsp;</h3>

            <p class='nin'>$incidencia->id_alerta</p>

            <p class='estadoresuelta'>Resuelta : </p><h4 class='estadoresuelta'>
            ");
        if($incidencia->reparado==0){
            echo("NO");
        }else{
            echo("SI");
        }
        echo("
            </h4>
            </div>
            <div>
            <h5>Usuario</h5>
            <p>$incidencia->email_usuario</p>

            <p>$incidencia->fecha</p>
            </div>
            <h2>$incidencia->tipo</h2>
            <p>$incidencia->dir_contenedor</p>
            <p>$incidencia->descripcion</p>
             ");

        echo '<img src="data:image/jpg;base64,' .$incidencia->imagen . '"  alt="imagen no disponible"/>';
        if($incidencia->reparado==0){
            echo("
            <a class='btnresolver' onclick='window.location.href = \"../../panel/resolver/$incidencia->id_alerta\"'>Resolver Incidencia</a>
        ");
        }
    }
}
?>

@stop

@section('listado')<!--modulo de listado de incidencias-->
<?php
foreach ($incidencias as $incidencia) {
    if ($incidencia->id_alerta == $indice) {
        echo("<li>
                <div class='seleccionalerta'>");
    } else {
        echo("<li onclick='window.location.href = \"../../panel/$incidencia->id_alerta\"'>
                <div>");
    }
    echo("
    <img src='../../img/alerticon.png' width='25px' height='25px'/>
     <h4 class='listadotituloincidencia'>$incidencia->tipo</h4>
     <p class='incidenciaautor'> $incidencia->email_usuario</p>
    <p class='incidenciadescripcion'>$incidencia->descripcion</p>
    </div>
</li>");
}
?>

@stop
