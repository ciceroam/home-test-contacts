# Contacts App

This Contacts App is a web application designed to manage contact information, allowing users to create, read, update, and delete (CRUD) contacts. It features a user authentication system and a user-friendly interface powered by the SB Admin 2 theme.

This app was developed for a home test.

---

## Features
- User authentication (login and logout functionalities).
- Manage contacts (add, view, edit, and delete).
- Responsive and modern UI with the SB Admin 2 theme.
- Paginated and searchable contact lists using DataTables.
- Security implemented using Symfony's guard system.

---

## Technologies Used
- **Backend**: PHP 7.4, Symfony 4.4
- **Frontend**: Twig templates, SB Admin 2 theme, Bootstrap, jQuery, DataTables.
- **Database**: MySQL
- **Environment**: Docker containers for easy deployment and local development.

---

## Getting Started
Follow the steps below to set up and run the application locally.

### Prerequisites
- Docker
- Docker Compose
- Git

### Installation
1. Clone the repository:
   ```bash
   git clone <repository_url>
   cd <repository_name>
   ```

2. Make a copy of the ".env.example" file by renaming it to ".env".
   

3. Build and start the Docker containers:
   ```bash
   docker-compose up -d
   ```

4. Install dependencies:
   ```bash
   docker-compose exec php composer install
   ```

5. Set up the database:
   ```bash
   docker-compose exec php bin/console doctrine:database:create
   docker-compose exec php bin/console doctrine:migrations:migrate
   ```

6. Access the application:
    - Open your browser and navigate to `http://localhost:8080`.

---

## Creating Users
To create a new user, you can use a console command.

1. Run the following command:
   ```bash
   docker-compose exec php bin/console CreateAdminUser <admin@example.com> <password>
   ```

2. Follow the prompts to input the user's information (email, password, and roles).

---

## Populating database
For testing, you can populate the database with 30 random contacts using a console command.

1. Run the following command:
   ```bash
   docker-compose exec php bin/console doctrine:fixtures:load
   ```