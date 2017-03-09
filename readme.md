
## Welcome to Bike Builder

Bike Builder is a sample problem that Wisetail uses during the interview process. 
This problem has one goal: Provide a shared foundation for us to talk with you about code. 

Give the problem a try and if you can't get it working, no problem! We are much more interested in talking through how far you got than seeing working code.


## Getting Started

The following steps will get you up and running with this project. We are assuming that
you already have Composer installed globally. These commands are also for a Mac environment and
may be different in a Windows environment.

**Step 1: Download or Clone this repo onto your machine.**

    git clone https://github.com/wisetail/wisetail-bike-builder.git 

**Step 2: Inside the project folder, run composer install.**

    cd wisetail-bike-builder
    composer install

**Step 3: Rename the .env.example to .env and generate a unique larvel project key.**

    cp .env.example .env
    php artisan key:generate

**Step 4: Start Up a Web Server.**

Laravel comes with a built in web server that we can use by running:

    php artisan serve

After you run the above command you should be able reach http://localhost:8000/ in a browser. You should see the default laravel homepage. 

**Step 5: Set Up the Database.**

We will be using a sqlite database.To set this up,from the wisetail-bike-builder directory run:

    touch database/database.sqlite
    php artisan migrate
    php artisan db:seed

At this point we should have a working API with dummy data set up for us to interact with. Navigating to http://localhost:8000/api/bikes should return a set of Bike JSON objects. 

## The Problem

Bike Builder is an API for, you guessed it, building bikes. A Bike is made up of various components and we can mix and match these components to make different bikes. 
So far, we have only added functionality for frames and wheels. You can see that the JSON Bike object has nested resources for both frames and wheels. 

We need to extend this API to allow us to add a Seat to a Bike. Your job is to add a Seat resource and create the relationship between the Seat and Bike.
Through the API, you should be able to:

:View all Seats
:View a single Seat
:Create a Seat
:Update a Seat
:Delete a Seat
:Add a Seat to a Bike

A Seat only has one attribute:

-Material ex. Leather

**Notes**
In order to add the resource you will need to add a new Model and Controller, add a new database table, add new routes, add the relationship to the Bike model and Bike database table.


