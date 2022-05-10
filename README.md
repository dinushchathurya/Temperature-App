# Temperature-App

### Setup
 
```
$ git clone https://github.com/dinushchathurya/Temperature-App.git
$ cd Temperature-App
$ composer install
```
### CSS & JS Setup

```
npm install && npm run dev
```
  - Create database in your localhost.
  - Duplicate and save .env.example as .env and fill in environment variables like DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD and Open Weather API key according to your values.

### Database Migration

To migrate the database, run the following command:
```
php artisan migrate
```
### Run The Application
```
$ php artisan serve
```
