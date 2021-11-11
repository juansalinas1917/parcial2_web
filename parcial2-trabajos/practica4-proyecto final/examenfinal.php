<html lang="en">
<head><!DOCTYPE html>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>examen de Programacion </title>
</head>
<body style="background-image: url(madera.jpg)" style="background-position: center">
	<font face="Yu Gothic UI Semibold" color="#dadae4">
	

<?php 
	
	$cal = 0;

	$Nombre_a = $_GET['Nombre_a'];
	echo "<br> El nombre del alumno es: " . $Nombre_a;


	$Pregunta_1 = $_GET['Pregunta_1'];
	$resp_1 = "¿Qué hace php?";
	if ($Pregunta_1 == $resp_1) {
		echo "<br><br><br> 1.buena respuesta <br><br>";
		$cal++;
	} else {
		echo "<br><br><br> 1.buena respuesta ;) <br><br>";
	}


	$Pregunta_2 = $_GET['Pregunta_2'];
	if ($Pregunta_2 == "a") {
		echo "<br> 2.¿Qué es bootstrap? :<br> a) es para fechas Muy buena respuesta, Que bueno que es correcta :D <br> b. es para numeros <br> c. es para tiempo <br><br>";
		$cal++;
	} if ($Pregunta_2 == "b") {
		echo "<br> 2.Que hace el dato Date: <br> a. es para fechas  <br> b. es para numeros (respuesta incorrecta) <br> c. es para tiempo <br><br>";
	} if ($Pregunta_2 == "c") {
		echo "<br> 2.Que hace el dato Date: <br> a. es para fechas  <br> b. es para numeros <br> c. es para tiempo (respuesta incorrecta) <br><br>";
	}


	$Pregunta_3 = $_GET["Pregunta_3"];
    $resp2 = "Consultar";
     if ( $Pregunta_3 == $resp2) {
    	echo "<br> 3. ¿Qúe es Xampp? Muy buena respuesta, Que bueno que es correcta :D <br><br>";
    	$cal++;
    }else {
    	echo "<br> 3. ¿Qúe es Xampp?  Muy buena respuesta, lastima que es incorrecta ;) <br><br> ";
    }


    $Pregunta_4 = $_GET["Pregunta_4"];
     $resp3 = "Las cadenas de texto";
     if ( $Pregunta_4 == $resp3) {
    	echo "<br> 4. Cuales son las Array: <br>Respuesta correcta :) <br><br> ";
    	$cal++;
    }else {
    	echo "<br> 4. Cuales son las Array: <br>respuesta incorrecta :( <br><br> ";
    }


    $Pregunta_5 = $_GET["Pregunta_5"];
    if ($Pregunta_5 == "1") {
    	echo "<br> 5. ¿Cómo se implementa bootstrap?: <br>Respuesta correcta :) <br><br> ";
    	$cal++;
    } else {
    	echo "<br>  5. ¿Cómo se implementa bootstrap?: <br>respuesta incorrecta :( <br><br> ";
    }
    

    $Pregunta_6 = $_GET["Pregunta_6"];
      if ( $Pregunta_6 == "c") {
      echo "<br> 6. Elementos de Css: <br> a.  phpmyadmin  <br> b. phpmyadmin workbench  <br> c. localhost (respuesta correcta) <br><br> ";
      $cal++;
    } if ($Pregunta_6 == "b") {
      echo "<br> 6. Elementos de Css: <br> a.  phpmyadmin  <br> b. phpmyadmin workbench (respuesta incorrecta) <br> c. localhost <br><br> ";
    }if ($Pregunta_6 == "a") {
      echo "<br> 6. Elementos de Css: <br> a. phpmyadmin (respuesta incorrecta) <br> b. phpmyadmin workbench <br> c. localhost  <br><br> ";
    }


    $Pregunta_7 = $_GET["Pregunta_7"];
     if ($Pregunta_7 == "1") {
    	echo "<br> 7. Elementos de bootstrap: <br>Respuesta correcta :) <br><br> ";
    	$cal++;
    } else {
    	echo "<br> 7. Elementos de bootstrap: <br>respuesta incorrecta :( <br><br> ";
    }


     $Pregunta_8 = $_GET["Pregunta_8"];
     if ( $Pregunta_8 == "a") {
      echo "<br> 8. ¿Qué codigo se puede utilizar para personalizar font-font?: <br> a.  echo (respuesta correcta)  <br> b. printf  <br> c. char  <br><br> ";
      $cal++;
    } if ($Pregunta_8 == "b") {
      echo "<br> 8. ¿Qué codigo se puede utilizar para personalizar font-font?: <br> a.  echo  <br> b. printf (respuesta incorrecta) <br> c. char <br><br> ";
    }if ($Pregunta_8 == "c") {
      echo "<br> 8. ¿Qué codigo se puede utilizar para personalizar font-font?: <br> a. echo (respuesta incorrecta) <br> b. printf <br> c. char  <br><br> ";
    }


    $Pregunta_9 = $_GET["Pregunta_9"];
     if ($Pregunta_9 == "1") {
      
             
    	echo "<br> 9. Que tiene un falso y verdadero: <br>Respuesta correcta :) <br><br> ";
    	$cal++;
     
    }if ($Pregunta_9 == "2") {
             
      echo "<br> 9. Que tiene un falso y verdadero: <br>Respuesta correcta :) <br><br> ";
      $cal++;
     }if ($Pregunta_9 == "0") {
    
    	echo "<br> 9. Que tiene un falso y verdadero: <br>respuesta incorrecta :( <br><br> ";
    }


    $Pregunta_10 = $_GET["Pregunta_10"];
    $resp10 = "Programacion";
    if ( $Pregunta_10 == $resp10) {
    	echo "<br> 10. ¿Cómo se llama el maestro de esta materia?: <br>Respuesta correcta :) <br><br> ";
    	$cal++;
    	 }else {
    	echo "<br> 10.¿Cómo se llama el maestro de esta materia?: <br>respuesta incorrecta :( <br><br> ";
    }

    echo " Es: " . "$cal/10";

	if ($cal == 10) {
		echo "<br>Impresionante, Buen trabajo";
	}if  ($cal == 9) {
    	echo "<br>Muchas felicidades! ;)";
    }if  ($cal == 8) {
    	echo "<br>Ey! hey los hiciste genia! ";
    }if ($cal == 7) {
    	echo "<br>mmm vuelve intentarlo ";
    }if ($cal == 6) {
    	echo "<br>bien, pudiste hacerlo mejor !";
    }if ($cal <= 5) {
    	echo "<br>mmm... No te desanimas, tu puedes. <br>";
    }

	
 ?>
</font>
 </body>
</html>