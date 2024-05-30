
<?php
$conexion=mysqli_connect('localhost','root','','supermercado');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Northwind</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header>
        <h1>Supermercado Northwind</h1>
    </header>
    <div class="container">
        <nav>
            <ul class="menu">
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="empleados.php">Empleados</a></li>
                <li><a href="catalogo.php">Catalogo</a></li>
                <li><a href="proveedores.php">Proveedores</a></li>
                <li><a href="factura.php">Factura</a></li>
                <li><a href="facturaProducto.php">Factura del producto</a></li>
            </ul>
        </nav>
    </div>

    <div class="con">
        <div class="colsm">
        <h3>Factura</h3>
            <table border="1" class="tabla">
                <tr class="tr1">
                    <td class="text-center">Número de factura</td>
                    <td class="text-center">Fecha</td>
                    <td class="text-center">Hora</td>
                    <td class="text-center">Identificación del empleado</td>
                    <td class="text-center">Nombre del empleado</td>
                    <td class="text-center">Apellido del empleado</td>
                    <td class="text-center">Cargo del empleado</th>
                    <td class="text-center">Tipo de pago</th>
                    <td class="text-center">Valor</th>
                </tr>
                <?php
                $sql="SELECT * FROM facturas f INNER JOIN empleados e ON f.Empleado  = e.identificación";
                $resul=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($resul)){

                ?>
                <tr class="tr2">
                   <td><?php echo $mostrar['NoFactura']?></td>
                   <td><?php echo $mostrar['Fecha']?></td>
                   <td><?php echo $mostrar['Hora']?></td>
                   <td><?php echo $mostrar['identificación']?></td>
                   <td><?php echo $mostrar['Nombres']?></td>
                   <td><?php echo $mostrar['Apellidos']?></td>
                   <td><?php echo $mostrar['Cargo']?></td>
                   <td><?php echo $mostrar['TipoPago']?></td>
                   <td><?php echo $mostrar['Valor']?></td>
                 
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        </div>
        

    </div>
    <div class="formu">
    <button id="mostrarFormularioFactura">Ingresar nuevo registro</button>
</div>

<br>
<div class="formulario" id="formularioFactura" style="display: none;">
    <form method="POST">
        <br><br>
        <label>Número de factura</label>
        <input type="text" name="num">
        <br><br>
        <label>Fecha</label>
        <input type="date" name="fecha">
        <br><br>
        <label>Hora</label>
        <input type="text" name="hora">
        <br><br>
        <label>Empleado</label>
        <select name="emple" id="emple">
            <?php
            // Consulta para obtener los códigos de producto y nombres de la tabla catálogo
            $consultaEmpleado = "SELECT identificación , Nombres FROM empleados";
            $resultadoEmpleado = mysqli_query($conexion, $consultaEmpleado);
            while ($filaempleado = mysqli_fetch_assoc($resultadoEmpleado)) {
                echo '<option value="' . $filaempleado['identificación'] . '">' . $filaempleado['Nombres'] . '</option>';
            }
            ?>
        </select>
        <br><br>
        <label for="tipo">Tipo de pago</label>
        <input type="text" name="tipo">
        <br><br>
        <label>Valor</label>
        <input type="text" name="valor">
        <br><br>
        <button>Guardar</button>
    </form>
</div>

    <script>
   document.getElementById('mostrarFormularioFactura').addEventListener('click', function() {
    var formulario = document.getElementById('formularioFactura');
    formulario.style.display = 'block';
});

    </script>
    <?php
if($_POST){
    $num=$_POST['num'];
    $fecha=$_POST['fecha']; 
    $hora=$_POST['hora'];
    $empleado=$_POST['emple'];
    $tipo=$_POST['tipo'];
    $valor=$_POST['valor'];

    $ingresarDatos="INSERT INTO facturas (`NoFactura`, `Fecha`, `Hora`, `Empleado`, `TipoPago`, `Valor`) 
                    VALUES ('$num','$fecha','$hora','$empleado','$tipo','$valor')";
    $ejecutar=mysqli_query($conexion, $ingresarDatos);
}
?>
</body>
</html>

