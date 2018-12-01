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
          <form class="needs-validation " action="ficha_add.php" method="post"novalidate>

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
            <label for="endereco">Área construída(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_contruida_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Área total(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_total_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Área comum(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_comum_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Área terreno(em M²)</label>
            <input type="text" class="form-control" id="endereco" name="area_terreno_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Destaque</label>
            <input type="text" class="form-control" id="endereco"name="destaque_" placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Lançamento</label>
            <input type="text" class="form-control" id="endereco" name="lancamento_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Disponível</label>
            <input type="text" class="form-control" id="endereco" name="disponivel_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
         <div class="mb-3">
            <label for="endereco">Mostrar no Site</label>
            <input type="text" class="form-control"  name="mostrar_site_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
    <div class="mb-3">
            <label for="endereco">Imagem Principal</label>
            <input type="text" class="form-control" id="endereco" name="imagem_"placeholder=" " required>
            <div class="invalid-feedback">
              Por favor, insira seu endereço de entrega.
            </div>
          </div>
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
          <input type="submit" value="Enviar"/><br>

                     <button class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
