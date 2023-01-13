# Laravel Customers API

This app demonstrates Laravel 9 functional for API creating.

## Features

### For users

- List customers with pagination: http://127.0.0.1:8080/api/v1/customers?page=2
- View customer by ID: http://127.0.0.1:8080/api/v1/customers/1

### For developers

- Generate fake records for customers and invoices: `php artisan db:seed`

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
- Create resource for Customer. Resource allows us to transform an eloquent model into a JSON response:
  ```
  php artisan make:resource V1\\CustomerResource
  ```
