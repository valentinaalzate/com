
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
        <h3>Catálogo</h3>
            <table border="1" class="tabla">
                <tr class="tr1">
                    <td class="text-center">Código del producto</td>
                    <td class="text-center">Nombre</td>
                    <td class="text-center">Descripción</td>
                    <td class="text-center">Precio de compra</td>
                    <td class="text-center">Precio de venta</td>
                    <td class="text-center">Cantidad</td>
                    <td class="text-center">Estado</td>
                    <td class="text-center">Fotografía</td>
                </tr>
                <?php
                $sql="SELECT * FROM catálogo";
                $resul=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($resul)){

                ?>
                <tr class="tr2" >
                   <td><?php echo $mostrar['Código_Producto']?></td>
                   <td><?php echo $mostrar['Nombre']?></td>
                   <td><?php echo $mostrar['Descripción']?></td>
                   <td><?php echo $mostrar['Precio_Compra']?></td>
                   <td><?php echo $mostrar['Precio_Venta']?></td>
                   <td><?php echo $mostrar['Cantidad']?></td>
                   <td><?php echo $mostrar['Estado']?></td>
                   <td><img style="width: 100px;" src="imagenes/<?php echo $mostrar['Fotografía']?>" alt="<?php echo $mostrar['Nombre']?>"></td>

                   
                 
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        </div>
        

    </div>
    <div class="formu">
    <button id="mostrarFormularioCatalogo">Ingresar nuevo registro</button>
</div>

<br>

<div class="formulario" id="formularioCatalogo" style="display: none;">
    <form method="POST">
        <br><br>
        <label for="identi">Código del producto</label>
        <input type="text" name="cod">
        <br><br>
        <label for="nom">Nombre</label>
        <input type="text" name="nombre">
        <br><br>
        <label for="ape">Descripción</label>
        <input type="text" name="des">
        <br><br>
        <label for="dire">Precio de compra</label>
        <input type="text" name="precom">
        <br><br>
        <label for="tel">Precio de venta</label>
        <input type="text" name="preven">
        <br><br>
        <label for="correo">Cantidad</label>
        <input type="text" name="canti">
        <br><br>
        <label for="gen">Estado</label>
        <input type="text" name="es">
        <br><br>
        <label for="gen">Fotografía</label>
        <input type="file" name="foto">
        <br><br>
        <button>Guardar</button>
    </form>
</div>
    <script>
   document.getElementById('mostrarFormularioCatalogo').addEventListener('click', function() {
    var formulario = document.getElementById('formularioCatalogo');
    formulario.style.display = 'block';
});

    </script>
   <?php
if($_POST){
    $cod = $_POST['cod'];
    $nombre = $_POST['nombre'];
    $des = $_POST['des'];
    $precom = $_POST['precom'];
    $preven = $_POST['preven'];
    $canti = $_POST['canti']; // Este campo debería ser 'canti' en lugar de 'cantidad'
    $es = $_POST['es'];
    $foto = $_POST['foto'];

    // Modifica la consulta de inserción para que coincida con la estructura de la tabla catálogo
    $ingresarDatos = "INSERT INTO catálogo (Código_Producto, Nombre, Descripción, Precio_Compra, Precio_Venta, Cantidad, Estado, Fotografía) 
                      VALUES ('$cod', '$nombre', '$des', '$precom', '$preven', '$canti', '$es', '$foto')";
    $ejecutar = mysqli_query($conexion, $ingresarDatos);
}
?>
</body>
</html>

