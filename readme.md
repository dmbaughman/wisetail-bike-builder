
## Welcome to Bike Builder

Bike Builder is a sample problem that Wisetail uses during the interview process. 
This problem has two goals: 

1. Prove you can code in Laravel 

2. Provide a shared foundation for us to talk with you about code. 

## Getting Started

The following steps will get you up and running with this project. We are assuming that
you already have Composer installed globally. These commands are also for a Mac environment and
may be different in a Windows environment.

Step 1: Download or Clone this repo onto your machine.

    git clone https://github.com/wisetail/wisetail-bike-builder.git 

Step 2: Inside the project folder, run composer install.

    cd wisetail-bike-builder
    composer install

Step 3: Rename the .env.example to .env and generate a unique larvel project key.

    mv .env.example .env
    php artisan key:generate

The .env file stores your environment variables for the laravel project. You shouldn't have to change anything for this project.

Step 4: Start Up a Web Server.

Laravel comes with a built in web server that we can use for this project.

    php artisan serve

After you run the above command you should be able reach http://localhost:8000/ in a browser. You should see the default laravel homepage. 

Step 5: Set Up the Database. 

For this project we can get by on a sqlite database.To set this up,from the wisetail-bike-builder directory run:

    touch database/database.sqlite

Step 6: Run Database Migrations.

    php artisan migrate

Step 7. Seed the Database.

    php artisan db:seed

At this point we should have a working API with dummy data set up for us to interact with. Navigating to http://localhost:8000/api/bikes should return a set of Bike JSON objects. 
