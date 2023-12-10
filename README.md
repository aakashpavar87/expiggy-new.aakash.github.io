# expiggy
 # My PHP Application


![first-gif](https://github.com/aakashpavar87/expiggy-new.aakash.github.io/assets/124806811/91ee265e-5031-4892-ba1f-a8b5a2561b44)

![second-gif](https://github.com/aakashpavar87/expiggy-new.aakash.github.io/assets/124806811/d1b9ef2b-0693-48ef-b782-67325085f4d3)

This repository contains a PHP application that utilizes Composer for managing dependencies. Follow the steps below to set up and run the application.

## Prerequisites

1. **PHP**: Make sure you have PHP installed on your system. You can download it from [php.net](https://www.php.net/downloads.php).

2. **Composer**: Install Composer, the dependency manager for PHP, by following the instructions on [getcomposer.org](https://getcomposer.org/download/).

## Installation

1. Clone this repository to your local machine:

    ```bash
    git clone https://github.com/aakashpavar87/expiggy-new.aakash.github.io.git
    ```

2. Navigate to the project directory:

    ```bash
    cd expiggy-new.aakash.github.io
    ```

3. Install dependencies using Composer:

    ```bash
    composer install
    ```

## Configuration

1. Copy the example configuration file:

    ```bash
    cp .env.example .env
    ```

2. Update the `.env` file with your configuration values.

## Running the Application

Use your preferred web server or PHP's built-in server to run the application:

### Using PHP's Built-in Server

```bash
php -S localhost:8000 -t public/

