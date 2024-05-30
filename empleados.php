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
        <h3>Empleados</h3>
        <table border="1" class="tabla">
            <tr class="tr1">
                <td class="text-center">identificación</td>
                <td class="text-center">Nombres</td>
                <td class="text-center">Apellidos</td>
                <td class="text-center">Fecha de ingreso</td>
                <td class="text-center">Salario</td>
                <td class="text-center">Cargo</td>
                <td class="text-center">Direccion</td>
                <td class="text-center">Teléfono</td>
                <td class="text-center">Correo</th>
            </tr>
            <?php
            $sql="SELECT * FROM empleados";
            $resul=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($resul)){
            ?>
            <tr class="tr2">
                <td><?php echo $mostrar['identificación']?></td>
                <td><?php echo $mostrar['Nombres']?></td>
                <td><?php echo $mostrar['Apellidos']?></td>
                <td><?php echo $mostrar['FechaIngreso']?></td>
                <td><?php echo $mostrar['Salario']?></td>
                <td><?php echo $mostrar['Cargo']?></td>
                <td><?php echo $mostrar['Dirección']?></td>
                <td><?php echo $mostrar['Teléfono']?></td>
                <td><?php echo $mostrar['Email']?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>

<div class="formu">
    <button id="mostrarFormularioEmpleados">Ingresar nuevo registro</button>
</div>
<br>
<div class="formulario" id="formularioEmpleados" style="display: none;">
    <form method="POST">
        <br>
        <label>identificación</label>
        <input type="text" name="iden">
        <br><br>
        <label>Nombres</label>
        <input type="text" name="nombre">
        <br><br>
        <label>Apellidos</label>
        <input type="text" name="apellido">
        <br><br>
        <label>Fecha de ingreso</label>
        <input type="date" name="fechain">
        <br><br>
        <label>Salario</label>
        <input type="text" name="sal">
        <br><br>
        <label>Cargo</label>
        <input type="text" name="carg">
        <br><br>
        <label>Direccion</label>
        <input type="text" name="dir">
        <br><br>
        <label>Teléfono</label>
        <input type="text" name="tele">
        <br><br>
        <label>Correo</label>
        <input type="text" name="email">
        <br><br>
        <button type="submit">guardar</button>
    </form>
</div>
<script>
    document.getElementById('mostrarFormularioEmpleados').addEventListener('click', function() {
        var formulario = document.getElementById('formularioEmpleados');
        formulario.style.display = 'block';
    });
</script>

<?php
if($_POST){
    $ide = $_POST['iden'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechain = $_POST['fechain'];
    $sal = $_POST['sal'];
    $carg = $_POST['carg']; 
    $dir = $_POST['dir'];
    $tele=$_POST['tele'];
    $email=$_POST['email'];
    

   
    $ingresarDatos = "INSERT INTO empleados (`identificación`, `Nombres`, `Apellidos`, `FechaIngreso`, `Salario`, `Cargo`, `Dirección`, `Teléfono`, `Email`) 
                      VALUES ('$ide', '$nombre', '$apellido', '$fechain', '$sal', '$carg', '$dir','$tele','$email')";
    $ejecutar = mysqli_query($conexion, $ingresarDatos);
}
?>
</body>
</html>
