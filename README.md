# Laravel Hospital Management

Laravel Hospital Management is a web-based application developed using Laravel, PHP, and MySQL for the backend, and HTML, CSS, and JavaScript for the frontend. The project aims to provide a convenient way for users to make appointments while incorporating email verification and registration processes to enhance security. The system also includes an administrative interface for managing doctors and appointments. Furthermore, it ensures effective communication by sending email updates to users regarding their appointments, thereby improving the overall patient experience and engagement.

## Features

- User registration and email verification: Users can register an account and verify their email address for enhanced security.
- Appointment scheduling: Users can conveniently schedule appointments with doctors.
- Administrative interface: Admins can manage doctors by adding or deleting them from the system.
- Appointment management: Admins can view and manage appointments, ensuring efficient organization.
- Email communication: Users receive email updates regarding their appointments, improving communication and engagement.

## Environment Setup

1. Setup Git if you haven't already: https://git-scm.com/download/win

2. Setup Xampp from this: 
    https://blog.templatetoaster.com/install-xampp-on-windows/

    After installing, on step 4, run only 'MySQL' from xampp control panel. You don't need to run 'apache'.

3. Setup Composer: 
    - Download and run this : https://getcomposer.org/Composer-Setup.exe
    - open your git/cmd terminal and check if composer is installed completely:
    ```
    composer -v   
    ```
    It will show the version installed, otherwise it has not been installed properly.

## Project Setup
1. Open your git CLI and clone the repository to your xampp directory (usually C://xampp/htdocs/):
  ```bash
   git clone https://github.com/allyonewz/MedikaNaturaLalala.git
   ```

2. Go to http://localhost/phpmyadmin on browser and create a new database 'hospital' following this: 
https://media.geeksforgeeks.org/wp-content/uploads/20210316195142/php3.jpg

3. open the project directory (C://xampp/htdocs/laravel-Hospital_Management) on git CLI and execute the following commands serially : 

```
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
```

4. Now run the project : 

```
php artisan serve
```


```
Super Admin Credentials:

email: admin@gmail.com
password: 12345678

```
5. Open your web browser and visit `http://localhost:8000` to access Laravel Hospital Management.

**Temporarily disable any antivirus or firewall software on your computer. In some cases, these security measures can interfere with SSL/TLS connections.

