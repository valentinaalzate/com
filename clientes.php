
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
        <h3>Clientes</h3>
            <table border="1" class="tabla">
                <tr class="tr1">
                    <td class="text-center">identificación</td>
                    <td class="text-center">Nombres</td>
                    <td class="text-center">Apellidos</td>
                    <td class="text-center">Dirección</td>
                    <td class="text-center">Teléfono</td>
                    <td class="text-center">Correo</th>
                    <td class="text-center">Género</th>
                </tr>
                <?php
                $sql="SELECT * FROM cliente";
                $resul=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($resul)){

                ?>
                <tr class="tr2">
                   <td><?php echo $mostrar['identificación']?></td>
                   <td><?php echo $mostrar['Nombres']?></td>
                   <td><?php echo $mostrar['Apellidos']?></td>
                   <td><?php echo $mostrar['Dirección']?></td>
                   <td><?php echo $mostrar['Teléfono']?></td>
                   <td><?php echo $mostrar['Email']?></td>
                   <td><?php echo $mostrar['Genero']?></td>
                 
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        </div>
        

    </div>
    <div class="formu">
    <button id="mostrarFormularioClientes">Ingresar nuevo registro</button>
</div>

<br>

<div class="formulario" id="formularioClientes" style="display: none;">
    <form method="POST">
        <br><br>
        <label for="identi">Identificación</label>
        <input type="text" name="identi">
        <br><br>
        <label for="nom">Nombres</label>
        <input type="text" name="nom">
        <br><br>
        <label for="ape">Apellidos</label>
        <input type="text" name="ape">
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
        <label for="gen">Género</label>
        <input type="text" name="gen">
        <br><br>
        <button>Guardar</button>
    </form>
</div>
    <script>
   document.getElementById('mostrarFormularioClientes').addEventListener('click', function() {
    var formulario = document.getElementById('formularioClientes');
    formulario.style.display = 'block';
});

    </script>
      <?php
if($_POST){
    $ide = $_POST['identi'];
    $nombre = $_POST['nom'];
    $apellido = $_POST['ape'];
    $dire = $_POST['dire'];
    $tel = $_POST['tel'];
    $correo = $_POST['correo']; 
    $genero = $_POST['gen'];
    

   
    $ingresarDatos = "INSERT INTO cliente (`identificación`, `Nombres`, `Apellidos`, `Dirección`, `Teléfono`, `Email`, `Genero`) 
                      VALUES ('$ide', '$nombre', '$apellido', '$dire', '$tel', '$correo', '$genero')";
    $ejecutar = mysqli_query($conexion, $ingresarDatos);
}
?>
</body>
</html>

