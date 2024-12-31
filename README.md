# Mini Blog Application

## Introduction

This is a simple blog application built with Laravel where a user can create, read, update, and delete blog posts. Since this task doesn't include any authentication part, I  did not include it.

## Features

- Create, read, update, and delete blog posts.
- Validation to ensure blog titles do not exceed 50 characters.
- Pagination of blog posts.
- Environment-based configuration management.

## Requirements

- PHP 8.1+
- MySQL 8.0+
- Docker
- Composer

## Setup Instructions

### Using Docker

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd <project-directory>
   ```
2. **Build and start the Docker containers**:

```bash
docker-compose up --build
```

3. **Access the application: Open the browser and go to to http://localhost:8000.**

### Without Docker
1. **Clone the repository:**

```bash
git clone <your-repository-url>
cd <project-directory>
```
2. **Install dependencies:**

```bash
composer install
```
3. **Set up the .env file**:

```bash
cp .env.example .env
php artisan key:generate
```
4. **Run database migrations:**

```bash
php artisan migrate
```

5. **Start the development server:**

```bash
php artisan serve
```
6. **Access the application:** Open your browser and go to http://localhost:8000.

# Testing
**Run test with the following command**
```bash
php artisan test
```


# CI/CD pipeline

**This project using github action for ci/cd. The workflow file is located in .github/workflows/ci.yml.**



**The CI/CD setup helps make the app ready and put it online automatically. When we change the code, it checks for mistakes, tests the app, and prepares it. For deployment, it sends the files or app package to the server. It updates the database then fixes the settings, clears old data, and restarts the server so the changes work. This happens automatically using tools like GitHub Actions or GitLab CI/CD. Important things, like passwords, are kept safe in a .env file or a secure place.**


