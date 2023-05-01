# Hatchet Code Test

## Install

Clone the repository from Github
```
git clone https://github.com/craftysyntax/hatchet.git ./
```

Install PHP dependancies
```
composer install
```

Install Node (Build) dependancies (using yarn)
```
yarn
```

Update lne 15 of vite.config.js with the url you are using
```
valetTls: 'YOUR_URL'
```

Then build and get ready for live.
```
yarn build && yarn run dev
```

Set up the database in your .env file and then run

```
php artisan migrate 
```

Then seed with the data

```
php artisan db:seed --class=LocationsSeeder
``` 

Open your url in your browser

