# 🚗 Sistema de Locadora de Veículos

Este é um sistema web simples para gerenciamento de veículos em uma locadora, com controle de acesso por perfil de usuário: **Administrador** ou **Usuário Comum**.

> Projeto com interface moderna, responsiva e fácil de usar, desenvolvido com PHP, HTML, CSS e Bootstrap.

---

## 👥 Perfis de Acesso

### 🔐 Administrador (`adm.php`)

Permissões e funcionalidades:

- ✅ Adicionar veículos ao sistema
- ✅ Calcular previsão de aluguel (tipo e dias)
- ✅ Visualizar todos os veículos cadastrados
- ✅ Ações por veículo:
  - Alugar
  - Devolver
  - Deletar

> Tabela completa com status (Disponível, Indisponível, Alugado) e ações dinâmicas.

---

### 🙋 Usuário Comum (`usuario.php`)

Permissões:

- ✅ Calcular previsão de aluguel (tipo e dias)
- ✅ Visualizar tabela de veículos e seus status

> Interface simplificada, voltada para consulta e simulação de aluguel.

---

## 🔐 Tela de Login (`login.php`)

Página inicial do sistema:

- Formulário com campos de usuário e senha
- Validação básica com Bootstrap
- Botão para visualizar/ocultar senha (`eye icon`)
- Estilo centralizado e limpo

> ⚠️ A autenticação backend ainda não foi implementada, mas está preparada para integração com banco de dados e sessões PHP.

---

## 🎨 Estilo Responsivo (`style.css`)

Arquivo responsável por estilizar os botões e grupos de ações da tabela de veículos:

- Organização de botões de ação (Alugar, Devolver, Deletar)
- Adaptação para dispositivos móveis (modo coluna)
- Ajuste de espaçamento, alinhamento e responsividade geral

```css
.action-wrapper {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

@media (max-width: 768px) {
    .action-wrapper {
        flex-direction: column;
    }
}

 
