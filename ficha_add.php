<?php include 'config.php';

	/*$codigo= strip_tags ($_POST["codigo_"]);*/
	$negociacao= strip_tags ($_POST["negociacao_"]);
	$tipo= strip_tags ($_POST["tipo_"]);
	$endereco= strip_tags ($_POST["endereco_"]);
	$bairro= strip_tags ($_POST["bairro_"]);
	$cidade= strip_tags ($_POST["cidade_"]);
	$regiao= strip_tags ($_POST["regiao_"]);
	$salas= strip_tags ($_POST["salas_"]);
	$quartos= strip_tags ($_POST["quartos_"]);
	$suites= strip_tags ($_POST["suites_"]);
	$banheiros= strip_tags ($_POST["banheiro_"]);
	$garagem= strip_tags ($_POST["garagem_"]);
	$condominio_fechado= (int)isset($_POST["condominio_fechado"]);
	$despensa= (int)isset($_POST["despensa_"]);
	$lavabo= (int)isset($_POST["lavabo_"]);
	$piscina= (int)isset($_POST["piscina_"]);
	$sauna= (int)isset($_POST["sauna_"]);
	$area_servico= (int)isset($_POST["area_servico_"]);
	$lavanderia= (int)isset($_POST["lavanderia_"]);
	$piso_frio= (int)isset($_POST["piso_frio"]);
	$armario_embutido= (int)isset($_POST["armario_embutido_"]);
	$churrasqueira= (int)isset($_POST["churrasqueira_"]);
	$escritorio= (int)isset($_POST["escritorio_"]);
	$sacada= (int)isset($_POST["sacada_"]);
	$varanda= (int)isset($_POST["varanda_"]);
	$cozinha_planejada= (int)isset($_POST["cozinha_planejada_"]);
	$salao_festa= (int)isset($_POST["salao_festa_"]);
	$portaria= (int)isset($_POST["portaria_"]);
	$area_contruida= strip_tags ($_POST["area_contruida_"]);
	$area_total= strip_tags ($_POST["area_total_"]);
	$area_comum= strip_tags ($_POST["area_comum_"]);
	$area_terreno= strip_tags ($_POST["area_terreno_"]);
	$destaque= (int)isset($_POST["destaque_"]);
	$lancamento= (int)isset($_POST["lancamento_"]);
	$disponivel= (int)isset($_POST["disponivel_"]);
	$mostrar_site= (int)isset($_POST["mostrar_site_"]);
	$titulo= strip_tags ($_POST["titulo_"]);
	$descricao= strip_tags ($_POST["descricao_"]);
	$sql= mysqli_query($conexao,"insert into cadastro(
	 negociacao,tipo,endereco,bairro,cidade,regiao,salas,quartos,suites,banheiro,garagem,
	 condominio_fechado,despensa,lavabo,piscina,sauna, area_servico,lavanderia,piso_frio,armario_embutido,
	 churrasqueira,escritorio,sacada,varanda,cozinha_planejada,salao_festa,portaria,area_construida, area_total, area_comum,
	area_terreno, destaque,lancamento,disponivel,mostrar_site, titulo, descricao)
	values ('$negociacao','$tipo','$endereco','$bairro','$cidade','$regiao','$salas','$quartos','$suites','$banheiros','$garagem',
	'$condominio_fechado','$despensa','$lavabo','$piscina','$sauna','$area_servico','$lavanderia','$piso_frio','$armario_embutido',
	'$churrasqueira','$escritorio','$sacada','$varanda','$cozinha_planejada','$salao_festa','$portaria','$area_contruida',
	'$area_total','$area_comum','$area_terreno','$destaque','$lancamento','$disponivel','$mostrar_site','$titulo','$descricao')")
	or print(mysqli_error($conexao));

	if($sql==1)
		echo 'Sucesso!';
	else
		echo 'Erro!';

									if($imagem != NULL) { 
    $nomeFinal = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal); 
 
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
 
        mysql_connect($host,$username,$password) or die("Impossível Conectar"); 
 
        @mysql_select_db($db) or die("Impossível Conectar"); 
 
        mysql_query("INSERT INTO PESSOA (PES_IMG) VALUES ('$mysqlImg')") or die("O sistema não foi capaz de executar a query"); 
 
        unlink($nomeFinal);
         
        header("location:exibir.php");
    }
} 
else { 
    echo"Você não realizou o upload de forma satisfatória."; 
} 
	?>
