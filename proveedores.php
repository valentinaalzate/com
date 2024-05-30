
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
        <h3>Proveedores</h3>
            <table border="1" class="tabla">
                <tr class="tr1">
                    <td class="text-center">Nit</td>
                    <td class="text-center">Nombre</td>
                    <td class="text-center">Dirección</td>
                    <td class="text-center">Teléfono</td>
                    <td class="text-center">Correo</th>
                    <td class="text-center">Nombre de contacto</th>
                    <td class="text-center">Cargo de contacto</th>
                </tr>
                <?php
                $sql="SELECT * FROM proveedores";
                $resul=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($resul)){

                ?>
                <tr class="tr2">
                   <td><?php echo $mostrar['NIT']?></td>
                   <td><?php echo $mostrar['Nombre']?></td>
                   <td><?php echo $mostrar['Dirección']?></td>
                   <td><?php echo $mostrar['Teléfono']?></td>
                   <td><?php echo $mostrar['Email']?></td>
                   <td><?php echo $mostrar['Nombre_Contacto']?></td>
                   <td><?php echo $mostrar['Cargo_Contacto']?></td>
                 
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        </div>
        

    </div>
    <div class="formu">
    <button id="mostrarFormularioprovedores">Ingresar nuevo registro</button>
</div>

<br>

<div class="formulario" id="formularioprovedores" style="display: none;">
    <form method="POST">
        <br><br>
        <label for="identi">Nit</label>
        <input type="text" name="nit">
        <br><br>
        <label for="nom">Nombre</label>
        <input type="text" name="nom">
        <br><br>
        <label for="dire">Dirección</label>
        <input type="text" name="dire">
        <br><br>
        <label for="tel">Teléfono</label>
        <input type="text" name="tel">
        <br><br>
        <label for="correo">Correo</label>
        <input type="text" name="correo">
        <br><br>
        <label for="gen">Nombre de contacto</label>
        <input type="text" name="nomCon">
        <br><br>
        <label for="gen">Cargo de contacto</label>
        <input type="text" name="cargCon">
        <br><br>
        <button>Guardar</button>
    </form>
</div>
    <script>
   document.getElementById('mostrarFormularioprovedores').addEventListener('click', function() {
    var formulario = document.getElementById('formularioprovedores');
    formulario.style.display = 'block';
});

    </script>
    <?php
if($_POST){
    $nit = $_POST['nit'];
    $nombre = $_POST['nom'];
    $dire = $_POST['dire'];
    $tele=$_POST['tel'];
    $email=$_POST['correo'];
    $nomCon=$_POST['nomCon'];
    $cargCon=$_POST['cargCon'];
    

   
    $ingresarDatos = "INSERT INTO proveedores (`NIT`, `Nombre`, `Dirección`, `Teléfono`, `Email`, `Nombre_Contacto`, `Cargo_Contacto`) 
                      VALUES ('$nit', '$nombre', '$dire', '$tele','$email','$nomCon','$cargCon')";
    $ejecutar = mysqli_query($conexion, $ingresarDatos);
}
?>
</body>
</html>

