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
	$condominio_fechado= strip_tags ($_POST["condominio_fechado"]);
	$despensa= strip_tags ($_POST["despensa_"]);
	$lavabo= strip_tags ($_POST["lavabo_"]);
	$piscina= strip_tags ($_POST["piscina_"]);
	$sauna= strip_tags ($_POST["sauna_"]);
	$area_servico= strip_tags ($_POST["area_servico_"]);
	$lavanderia= strip_tags ($_POST["lavanderia_"]);
	$piso_frio= strip_tags ($_POST["piso_frio"]);
	$armario_embutido= strip_tags ($_POST["armario_embutido_"]);
	$churrasqueira= strip_tags ($_POST["churrasqueira_"]);
	$escritorio= strip_tags ($_POST["escritorio_"]);
	$sacada= strip_tags ($_POST["sacada_"]);
	$varanda= strip_tags ($_POST["varanda_"]);
	$cozinha_planejada= strip_tags ($_POST["cozinha_planejada_"]);
	$salao_festa= strip_tags ($_POST["salao_festa_"]);
	$portaria= strip_tags ($_POST["portaria_"]);
	$area_contruida= strip_tags ($_POST["area_contruida_"]);
	$area_total= strip_tags ($_POST["area_total_"]);
	$area_comum= strip_tags ($_POST["area_comum_"]);
	$area_terreno= strip_tags ($_POST["area_terreno_"]);
	$destaque= strip_tags ($_POST["destaque_"]);
	$lancamento= strip_tags ($_POST["lancamento_"]);
	$disponivel= strip_tags ($_POST["disponivel_"]);
	$mostrar_site= strip_tags ($_POST["mostrar_site_"]);
	$titulo= strip_tags ($_POST["titulo_"]);
	$descricao= strip_tags ($_POST["descricao_"]);
	$sql= mysqli_query($conexao,"insert into cadastro(negociacao,
	tipo, endereco, bairro, cidade, regiao, salas, quartos, suites,
	banheiro, garagem, area_construida, area_total, area_comum,
	area_terreno, destaque,lancamento,disponivel,mostrar_site, titulo, descricao) 
	values ('$negociacao','$tipo','$endereco','$bairro','$cidade','$regiao','$salas','$quartos','$suites','$banheiros',
	'$garagem','$area_contruida',
	'$area_total','$area_comum','$area_terreno','$destaque','$lancamento','$disponivel','$mostrar_site','$titulo','$descricao')")
	or print(mysqli_error($conexao));
	
	if($sql==1)
		echo 'Sucesso!';
	else
		echo 'Erro!';
	
									function salvarFoto($foto){
								
										if (!empty($foto["name"])) {	
											$largura = 640; //largura minima
											$altura = 480; // altura minima
											$tamanho = 1010680; //tamanho maximo
									 
											$error = array();
										
											if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
											   $error[1] = "Imagem inválida. Formatos aceitos: pjpeg|jpeg|png|gif|bmp";
											} 
											
											$dimensoes = getimagesize($foto["tmp_name"]);
										
											if($dimensoes[0] < $largura) {
												$error[2] = "A largura da imagem não deve ser inferior a ".$largura." pixels";
											}
									 
											if($dimensoes[1] < $altura) {
												$error[3] = "Altura da imagem não deve ser inferior ".$altura." pixels";
											}
											
											if($foto["size"] > $tamanho) {
												$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
											}
											
											if (count($error) == 0) {
											
												preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
									 
												$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
									 
												$caminho_imagem = "imagens/imoveis/" . $nome_imagem;
									 
												move_uploaded_file($foto["tmp_name"], $caminho_imagem);	
											}
										
											if (count($error) != 0) {
												foreach ($error as $erro) {
													echo "<div class='alert alert-danger'> <strong>Ocorreram erros ao salvar a imagem!</strong>
													<br/> $erro.
													</div>";
												}
											}
										}
									}
	?>
