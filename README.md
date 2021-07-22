## Tech stack I have used in this app
Frontend: VueJS (JavaScript), Tailwind (CSS), BLADE (PHP/HTML). 

Backend: Laravel (PHP), MySQL

## How to run the app

* Unzip folder or clone the repository


### Locally
``` bash

# install using composer locally and make sure you have the right config on .env for database.
$ composer install

# do migration and seed all data 
$ php artisan migrate:fresh --seed

# install js dependencies locally
$ npm install

# build for production and launch server
$ npm run prod

# build for production and launch server
$ php artisan serve 
```

## What I can improve

From the optionals tank in this case I would like to add validation on form and also send email to clients
I have already for structure I have already setup for a large application with a help of Vuex so there is no worry
if the project is getting bigger. 

If I have more time I will write commend and add testing make sure if the project not break anywhere possible.  