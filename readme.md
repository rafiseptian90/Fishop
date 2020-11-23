# Fishop

![FiShop landing page](https://i.imgur.com/F4OeTl3.png)
**Fishop** is a web application based on marketplace, in Fishop we can sell our software whatever platform used. If there are interested users, they can immediately buy that software and the admin of Fishop will calling the creator of that software.

## Installation Guide

 1. Clone or download this repository
	> `git clone https://github.com/rafiseptian90/Fishop.git`
	
 2. Rename .env.example into .env
 3. Run composer install command on your terminal
	 > `composer install`
	 
 4. Generate the key of laravel application
	  > `php artisan key:generate`
	  
 5. Import the database dump inside folder **db-dump** to your database
 6. Change env database with your own configuration
	 > DB_DATABASE=your_db_name_after_import_db-dump.sql <br />
       DB_USERNAME=your_db_username <br /> 
       DB_PASSWORD=your_db_password
 7. Run the with command `php artisan serve` and enjoy

## Package used

 - [x] Voyager admin panel
