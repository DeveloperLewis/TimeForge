# TimeForge - A Gamified Timetracking App.
TimeForge is still currently under development and is built for showcase purposes.
Built using Laravel and Tailwind

## Installation
- Requires: Php 8.1+, Node 18.17.1+, mysql and Composer.
- `git clone https://github.com/DeveloperLewis/TimeForge.git .`
- `composer install`
- `npm install`
- `npm audit fix` If Required.
- Copy the .env.example located in the root directory and remove ".example". Change any of the variables inside this file to match your local environment.
- `php artisan key:generate`
- `php artisan config:cache`
- `php artisan migrate`
- Open 2 Terminals in the project root and run 1 command for 1 terminal
- `php artisan serve`
- `npm run dev`
- Finally, use the ip provided by php artisan serve. E.G: 127.0.0.1:8000
