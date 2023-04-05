<?php
  include'../Util.php';
  util::verificar();

?>
<html>
  <head>
    <title>Pet Shop Dayanna</title>
  </head>
  <body>
		<h3>Funcionário</h3>
		<?php
				echo "Seja bem vindo: " .$_SESSION['login']. "<a href= 'login.php'><br>Sair</a>";
		?>
 <a href="./view/login.php"> <br><br>Cadastrar Cliente(pet) </a><br>
  <a href="./view/login.php"> Agenda Veterinária </a><br>
  <a href="./view/login.php"> Brinquedos Vendidos </a><br>
  </body>
</html>