<p align="center"></p>
<h3 align="left">
# Hotel Rooms Project
  This project is a simple app for hosting and finding hotel rooms and prices around the world. It was made to be an objective, clean and an easy tool that can be used by anyone.
  The user can search and view hotels, rooms, prices and dates and simulate a budget for an especific request.
  The ones that register and log into the system can manage their own hotels, rooms, vacancies, prices and dates.

##### Used tools and programming languages: 
* Laravel 8;
* JSON PHP Extension + Database (MySQL, SQLite) + Web server (Apache) - recomended: download the development environment through Xampp.
* Correct configuration o the environment variables on the machine (composer, npm, mysql e php).
* PHP: * Version >= 8.2.6
* OpenSSL PHP Extension 
* PDO PHP Extension 
* Composer, to generate and manage files into the Laravel Project
* Node as a side tool.
* Vue.js, to configurate authentication easily and clean.
* Icons libraries.
* Docker (intended to use to assure the project could run in any possible desk, but there was no time, but it's intended for future upgrades in the project, among unit tests and new functionalities)


##### Step by step:
1. Clone the repository on your computer;
2. cd to the main folder of the project with 'cd findRooms' at the terminal
3. Inside the main folder of the project, create the .env file; 
4. Edit your .env file to your correct information on the database and mail configurations to your local information (the mail can be used through mailtrap for testing, it's a highly recommended tool);
5. Access the repository path on your prompt and execute: 'composer install';
6. Run the 'composer dump-autoload' command
7. Then, still on the prompt, generate an application key running the command: 'php artisan key:generate';
8. Run 'php artisan storage:link' to create a symbolic link (symlink) from the public/storage directory to the storage/app/public directory. This command was used to correctly upload the hotels images to the right folder.
9. Then, run the migrations using: 'php artisan migrate --seed' (the --seed flag runs the laravel database seeder. In this project, it was used to generate users profiles, hotels, rooms and prices associated, to help run some manual tests.
10. Run the node on the application: run the commands 'npm install' , then run 'npm run dev'.
11. At last, para execute the project, run the command: php artisan serve and access the url on the prompt.

#### Development 

* This project was developed using mainly the Laravel framework and its tools were used to help build a clean and organized project.
* The front end was made using html, css, javascript and Bootstrap as base for the project.

#### Developed by Larissa Rezende Fazza ####
