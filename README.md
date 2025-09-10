# Laravel Hospital Management System

This is a **Hospital Management System** built with **Laravel**, **jQuery**, and **Bootstrap**. It allows management of hospitals and patients, demonstrating relational database operations and AJAX-based interactions for smooth user experience.

---

## Overview

The system includes:

- **Authentication** using **username** instead of email.  
- **Hospital Management (Rumah Sakit)**: CRUD operations with fields:
ID | Nama Rumah Sakit | Alamat | Email | Telepon
Delete functionality is implemented with **AJAX**.  
- **Patient Management (Data Pasien)**: CRUD operations with fields:
ID | Nama Pasien | Alamat | No Telpon | ID Rumah Sakit

Each patient is linked to a hospital.  
Delete operations and filtering by hospital are handled with **AJAX**.  
- **Database**: Migrations and seeders are included for easy setup and sample data.

---

## Technologies Used
- Laravel 10 – backend framework
- jQuery – AJAX interactions
- Bootstrap 5 – frontend design
- MySQL – relational database

## Features
- CRUD for hospitals and patients.
- Relational data management between patients and hospitals.
- AJAX-based delete and filter for smooth user experience.
- Database seeders for initial data population.

## Installation

1. Clone the repository:

    git clone https://github.com/yourusername/your-repo.git
    cd your-repo

2. Install dependencies:

    composer install
    npm install   # optional if frontend assets are built locally

3. Configure .env with your database

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_db_user
    DB_PASSWORD=your_db_password

4. Run Migration and seeders

    php artisan migrate --seed

5. Start the server

    php artisan serve

Access the application at http://localhost:8000.
