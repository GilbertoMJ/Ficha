<?php include 'config.php';
  $sql = mysqli_query($conexao, "DELETE FROM cadastro WHERE codigo =".$_POST['codigo_'])
  or print(mysqli_error($conexao))

  if($sql == 1)
	echo 'Dados deletados!';
else
	echo 'Erro!';
?>
