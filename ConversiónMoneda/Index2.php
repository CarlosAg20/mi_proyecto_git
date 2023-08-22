<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles2.css">
  <title>Calculadora PHP</title>
</head>
<body>
  <form action="" name="" method="post">
    <div class="box">
      <div class="nombre">COP $</div>
      <input class="valor" type="number" value="" name="n1"/>
    </div>

 

    <div class="box">
      <div class="nombre">Divisa</div>
      <select class="select" name="operador">
          <option value="1">USD</option>
          <option value="2">EUR</option>
          <option value="3">INR</option>
      </select>
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
    if (isset($_POST['n1']) && isset($_POST['operador'])) {
        if ($_POST['n1'] /*|| $_POST['n2']*/ == "") {
          return "Debe poner Valores";
        }
        $n1 = floatval($_POST['n1']);
        $operador = $_POST['operador'];
        //if ($n1 /*|| $n2*/ == "50") {
        /*  return "Debe poner Valore555s";
        }
        else {*/

          switch ($operador) {
              case '1':
                  return $n1 * 0.00024;
              case '2':
                  return $n1 * 0.00022;
              case '3':
                  return $n1 * 0.020;
              default:
                  return "Divisa no válida.";
          //}
        }
    }
}
function LimpiarRes() {
  $s = "";
  return $s;
}
 
?>
