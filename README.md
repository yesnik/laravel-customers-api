# Laravel Customers API

This app demonstrates Laravel 9 functional for API creating.

## Features

### For users

- List customers with pagination: http://127.0.0.1:8080/api/v1/customers?page=2
- View customer by ID: http://127.0.0.1:8080/api/v1/customers/1

### For developers

- Generate fake records for customers and invoices: `php artisan db:seed`
- Edit `app/Http/Resources/V1/CustomerResource.php` to define fields returned by CustomerController, show action
- Edit `app/Http/Resources/V1/CustomerCollection.php` to define fields returned by CustomerController, index action

## Installation

1. Clone this repo: `git clone git@github.com:yesnik/laravel-customers-api.git && cd laravel-customers-api`
2. Run docker compose: `docker compose up`
3. Create `.env` file: `cp .env.example .env`
4. Visit http://127.0.0.1:8080

## Useful commands

- Create `Customer` model with factory, migration, seed:
  ```
  php artisan make:model Customer --fms
  ```
- Create resource CustomerController, version 1:
  ```
  php artisan make:controller Api\\V1\\CustomerController --resource
  ```
- Create resource for Customer. A resource class represents a single model that needs to be transformed into a JSON structure:
  ```
  php artisan make:resource V1\\CustomerResource
  ```
- Create resource for Customer collection:
  ```
  php artisan make:resource V1\\CustomerCollection
  ```
