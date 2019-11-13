<?php
if((empty($_POST['nombre'])||empty($_POST['edad']))) {
    echo "Debes completar el nombre y edad";
} else {
    echo "<p>Hola ". htmlspecialchars($_POST['nombre'])."</p>";
    echo "<p>Usted tiene".  (int)$_POST['edad'] ."</p>";
}
?>

