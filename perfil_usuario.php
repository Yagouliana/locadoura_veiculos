<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
  <title>ADM - Locadora de Veículos</title>
</head>
<body class="container py-4">
  <div class="container py-4">
    <!-- Barra de informações de usuário -->
    <div class="row mb-4">
      <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center inicio">
          <h1>Lista de Locadora de veículos</h1>
          <div class="d-flex align-items-center gap-3 user-info mx-3">
            <span class="user-icon">
              <i class="bi bi-person" style="font-size: 24px;"></i>
            </span>
            <span class="welcome-text">
              Bem-vindo, <strong>Usuario</strong>
            </span>
            <a href="" class="btn btn-outline-danger d-flex align-items-center gap-1">
              <i class="bi bi-box-arrow-in-right"></i>Sair
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row same-height-row">
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-header">
            <h4 class="mb-0">Calculadora de previsão de aluguel</h4>
          </div>
          <div class="card-body">
            <form action="post" class="needs-validation" novalidate>
              <div class="mb-3">
                <label for="" class="input-label">Tipo de veículo:</label>
                <select class="form-select" name="" id="" required>
                  <option value="carro">Carro</option>
                  <option value="moto">Moto</option>
                  <option value="helicoptero">Helicóptero</option>
                  <option value="aviao">Avião</option>
                  <option value="barco">Barco</option>
                  <option value="submarino">Submarino</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade de dias</label>
                <input type="number" name="quantidade" class="form-control" required>
              </div>
              <button type="button" class="btn btn-success w-100">Calcular previsão</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-header bg-warning">
            <h4 class="mb-0"><span class="accept">Oferta imperdível</span>🌠</h4>
          </div>
          <div class="card-body">
            <h4>Alugue agora mesmo um Triton Submarines♒<br> de <span class="error">200 dólares</span> por <span class="accept">apenas 150</span>, corra a vaga é <span class="error">limitada</span>🔐</h4>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabela de veículos cadastrados -->
    <div class="row mt-4">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="mb-0">Veículos cadastrados</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Tipo</th>
                    <th>Modelo</th>
                    <th>Placa</th>
                    <th>Status</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Carro <button class="btn" data-bs-toggle="modal" data-bs-target="#uno"><i class="bi bi-info-circle"></i></button></td>
                    <td>Uno</td>
                    <td>ABC1D34</td>
                    <td><span class="badge bg-warning">Alugado</span></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Submarino <button class="btn" data-bs-toggle="modal" data-bs-target="#submarino"><i class="bi bi-info-circle"></i></button></td>
                    <td>Triton Submarines</td>
                    <td>SSN-688</td>
                    <td><span class="badge bg-success">Disponível</span></td>
                    <td>
                      <div class="rent-group">
                        <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                        <button class="btn btn-primary" type="submit" name="alugar" data-bs-toggle="modal" data-bs-target="#alugar">Alugar</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Avião <button class="btn" data-bs-toggle="modal" data-bs-target="#aviao"><i class="bi bi-info-circle"></i></button></td>
                    <td>Boeing 777</td>
                    <td>PR-AZD</td>
                    <td><span class="badge bg-success">Disponível</span></td>
                    <td>
                      <div class="rent-group">
                        <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                        <button class="btn btn-primary" type="submit" name="alugar" data-bs-toggle="modal" data-bs-target="#alugar">Alugar</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Barco <button class="btn" data-bs-toggle="modal" data-bs-target="#barco"><i class="bi bi-info-circle"></i></button></td>
                    <td>Icon of the Seas</td>
                    <td>53740</td>
                    <td><span class="badge bg-danger">Indisponível</span></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modais -->
    <div class="modal" tabindex="-1" id="uno">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Uno - Carro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <p>
              Cor: Branco;<br>
              Placa: ABC1D34;<br>
              Marca/Modelo: Uno;<br>
              Ano de fabricação/modelo: 2016;<br>
              Status do licenciamento: Regular;<br>
              Última vistoria: 03/03/2025;<br>
              Responsável: Josemar Jair O Justo;<br>
              Preço: <span class="accept">$100 p/dia;</span>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" id="submarino">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Triton Submarines - Submarino</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <p>
              Cor: Cinza Escuro;<br>
              Código de Registro: SSN-688;<br>
              Modelo: Triton Submarines;<br>
              Ano de fabricação/modelo: 2020;<br>
              Status do licenciamento: Ativo;<br>
              Última vistoria: 12/01/2025;<br>
              Responsável: Capitão Jonas Barreto;<br>
              Preço: <span class="accept">$150 p/dia (oferta exclusiva);</span>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" id="aviao">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Boeing 777 - Avião</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <p>
              Cor: Branco com azul;<br>
              Registro: PR-AZD;<br>
              Modelo: Boeing 777;<br>
              Ano de fabricação/modelo: 2018;<br>
              Status do licenciamento: Regularizado;<br>
              Última vistoria: 21/02/2025;<br>
              Responsável: Comandante Luana Reis;<br>
              Preço: <span class="accept">$300 p/dia;</span>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" id="barco">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Icon of the Seas - Barco</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <p>
              Cor: Branco com detalhes coloridos;<br>
              Registro: 53740;<br>
              Modelo: Icon of the Seas;<br>
              Ano de fabricação/modelo: 2022;<br>
              Status do licenciamento: Indisponível;<br>
              Última vistoria: 05/03/2025;<br>
              Responsável: Capitão Ariel Mendes;<br>
              Preço: <span class="error">Indisponível</span>;
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" id="alugar">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Formulário de empréstimo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form action="post" class="needs-validation" novalidate>
              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" required>
                <div class="invalid-feedback">Informe um email válido</div>
              </div>
              <button type="submit" class="btn btn-primary w-100">Enviar pedido</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
