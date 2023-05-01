# Hatchet Code Test

## Install

Install assumes you are running a local development environmant with Valet or similar. Composer, NodeJS and Yarn are already installed and working.

Clone the repository from Github
```
git clone https://github.com/craftysyntax/hatchet.git ./
```

Install PHP dependancies
```
composer install
```

Copy .env.example to .env and aadjust settings to suit. Make sure at the very least the database and app_url are set 

```
php artisan storage:link && php artisan key:generate && php artisan migrate 

```

Then seed with the data

```
php artisan db:seed --class=LocationsSeeder
``` 

Install Node (Build) dependancies (using yarn)
```
yarn
```

Update line 15 of vite.config.js with the url you are using
```
valetTls: 'YOUR_URL'
```

Then build and get ready for live.
```
yarn build && yarn run dev
```

Open your url in your browser

