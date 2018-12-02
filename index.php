<?php include 'config.php';

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">

    <meta name="viewport:" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.3.1.mim.js"></script>
    <script type="text/javascript" src="js/bootstrap.mim.js"></script>
    <title>Casas</title>
  </head>
  <body>
    <div class="container">
      <div class="py-5 text-center">
        <h2>Cadastro de Imóveis</h2>
        <p class="lead">Prencha os Campos com o cadstro do imovel</p>

        <div class="py-xl-8 order-md-1">
          <h4 class="mb-3">Imóveis</h4>
          <form class="needs-validation " action="ficha_add.php" method="post" enctype="multipart/form-data" novalidate>

            <div class="mb-3">
              <label for="negociacao">Negociação</label>
              <input type="number" class="form-control" name="negociacao_" id="negociacao" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório colocar um valor valido.
              </div>
            </div>

    <div class="mb-3">
            <label for="tipo">Tipo de imóvel</label>
            <input type="text" class="form-control" name="tipo_" placeholder="Ex: Casarão" required>
            <div class="invalid-feedback">
              Por favor, insira o tipo de imovel.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco_" placeholder="Rua dos bobos, nº 0" required>
            <div class="invalid-feedback">
              Por favor, insira o endereço da residencia.
            </div>
          </div>
    <div class="mb-3">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro_" placeholder="Bairro dos trouxas" required>
            <div class="invalid-feedback">
              Por favor, insira o bairro.
            </div>
          </div>
    <div class="mb-3">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade_" placeholder="Cidadelandia" required>
            <div class="invalid-feedback">
              Por favor, insira a cidade
            </div>
          </div>
    <div class="mb-3">
            <label for="regiao">Região</label>
            <input type="text" class="form-control" name="regiao_" placeholder="Interior de São Paulo" required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="row">
    <div class="col-md-2 mb-3 mb-3">
            <label for="salas">Salas</label>
            <input type="number" class="form-control" name="salas_" placeholder="" required>
            <div class="invalid-feedback">
              informe o numero de salas
            </div>
          </div>
    <div class=" col-md-2 mb-3mb-3">
            <label for="endereco">Quartos</label>
            <input type="number" class="form-control" name="quartos_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Suítes</label>
            <input type="number" class="form-control" name="suites_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>


          <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Banheiros</label>
            <input type="number" class="form-control" name="banheiro_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Garagem</label>
            <input type="number" class="form-control" name="garagem_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    </div>
    <div class="mb-3">
            <label for="endereco">Descrição do Imóvel</label>
            <input type="text" class="form-control" name="descricao_" placeholder=" " required>
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
            <label for="area_construida">Área construída(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_contruida_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_total">Área total(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_total_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_comum">Área comum(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_comum_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_terreno">Área terreno(em M²)</label>
            <input type="number" class="form-control" id="endereco" name="area_terreno_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
          <div class="row">
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="destaque_"id="destaque">
              <label class="custom-control-label" for="destaque">destaque</label>
           </div>
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="lancamento_"id="lancamento">
              <label class="custom-control-label" for="lancamento">lancamento</label>
            </div>
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="disponivel_"id="disponivel">
              <label class="custom-control-label" for="disponivel">disponivel</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="mostrar_site_"id="mostrar_site">
                <label class="custom-control-label" for="mostrar_site">mostrar site</label>
              </div>
            </div>
    <div class="mb-3">
      <label for="imagem">Imagem:</label>
        <input type="file" name="imagem_"/>
          <br/>
    <div class="mb-3">
            <label for="endereco">Título</label>
            <input type="text" class="form-control" id="endereco" name="titulo_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Descrição:</label>
            <input type="text" class="form-control" id="endereco" name="descricao_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>

          <hr class="mb-4">
          <!--<input type="submit" value="Enviar"/><br> -->

                     <button class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar">Registrar</button>
          </form>

        </div>
      </div>

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
<?php include 'config.php';

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">

    <meta name="viewport:" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.3.1.mim.js"></script>
    <script type="text/javascript" src="js/bootstrap.mim.js"></script>
    <title>Casas</title>
  </head>
  <body>
    <div class="container">
      <div class="py-5 text-center">
        <h2>Cadastro de Imóveis</h2>
        <p class="lead">Prencha os Campos com o cadstro do imovel</p>

        <div class="py-xl-8 order-md-1">
          <h4 class="mb-3">Imóveis</h4>
          <form class="needs-validation " action="ficha_add.php" method="post" enctype="multipart/form-data" novalidate>

            <div class="mb-3">
              <label for="negociacao">Negociação</label>
              <input type="number" class="form-control" name="negociacao_" id="negociacao" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório colocar um valor valido.
              </div>
            </div>

    <div class="mb-3">
            <label for="tipo">Tipo de imóvel</label>
            <input type="text" class="form-control" name="tipo_" placeholder="Ex: Casarão" required>
            <div class="invalid-feedback">
              Por favor, insira o tipo de imovel.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco_" placeholder="Rua dos bobos, nº 0" required>
            <div class="invalid-feedback">
              Por favor, insira o endereço da residencia.
            </div>
          </div>
    <div class="mb-3">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro_" placeholder="Bairro dos trouxas" required>
            <div class="invalid-feedback">
              Por favor, insira o bairro.
            </div>
          </div>
    <div class="mb-3">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade_" placeholder="Cidadelandia" required>
            <div class="invalid-feedback">
              Por favor, insira a cidade
            </div>
          </div>
    <div class="mb-3">
            <label for="regiao">Região</label>
            <input type="text" class="form-control" name="regiao_" placeholder="Interior de São Paulo" required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="row">
    <div class="col-md-2 mb-3 mb-3">
            <label for="salas">Salas</label>
            <input type="number" class="form-control" name="salas_" placeholder="" required>
            <div class="invalid-feedback">
              informe o numero de salas
            </div>
          </div>
    <div class=" col-md-2 mb-3mb-3">
            <label for="endereco">Quartos</label>
            <input type="number" class="form-control" name="quartos_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Suítes</label>
            <input type="number" class="form-control" name="suites_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>


          <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Banheiros</label>
            <input type="number" class="form-control" name="banheiro_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Garagem</label>
            <input type="number" class="form-control" name="garagem_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    </div>
    <div class="mb-3">
            <label for="endereco">Descrição do Imóvel</label>
            <input type="text" class="form-control" name="descricao_" placeholder=" " required>
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
            <label for="area_construida">Área construída(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_contruida_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_total">Área total(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_total_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_comum">Área comum(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_comum_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_terreno">Área terreno(em M²)</label>
            <input type="number" class="form-control" id="endereco" name="area_terreno_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
          <div class="row">
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="destaque_"id="destaque">
              <label class="custom-control-label" for="destaque">destaque</label>
           </div>
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="lancamento_"id="lancamento">
              <label class="custom-control-label" for="lancamento">lancamento</label>
            </div>
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="disponivel_"id="disponivel">
              <label class="custom-control-label" for="disponivel">disponivel</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="mostrar_site_"id="mostrar_site">
                <label class="custom-control-label" for="mostrar_site">mostrar site</label>
              </div>
            </div>
    <div class="mb-3">
      <label for="imagem">Imagem:</label>
        <input type="file" name="imagem"/>
          <br/>
    <div class="mb-3">
            <label for="endereco">Título</label>
            <input type="text" class="form-control" id="endereco" name="titulo_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Descrição:</label>
            <input type="text" class="form-control" id="endereco" name="descricao_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>

          <hr class="mb-4">
          <!--<input type="submit" value="Enviar"/><br> -->

                     <button class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar">Registrar</button>
          </form>

        </div>
      </div>

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
<?php include 'config.php';

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">

    <meta name="viewport:" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.3.1.mim.js"></script>
    <script type="text/javascript" src="js/bootstrap.mim.js"></script>
    <title>Casas</title>
  </head>
  <body>
    <div class="container">
      <div class="py-5 text-center">
        <h2>Cadastro de Imóveis</h2>
        <p class="lead">Prencha os Campos com o cadstro do imovel</p>

        <div class="py-xl-8 order-md-1">
          <h4 class="mb-3">Imóveis</h4>
          <form class="needs-validation " action="ficha_add.php" method="post" enctype="multipart/form-data" novalidate>

            <div class="mb-3">
              <label for="negociacao">Negociação</label>
              <input type="number" class="form-control" name="negociacao_" id="negociacao" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório colocar um valor valido.
              </div>
            </div>

    <div class="mb-3">
            <label for="tipo">Tipo de imóvel</label>
            <input type="text" class="form-control" name="tipo_" placeholder="Ex: Casarão" required>
            <div class="invalid-feedback">
              Por favor, insira o tipo de imovel.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco_" placeholder="Rua dos bobos, nº 0" required>
            <div class="invalid-feedback">
              Por favor, insira o endereço da residencia.
            </div>
          </div>
    <div class="mb-3">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro_" placeholder="Bairro dos trouxas" required>
            <div class="invalid-feedback">
              Por favor, insira o bairro.
            </div>
          </div>
    <div class="mb-3">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade_" placeholder="Cidadelandia" required>
            <div class="invalid-feedback">
              Por favor, insira a cidade
            </div>
          </div>
    <div class="mb-3">
            <label for="regiao">Região</label>
            <input type="text" class="form-control" name="regiao_" placeholder="Interior de São Paulo" required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="row">
    <div class="col-md-2 mb-3 mb-3">
            <label for="salas">Salas</label>
            <input type="number" class="form-control" name="salas_" placeholder="" required>
            <div class="invalid-feedback">
              informe o numero de salas
            </div>
          </div>
    <div class=" col-md-2 mb-3mb-3">
            <label for="endereco">Quartos</label>
            <input type="number" class="form-control" name="quartos_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Suítes</label>
            <input type="number" class="form-control" name="suites_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>


          <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Banheiros</label>
            <input type="number" class="form-control" name="banheiro_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Garagem</label>
            <input type="number" class="form-control" name="garagem_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    </div>
    <div class="mb-3">
            <label for="endereco">Descrição do Imóvel</label>
            <input type="text" class="form-control" name="descricao_" placeholder=" " required>
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
            <label for="area_construida">Área construída(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_contruida_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_total">Área total(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_total_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_comum">Área comum(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_comum_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_terreno">Área terreno(em M²)</label>
            <input type="number" class="form-control" id="endereco" name="area_terreno_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
          <div class="row">
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="destaque_"id="destaque">
              <label class="custom-control-label" for="destaque">destaque</label>
           </div>
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="lancamento_"id="lancamento">
              <label class="custom-control-label" for="lancamento">lancamento</label>
            </div>
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="disponivel_"id="disponivel">
              <label class="custom-control-label" for="disponivel">disponivel</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="mostrar_site_"id="mostrar_site">
                <label class="custom-control-label" for="mostrar_site">mostrar site</label>
              </div>
            </div>
    <div class="mb-3">
      <label for="imagem">Imagem:</label>
        <input type="file" name="imagem"/>
          <br/>
    <div class="mb-3">
            <label for="endereco">Título</label>
            <input type="text" class="form-control" id="endereco" name="titulo_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Descrição:</label>
            <input type="text" class="form-control" id="endereco" name="descricao_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>

          <hr class="mb-4">
          <!--<input type="submit" value="Enviar"/><br> -->

                     <button class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar">Registrar</button>
          </form>

        </div>
      </div>

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
<?php include 'config.php';

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">

    <meta name="viewport:" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.3.1.mim.js"></script>
    <script type="text/javascript" src="js/bootstrap.mim.js"></script>
    <title>Casas</title>
  </head>
  <body>
    <div class="container">
      <div class="py-5 text-center">
        <h2>Cadastro de Imóveis</h2>
        <p class="lead">Prencha os Campos com o cadstro do imovel</p>

        <div class="py-xl-8 order-md-1">
          <h4 class="mb-3">Imóveis</h4>
          <form class="needs-validation " action="ficha_add.php" method="post" enctype="multipart/form-data" novalidate>

            <div class="mb-3">
              <label for="negociacao">Negociação</label>
              <input type="number" class="form-control" name="negociacao_" id="negociacao" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório colocar um valor valido.
              </div>
            </div>

    <div class="mb-3">
            <label for="tipo">Tipo de imóvel</label>
            <input type="text" class="form-control" name="tipo_" placeholder="Ex: Casarão" required>
            <div class="invalid-feedback">
              Por favor, insira o tipo de imovel.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco_" placeholder="Rua dos bobos, nº 0" required>
            <div class="invalid-feedback">
              Por favor, insira o endereço da residencia.
            </div>
          </div>
    <div class="mb-3">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro_" placeholder="Bairro dos trouxas" required>
            <div class="invalid-feedback">
              Por favor, insira o bairro.
            </div>
          </div>
    <div class="mb-3">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade_" placeholder="Cidadelandia" required>
            <div class="invalid-feedback">
              Por favor, insira a cidade
            </div>
          </div>
    <div class="mb-3">
            <label for="regiao">Região</label>
            <input type="text" class="form-control" name="regiao_" placeholder="Interior de São Paulo" required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="row">
    <div class="col-md-2 mb-3 mb-3">
            <label for="salas">Salas</label>
            <input type="number" class="form-control" name="salas_" placeholder="" required>
            <div class="invalid-feedback">
              informe o numero de salas
            </div>
          </div>
    <div class=" col-md-2 mb-3mb-3">
            <label for="endereco">Quartos</label>
            <input type="number" class="form-control" name="quartos_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Suítes</label>
            <input type="number" class="form-control" name="suites_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>


          <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Banheiros</label>
            <input type="number" class="form-control" name="banheiro_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Garagem</label>
            <input type="number" class="form-control" name="garagem_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    </div>
    <div class="mb-3">
            <label for="endereco">Descrição do Imóvel</label>
            <input type="text" class="form-control" name="descricao_" placeholder=" " required>
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
            <label for="area_construida">Área construída(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_contruida_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_total">Área total(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_total_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_comum">Área comum(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_comum_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_terreno">Área terreno(em M²)</label>
            <input type="number" class="form-control" id="endereco" name="area_terreno_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
          <div class="row">
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="destaque_"id="destaque">
              <label class="custom-control-label" for="destaque">destaque</label>
           </div>
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="lancamento_"id="lancamento">
              <label class="custom-control-label" for="lancamento">lancamento</label>
            </div>
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="disponivel_"id="disponivel">
              <label class="custom-control-label" for="disponivel">disponivel</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="mostrar_site_"id="mostrar_site">
                <label class="custom-control-label" for="mostrar_site">mostrar site</label>
              </div>
            </div>
    <div class="mb-3">
      <label for="imagem">Imagem:</label>
        <input type="file" name="imagem"/>
          <br/>
    <div class="mb-3">
            <label for="endereco">Título</label>
            <input type="text" class="form-control" id="endereco" name="titulo_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Descrição:</label>
            <input type="text" class="form-control" id="endereco" name="descricao_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>

          <hr class="mb-4">
          <!--<input type="submit" value="Enviar"/><br> -->

                     <button class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar">Registrar</button>
          </form>

        </div>
      </div>

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
<?php include 'config.php';

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">

    <meta name="viewport:" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.3.1.mim.js"></script>
    <script type="text/javascript" src="js/bootstrap.mim.js"></script>
    <title>Casas</title>
  </head>
  <body>
    <div class="container">
      <div class="py-5 text-center">
        <h2>Cadastro de Imóveis</h2>
        <p class="lead">Prencha os Campos com o cadstro do imovel</p>

        <div class="py-xl-8 order-md-1">
          <h4 class="mb-3">Imóveis</h4>
          <form class="needs-validation " action="ficha_add.php" method="post" enctype="multipart/form-data" novalidate>

            <div class="mb-3">
              <label for="negociacao">Negociação</label>
              <input type="number" class="form-control" name="negociacao_" id="negociacao" placeholder="" value="" required>
              <div class="invalid-feedback">
                É obrigatório colocar um valor valido.
              </div>
            </div>

    <div class="mb-3">
            <label for="tipo">Tipo de imóvel</label>
            <input type="text" class="form-control" name="tipo_" placeholder="Ex: Casarão" required>
            <div class="invalid-feedback">
              Por favor, insira o tipo de imovel.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco_" placeholder="Rua dos bobos, nº 0" required>
            <div class="invalid-feedback">
              Por favor, insira o endereço da residencia.
            </div>
          </div>
    <div class="mb-3">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro_" placeholder="Bairro dos trouxas" required>
            <div class="invalid-feedback">
              Por favor, insira o bairro.
            </div>
          </div>
    <div class="mb-3">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade_" placeholder="Cidadelandia" required>
            <div class="invalid-feedback">
              Por favor, insira a cidade
            </div>
          </div>
    <div class="mb-3">
            <label for="regiao">Região</label>
            <input type="text" class="form-control" name="regiao_" placeholder="Interior de São Paulo" required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="row">
    <div class="col-md-2 mb-3 mb-3">
            <label for="salas">Salas</label>
            <input type="number" class="form-control" name="salas_" placeholder="" required>
            <div class="invalid-feedback">
              informe o numero de salas
            </div>
          </div>
    <div class=" col-md-2 mb-3mb-3">
            <label for="endereco">Quartos</label>
            <input type="number" class="form-control" name="quartos_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Suítes</label>
            <input type="number" class="form-control" name="suites_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>


          <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Banheiros</label>
            <input type="number" class="form-control" name="banheiro_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="col-md-2 mb-3 mb-3">
            <label for="endereco">Garagem</label>
            <input type="number" class="form-control" name="garagem_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    </div>
    <div class="mb-3">
            <label for="endereco">Descrição do Imóvel</label>
            <input type="text" class="form-control" name="descricao_" placeholder=" " required>
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
            <label for="area_construida">Área construída(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_contruida_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_total">Área total(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_total_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_comum">Área comum(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_comum_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="area_terreno">Área terreno(em M²)</label>
            <input type="number" class="form-control" id="endereco" name="area_terreno_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
          <div class="row">
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="destaque_"id="destaque">
              <label class="custom-control-label" for="destaque">destaque</label>
           </div>
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="lancamento_"id="lancamento">
              <label class="custom-control-label" for="lancamento">lancamento</label>
            </div>
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="disponivel_"id="disponivel">
              <label class="custom-control-label" for="disponivel">disponivel</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="mostrar_site_"id="mostrar_site">
                <label class="custom-control-label" for="mostrar_site">mostrar site</label>
              </div>
            </div>
    <div class="mb-3">
      <label for="imagem">Imagem:</label>
        <input type="file" name="imagem"/>
          <br/>
    <div class="mb-3">
            <label for="endereco">Título</label>
            <input type="text" class="form-control" id="endereco" name="titulo_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Descrição:</label>
            <input type="text" class="form-control" id="endereco" name="descricao_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>

          <hr class="mb-4">
          <!--<input type="submit" value="Enviar"/><br> -->

                     <button class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar">Registrar</button>
          </form>

        </div>
      </div>

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
