<?php 
include 'conexao.php';
?>

<h2>usuario</h2>
<!-- link HTML que leva o usuario 
 para o formulario de cadastro(form.php-->
<a href="form.php">Novo</a><br><br>

<?php 
$res = mysqli_query($conn, "SELECT * FROM usuarios");

while ($r = mysqli_fetch_assoc($res)){
    echo $r ['nome'] . " - " . $r['email'] . "<br>";

}
?>

