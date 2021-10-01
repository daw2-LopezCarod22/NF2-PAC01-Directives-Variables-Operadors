<?php
session_start();
?>
<html>
<head>
<title>Comprobar datos</title> 
</head>
<body>
<p>Estos son los datos que nos has enviado:</p>
<?php  
echo "Nombre: "; echo $_POST['nombre']; echo "<br/>";
echo "apellidos: "; echo $_POST['apellido']; echo "<br/>";
echo "E-mail: "; echo $_POST['email']; echo "<br/>";
echo "My favorite videogame is ";
echo $_GET['favvideogame'];echo "<br/>";
echo "Tu nombre de usuario es:";
echo $_SESSION['username'];echo "<br/>";
echo "Tu password es:";
echo $_SESSION['password'];echo "<br/>";
echo "Tu numero de autentificacion es:";
echo $_SESSION['authuser'];echo "<br/>";
echo "El valor de la cookie galleta es:";
echo $_COOKIE['galleta'];echo "<br/>";
echo "My favorite food is ";
echo $_GET['favfood'];echo "<br/>";
$nombre_usuario = $_GET['usuario'] ?? 'nadie';
echo $nombre_usuario;
$month = date('n');echo "<br/>";
date_default_timezone_set('Europe/Madrid');
if ($month == 10) { echo 'Ya estamos en octubre!'; }
?>
</body>
</html>