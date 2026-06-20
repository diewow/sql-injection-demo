<?php

$conn = mysqli_connect(
    "db",
    "root",
    "root",
    "sql_injection_demo"
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Vulnerable</title>
</head>
<body>

<h1>Login</h1>

<form method="POST">

    Usuario:
    <input type="text" name="usuario">

    <br><br>

    Contraseña:
    <input type="password" name="password">

    <br><br>

    <button type="submit">
        Ingresar
    </button>

</form>

<?php

if($_POST){

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql =
    "SELECT * FROM usuarios
     WHERE usuario='$usuario'
     AND password='$password'";

    echo "<p><b>Consulta ejecutada:</b></p>";
    echo $sql;

    $resultado = mysqli_query($conn,$sql);

    if(mysqli_num_rows($resultado)>0){

        echo "<h2>Acceso concedido</h2>";

    }else{

        echo "<h2>Acceso denegado</h2>";

    }
}

?>

</body>
</html>