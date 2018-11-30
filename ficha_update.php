<?php include 'config.php';
  $negociacao = strip_tags ($_POST["negociacao_"]);
  $tipo = strip_tags ($_POST["tipo_"]);
  $endereco = strip_tags ($_POST["endereco_"]);
  $bairro = strip_tags ($_POST["bairro_"]);
  $cidade = strip_tags ($_POST["cidade_"]);
  $regiao = strip_tags ($_POST["regiao_"]);
  $salas = strip_tags ($_POST["salas_"]);
  $quartos = strip_tags ($_POST["quartos_"]);
  $suites = strip_tags ($_POST["suites_"]);
  $banheiros = strip_tags ($_POST["banheiro_"]);
  $garagem = strip_tags ($_POST["garagem_"]);
  $condominio_fechado = strip_tags ($_POST["condominio_fechado"]);
  $despensa = strip_tags ($_POST["despensa_"]);
  $lavabo = strip_tags ($_POST["lavabo_"]);
  $piscina = strip_tags ($_POST["piscina_"]);
  $sauna = strip_tags ($_POST["sauna_"]);
  $area_servico = strip_tags ($_POST["area_servico_"]);
  $lavanderia = strip_tags ($_POST["lavanderia_"]);
  $piso_frio = strip_tags ($_POST["piso_frio"]);
  $armario_embutido = strip_tags ($_POST["armario_embutido_"]);
  $churrasqueira = strip_tags ($_POST["churrasqueira_"]);
  $escritorio = strip_tags ($_POST["escritorio_"]);
  $sacada = strip_tags ($_POST["sacada_"]);
  $varanda = strip_tags ($_POST["varanda_"]);
  $cozinha_planejada = strip_tags ($_POST["cozinha_planejada_"]);
  $salao_festa = strip_tags ($_POST["salao_festa_"]);
  $portaria = strip_tags ($_POST["portaria_"]);
  $area_contruida = strip_tags ($_POST["area_contruida_"]);
  $area_total = strip_tags ($_POST["area_total_"]);
  $area_comum = strip_tags ($_POST["area_comum_"]);
  $area_terreno = strip_tags ($_POST["area_terreno_"]);
  $destaque = strip_tags ($_POST["destaque_"]);
  $lancamento = strip_tags ($_POST["lancamento_"]);
  $disponivel = strip_tags ($_POST["disponivel_"]);
  $mostrar_site = strip_tags ($_POST["mostrar_site_"]);
  $titulo = strip_tags ($_POST["titulo_"]);
  $descricao = strip_tags ($_POST["descricao_"]);
  $sql = mysqli_query($conexao, "UPDATE cadastro SET negociacao = $negociacao,
  tipo = $tipo, endereco = $endereco, bairro = $bairro, cidade = $cidade,
  regiao = $regiao, salas = $salas,quartos = $quartos, suites = $suites,
  banheiro = $banheiros, garagem = $garagem,area_construida = $area_contruida,
  area_total = $area_total, area_comum = $area_comum,
  area_terreno = $area_terreno, destaque = $destaque,
  lancamento = $lancamento, disponivel = $disponivel,
  mostrar_site = $mostrar_site, titulo = $titulo, descricao = $descricao
  WHERE codigo = $codigo)

  if($sql==1)
		echo 'Dados alterados com sucesso!';
	else
		echo 'Erro!';
?>
