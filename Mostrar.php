<?php

include_once('mostrar.php');

$mujeres = 0;
$hombres_casados2500 = 0;
$mujeres_viudas_m1000 = 0;
$edad_hombres = 0;
$cantidad_hombres = 0;
$promedio_edad_hombres = 0;

for ($i = 1; $i <= 5; $i++) {

    $nombre_apellido = $_POST['nombre_apellido_' . $i];
    $edad = $_POST['edad_' . $i];
    $estado_civil = $_POST['estado_civil_' . $i];
    $sexo = $_POST['sexo_' . $i];
    $sueldo = $_POST['sueldo_' . $i];

    if ($sexo == 'femenino') {
        $mujeres++;
    }

    if ($sexo == 'masculino' && $estado_civil == 'casado' && $sueldo == '+2500') {
        $hombres_casados2500++;
    }
 
    if ($sexo == 'femenino' && $estado_civil == 'viudo' && $sueldo == '1000-2500') {
        $mujeres_viudas_m1000++;
    }
    
    if ($sexo == 'masculino') {
        $edad_hombres += $edad;
        $cantidad_hombres++;
        if ($cantidad_hombres > 0) {
            
            $promedio_edad = $edad_hombres / $cantidad_hombres;
        }
        
     }

}

echo "<div style='text-align: left; background-color: rgb(157, 245, 182);'>";
echo "<br>" . "<br>" . "RESULTADOS DEL REGISTRO" . "<br>";
echo "<br>" . "<br>" .  "<div  style='text-align: left;'>" . "Total de empleados del sexo femenino: "  . $mujeres . "</div>" . "<br>";
echo "<div  style='text-align: left;'>" . "Total de hombres casados que ganan más de 2500 Bs.: " . $hombres_casados2500 . "</div>" . "<br>";
echo "<div  style='text-align: left;'>" . "Total de mujeres viudas que ganan más de 1000 Bs.: " .$mujeres_viudas_m1000 . "</div>" . "<br>";
echo "<div  style='text-align: left;'>" . "Promedio de edad de los hombres: " . $promedio_edad . "</div>" . "<br>";
echo "</div>";
?>