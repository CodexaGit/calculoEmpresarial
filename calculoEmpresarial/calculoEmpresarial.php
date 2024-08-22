<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
    <div class="botones">
        <h1>¿QUE QUIERE CALCULAR?</h1>
        <button id="IMESI2" onclick="IMESI()">IMESI</button>
        <button id="ICOSA2" onclick="ICOSA()">ICOSA</button>
        <button id="patrimonio2" onclick="patrimonio()">Impuesto al patrimonio</button>
        <button id="ITP2" onclick="ITP()">ITP</button>
    </div>
    <form id="IMESI"  method="POST">
        <label for="precioVenta">Precio de venta</label>
        <input type="number" required min="0" name="precioVenta">
        <input type="submit" name="botonIMESI">
    </form>
    <form id="ICOSA" method="POST">
        <label for="montoComision">Monto de la comision</label>
        <input type="number" required min="0" name="montoComision">
        <input type="submit" name="botonICOSA">
    </form>
    <form id="patrimonio" method="POST">
        <label for="patrimonioNeto">Patrimonio neto</label>
        <input type="number" required min="0" name="patrimonioNeto">
        <input type="submit" name="botonPatrimonio">
    </form>
    <form id="ITP" method="POST">
        <label for="valorBien">Valor del bien</label>
        <input type="number" required min="0" name="valorBien">
        <input type="submit" name="botonITP">
    </form>
    <div class="resultado">
    <?php
        if(isset($_POST['botonIMESI'])){
            $precioVenta = $_POST['precioVenta'];
            $IMESI = $precioVenta * 0.10;
            echo "<h2>El IMESI a pagar es (10%): $IMESI</h2>";
            $precioTotal = $precioVenta - $IMESI;
            echo "<h2>El monto descontando los impuestos es: $precioTotal</h2>";
        }else if(isset($_POST['botonICOSA'])){
            $montoComision = $_POST['montoComision'];
            $ICOSA = $montoComision * 0.05;
            echo "<h2>El ICOSA a pagar es (5%): $ICOSA</h2>";
            $montoTotal = $montoComision - $ICOSA;
            echo "<h2>El monto descontando los impuestos es: $montoTotal</h2>";
        }else if(isset($_POST['botonPatrimonio'])){
            $patrimonioNeto = $_POST['patrimonioNeto'];
            $patrimonio = $patrimonioNeto * 0.02;
            echo "<h2>El impuesto al patrimonio a pagar es (2%): $patrimonio</h2>";
            $patrimonioTotal = $patrimonioNeto - $patrimonio;
            echo "<h2>El patrimonio descontando los impuestos es: $patrimonioTotal</h2>";
        }else if(isset($_POST['botonITP'])){
            $valorBien = $_POST['valorBien'];
            $ITP = $valorBien * 0.04;
            echo "<h2>El ITP a pagar es (4%): $ITP</h2>";
            $valorTotal = $valorBien - $ITP;
            echo "<h2>El monto de la comision descontando los impuestos es: $valorTotal</h2>";
        }
    ?>    
    </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>