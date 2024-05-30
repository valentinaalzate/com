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
        <h3>Factura Del Producto</h3>
        <table border="1" class="tabla">
            <tr class="tr1">
                <td class="text-center">Id</td>
                <td class="text-center">Nombre del producto</td>
                <td class="text-center">Código del producto</td>
                <td class="text-center">Precio de compra</td>
                <td class="text-center">Cantidad</td>
                <td class="text-center">Descuento</td>
                <td class="text-center">Subtotal</th>
            </tr>
            <?php
            $sql="SELECT * FROM factura_producto f INNER JOIN catálogo c ON f.Producto  = c.Código_Producto";
            $resul=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($resul)){
            ?>
            <tr class="tr2">
                <td><?php echo $mostrar['ID']?></td>
                <td><?php echo $mostrar['Nombre']?></td>
                <td><?php echo $mostrar['Código_Producto']?></td>
                <td><?php echo $mostrar['Precio_Compra']?></td>
                <td><?php echo $mostrar['Cantidad']?></td>
                <td><?php echo $mostrar['Descuento']?></td>
                <td><?php echo $mostrar['Subtotal']?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>

<div class="formu">
    <button id="mostrarFormularioFacturapro">Ingresar nuevo registro</button>
</div>

<br>

<div class="formulario" id="formularioFacturapro" style="display: none;">
    <form method="POST">
        <br><br>
        <label for="id">Id</label>
        <input type="text" name="id">
        <br><br>
        <label for="prod">Producto</label>
        <select name="prod" id="prod">
            <?php
            // Consulta para obtener los códigos de producto y nombres de la tabla catálogo
            $consultaProductos = "SELECT Código_Producto, Nombre FROM catálogo";
            $resultadoProductos = mysqli_query($conexion, $consultaProductos);
            while ($filaProducto = mysqli_fetch_assoc($resultadoProductos)) {
                echo '<option value="' . $filaProducto['Código_Producto'] . '">' . $filaProducto['Nombre'] . '</option>';
            }
            ?>
        </select>
        <br><br>
        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad">
        <br><br>
        <label for="des">Descuento</label>
        <input type="text" name="des">
        <br><br>
        <label for="sub">Subtotal</label>
        <input type="text" name="sub">
        <br><br>
        <button type="submit">Guardar</button>
    </form>
</div>

<script>
    document.getElementById('mostrarFormularioFacturapro').addEventListener('click', function() {
        var formulario = document.getElementById('formularioFacturapro');
        formulario.style.display = 'block';
    });
</script>

<?php
if($_POST){
    $id=$_POST['id'];
    $Producto=$_POST['prod']; 
    $cantidad=$_POST['cantidad'];
    $Descuento=$_POST['des'];
    $Subtotal=$_POST['sub'];

    $ingresarDatos="INSERT INTO factura_producto (ID, Producto, Cantidad, Descuento, Subtotal) 
                    VALUES ('$id','$Producto','$cantidad','$Descuento','$Subtotal')";
    $ejecutar=mysqli_query($conexion, $ingresarDatos);
}
?>
</body>
</html>
