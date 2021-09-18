<?php 
	if($_POST) {

		date_default_timezone_set("America/Argentina/Buenos_Aires");
		$fechaActual = date('d-m-Y', time());
		$dia = $_POST['dia'];
		$mes = $_POST['mes'];
		$anio = $_POST['anio'];
        $diferencia = strtotime($anio.'-'.$mes.'-'.$dia)-strtotime($fechaActual);

        /*
        lo realice de asi ya que la manera en que lo habia resuelto anteriormente tenia problemas con el primer dia del mes,
        creo que el error es debido a que algunos meses no tienen 31 dias

        mi idea original era $fecha_ingresada = date("$dia-$mes-$anio"); y luego compararla con $fechaActual;
        pero tenia el error que te comente al ingresar el primer dia del mes
        */

		if($diferencia > 0){
			echo '<p> Falta/n '.$diferencia / (86400).' día/s para la fecha seleccionada</p>';}
		if($diferencia <= 0){
			echo "<p> Debe seleccionar una fecha posterior a : ".$fechaActual."</p>";}
		}
?>