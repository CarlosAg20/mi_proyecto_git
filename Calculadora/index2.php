<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>Calculadora PHP</title>
</head>
<body>
  <form action="" name="" method="post">
    <div class="box">
      <div class="nombre">Número 1 </div>
      <input class="valor" type="number" value="" name="n1"/>
    </div>

 

    <div class="box">
      <div class="nombre">Operación</div>
      <select class="select" name="operador">
          <option value="1">+</option>
          <option value="2">-</option>
          <option value="3">*</option>
          <option value="4">/</option>
      </select>
    </div>

    <div class="box">
      <div class="nombre">Número 2</div>
      <input class="valor" type="number" value="" name="n2"/>
    </div>

    <div class="box">
      <div class="nombre">Resultado:</div>
      <h1 id="resultado"><?php echo calcularResultado(); ?></h1> 
    </div>

    <div class="box">
      
      <button type="reset" onclick="limpiarResultado()">Limpiar</button>
      <button type="submit">Operar</button>
    </div>

  </form>

  <script>
        function limpiarResultado() {
            document.getElementById("resultado").textContent = "";
        }
    </script>
</body>
</html>

<?php
function calcularResultado() {
    if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['operador'])) {
        if ($_POST['n1'] /*|| $_POST['n2']*/ == "") {
          return "Debe poner Valores";
        }
        $n1 = floatval($_POST['n1']);
        $n2 = floatval($_POST['n2']);
        $operador = $_POST['operador'];
        //if ($n1 /*|| $n2*/ == "50") {
        /*  return "Debe poner Valore555s";
        }
        else {*/

          switch ($operador) {
              case '1':
                  return $n1 + $n2;
              case '2':
                  return $n1 - $n2;
              case '3':
                  return $n1 * $n2;
              case '4':
                  if ($n2 != 0) {
                      return $n1 / $n2;
                  } else {
                      return "No se puede dividir por cero.";
                  }
              default:
                  return "Operador no válido.";
          //}
        }
    }
}
function LimpiarRes() {
  $s = "";
  return $s;
}
 
?>
