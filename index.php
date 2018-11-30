<?php include 'config.php';

?> 
<!doctype html>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Cadastro de imóveis</h2>
        <p class="lead">Para cadastrar o imóvel cada campo é obrigatório </p>
      <!-- </div>
	
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Seu carrinho</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nome do produto</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Segundo produto</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Terceiro item</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Código de promoção</h6>
                <small>CODIGOEXEMEPLO</small>
              </div>
              <span class="text-success">-R$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (BRL)</span>
              <strong>R$20</strong>
            </li>
          </ul>
             <form action="ficha_add.php" method="post" >

          <form  class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Código promocional">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Resgatar</button>
              </div>
            </div>
          
        </div> -->
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Imóveis</h4>
          <form action="ficha_add.php" method="post" class="needs-validation" novalidate>
            <div class="row">
              <!--<div class="col-md-6 mb-3">
                <label for="primeiroNome">Código</label>
                <input type="text" class="form-control" name="codigo_"id="primeiroNome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div> --> 
              <div class="col-md-6 mb-3">
                <label for="sobrenome">Negociação</label>
                <input type="text" class="form-control" name="negociacao_" id="sobrenome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um sobre nome válido.
                </div>
              </div>
            </div>
			<div class="mb-3">
              <label for="sobrenome">Tipo de imóvel</label>
              <input type="text" class="form-control" name="tipo_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" name="endereco_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Bairro</label>
              <input type="text" class="form-control" name="bairro_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>			
			<div class="mb-3">
              <label for="endereco">Cidade</label>
              <input type="text" class="form-control" name="cidade_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Região</label>
              <input type="text" class="form-control" name="regiao_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="row">
			<div class="col-md-2 mb-3 mb-3">
              <label for="endereco">Salas</label>
              <input type="text" class="form-control" name="salas_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class=" col-md-2 mb-3mb-3">
              <label for="endereco">Quartos</label>
              <input type="text" class="form-control" name="quartos_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="col-md-2 mb-3 mb-3">
              <label for="endereco">Suítes</label>
              <input type="text" class="form-control" name="suites_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			

            <div class="col-md-2 mb-3 mb-3">
              <label for="endereco">Banheiros</label>
              <input type="text" class="form-control" name="banheiro_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="col-md-2 mb-3 mb-3">
              <label for="endereco">Garagem</label>
              <input type="text" class="form-control" name="garagem_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			</div>
			<div class="mb-3">
              <label for="endereco">Descrição do Imóvel</label>
              <input type="text" class="form-control" name="descricao_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<hr class="mb-4">
			 <div class="row">
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="condominio_fechado" id="condominio_fechado">
              <label class="custom-control-label" for="condominio_fechado">Condomínio fechado</label>
            </div><br>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="despensa_" id="despensa">
              <label class="custom-control-label" for="despensa">Despensa</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="lavabo_" id="lavabo">
              <label class="custom-control-label" for="lavabo">Lavabo</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="piscina_" id="piscina">
              <label class="custom-control-label" for="piscina">Piscina</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="sauna_"id="sauna">
              <label class="custom-control-label" for="sauna">Sauna</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="area_servico_" id="area_servico">
              <label class="custom-control-label" for="area_servico">Área de serviço</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="lavanderia_" id="lavanderia">
              <label class="custom-control-label" for="lavanderia">Lavanderia</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="piso_frio_" id="piso_frio">
              <label class="custom-control-label" for="piso_frio">Piso Frio</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="armario_embutido_" id="armario_embutido">
              <label class="custom-control-label" for="armario_embutido">Armário embutido</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="churrasqueira_"id="churrasqueira">
              <label class="custom-control-label" for="churrasqueira">Churrasqueira</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="escritorio_" id="escritorio">
              <label class="custom-control-label" for="escritorio">Escritório</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="sacada_" id="sacada">
              <label class="custom-control-label" for="sacada">Sacada</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="varanda_"id="varanda">
              <label class="custom-control-label" for="varanda">Varanda</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="cozinha_planejada_" id="cozinha_planejada">
              <label class="custom-control-label" for="cozinha_planejada">Cozinha planejada</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="salao_festa_" id="salao_festa">
              <label class="custom-control-label" for="salao_festa">Salão de Festa</label>
            </div>
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="portaria_"id="portaria">
              <label class="custom-control-label" for="portaria">Portaria</label>
            </div>
			</div>
			<hr class="mb-4">
			<div class="mb-3">
              <label for="endereco">Área construída(em M²)</label>
              <input type="text" class="form-control" id="endereco" name="area_contruida_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Área total(em M²)</label>
              <input type="text" class="form-control" id="endereco" name="area_total_"placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Área comum(em M²)</label>
              <input type="text" class="form-control" id="endereco" name="area_comum_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Área terreno(em M²)</label>
              <input type="text" class="form-control" id="endereco" name="area_terreno_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Destaque</label>
              <input type="text" class="form-control" id="endereco"name="destaque_" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Lançamento</label>
              <input type="text" class="form-control" id="endereco" name="lancamento_"placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Disponível</label>
              <input type="text" class="form-control" id="endereco" name="disponivel_"placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
           <div class="mb-3">
              <label for="endereco">Mostrar no Site</label>
              <input type="text" class="form-control"  name="mostrar_site_"placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Imagem Principal</label>
              <input type="text" class="form-control" id="endereco" name="imagem_"placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Título</label>
              <input type="text" class="form-control" id="endereco" name="titulo_"placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
			<div class="mb-3">
              <label for="endereco">Descrição:</label>
              <input type="text" class="form-control" id="endereco" name="descricao_"placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>
           
            <hr class="mb-4">
            <input type="submit" value="Enviar"/><br>
                        
                       <button class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar">Cadastrar</button>
    </form>
  </div></form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Nome da companhia</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
      </footer>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
