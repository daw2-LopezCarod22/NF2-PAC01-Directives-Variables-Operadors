<?php
session_start();
$_SESSION['username'] = "Jonathan";
$_SESSION['password'] = "12345";
$_SESSION['authuser'] = 1;
setcookie("galleta","Hola",time() + 120);
?>
<html>
<body>
<form action="formpost.php?favvideogame=NierAutomata" method="post">
    Nombre: <input type="text" name="nombre"><br>
	Apellido: <input type="text" name="apellido"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar">
</form>
<?php
echo "<a href='formpost.php?favvideogame=NierAutomata'>";
echo "Click here to see information about my favorite videogame!"; 
echo "</a>";echo "<br/>";
$myfavfood = urlencode("Durum Kebab");
echo "<a href='formpost.php?favfood=$myfavfood'>";
echo "Click here to see information about my favorite food!";
echo "</a>";
?>

</body>
</html>