# 🔗 BioLink

Uma alternativa moderna e self-hosted ao Linktree, construída com **Laravel 13** e **Tailwind CSS**. Centralize todos os seus links em uma única página personalizada com visual dark e elegante.

---

## 📸 Preview

> Página de perfil com foto, bio, links ordenáveis e painel de gerenciamento lateral.

![BioLink Preview](./preview.png)

---

## ✨ Funcionalidades

- 👤 Perfil com foto e bio personalizados
- 🔗 Criação e gerenciamento de links
- ↕️ Reordenação de links (mover para cima/baixo)
- 🗑️ Remoção de links
- 🔐 Sistema de autenticação (login/logout)
- 🎨 Interface dark mode com Tailwind CSS
- ⚡ Build de assets com Vite
- 🧪 Testes automatizados com Pest

---

## 🛠️ Tecnologias

| Camada      | Tecnologia                          |
|-------------|-------------------------------------|
| Backend     | PHP 8.3+, Laravel 13                |
| Frontend    | Blade, Tailwind CSS, Vite           |
| Testes      | Pest, Pest Laravel Plugin           |
| Dev Tools   | Laravel Pint, Laravel Pail, Faker   |

---

## 📋 Pré-requisitos

- PHP >= 8.3
- Composer
- Node.js + NPM
- Banco de dados (SQLite por padrão)

---

## 🚀 Instalação

### Configuração automática

```bash
git clone https://github.com/LucasBartl/BioLink.git
cd BioLink
composer run setup
```

O comando `setup` executa automaticamente:
1. `composer install`
2. Copia o `.env.example` para `.env`
3. Gera a chave da aplicação
4. Executa as migrations
5. Instala dependências Node
6. Faz o build dos assets

### Configuração manual

```bash
# 1. Clone o repositório
git clone https://github.com/LucasBartl/BioLink.git
cd BioLink

# 2. Instale dependências PHP
composer install

# 3. Configure o ambiente
cp .env.example .env
php artisan key:generate

# 4. Execute as migrations
php artisan migrate

# 5. Instale dependências JS e faça o build
npm install
npm run build
```

---

## 💻 Desenvolvimento

Para rodar o ambiente de desenvolvimento com hot reload:

```bash
composer run dev
```

Isso inicializa em paralelo:
- **PHP** — `php artisan serve`
- **Queue** — `php artisan queue:listen`
- **Vite** — `npm run dev`

Acesse a aplicação em: `http://localhost:8000`

---

## 🧪 Testes

```bash
composer run test
```

---

## 📁 Estrutura do Projeto

```
BioLink/
├── app/            # Lógica da aplicação (Controllers, Models...)
├── bootstrap/      # Inicialização do framework
├── config/         # Configurações da aplicação
├── database/       # Migrations, factories e seeders
├── public/         # Assets públicos (ponto de entrada)
├── resources/      # Views Blade, CSS, JS
├── routes/         # Definição de rotas
├── storage/        # Logs, cache, uploads
└── tests/          # Testes automatizados
```

---

## ⚙️ Variáveis de Ambiente

Copie o arquivo `.env.example` para `.env` e ajuste as variáveis conforme necessário:

```env
APP_NAME=BioLink
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=biolink
# DB_USERNAME=root
# DB_PASSWORD=
```

---

## 📄 Licença

Este projeto está licenciado sob a [MIT License](https://opensource.org/licenses/MIT).

---

Desenvolvido por [LucasBartl](https://github.com/LucasBartl)
