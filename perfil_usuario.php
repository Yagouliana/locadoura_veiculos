<?php
// backend
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário - Locadora de veículos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS customizado -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="container py-4">

    <div class="container py-4">

        <!-- Barra de informações do usuário -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h1>Locadora de Veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <i class="bi bi-person-circle" style="font-size:24px;"></i>
                        <span>Bem-vindo, <strong>Usuário</strong>!</span>
                        <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1">
                            <i class="bi bi-box-arrow-right"></i>
                            Sair
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Calcular a previsão de aluguel -->
        <div class="row mb-4">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Calcular previsão de aluguel 💰</h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo de veículo:</label>
                                <select class="form-select" name="tipo" required>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="dias" class="form-label">Quantidade de dias 📅</label>
                                <input type="number" name="dias" class="form-control" value="1" min="1" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabela de veículos disponíveis -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Veículos disponíveis para aluguel 🚗</h4>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Carro</td>
                                        <td>Uno</td>
                                        <td>ABC1D34</td>
                                        <td><span class="badge bg-success">Disponível ✅</span></td>
                                    </tr>
                                    <tr>
                                        <td>Carro</td>
                                        <td>Veloster</td>
                                        <td>DEF5D78</td>
                                        <td><span class="badge bg-danger">Indisponível ❌</span></td>
                                    </tr>
                                    <tr>
                                        <td>Caminhão</td>
                                        <td>Mercedes 710</td>
                                        <td>L3F8I10</td>
                                        <td><span class="badge bg-warning">Alugado ❕</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
