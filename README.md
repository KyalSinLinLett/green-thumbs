# Green Thumbs (Team Envision)

Green Thumbs is a Laravel+Vue.js based web application that aims to raise awareness of environmental issues, especially deforestation, that is occurring in Myanmar. On our web application, users can not only use our interactive map to see the changes in forest loss throughout the years, read about current environmental issues but also use our social networking feature to join a community of like-minded people to share thoughts, ideas, participate in challenges and many more.

## Installation

Firstly, you need to have [composer](https://getcomposer.org/download/), [PHP](https://www.apachefriends.org/download.html) and [npm](https://nodejs.org/en/download/) to work with this project.

Now, follow these 10 easy steps to have the project running on your local machine.

### Step 1:
Clone this repository onto your local machine.
```bash
git clone https://github.com/KyalSinLinLett/green-thumbs.git
```

### Step 2:
**cd** into your project
```bash
cd green-thumbs
```

### Step 3:
Install composer dependencies
```bash
composer install
```
### Step 4:
Install npm dependencies
```bash
npm install
```
### Step 5:
Make a copy of the *.env.example* file and name it *.env*. You can now open this project with your preferred text editor to fill out the configuration details such as database and APP_KEY value.
```bash
cp .env.example .env
```
### Step 6:
You now have to generate an APP_KEY that will be automatically filled in, in your *.env* file.
```bash
php artisan key:generate
```
### Step 7:
Our web application requires a database. Create an empty database for your project using the database tool you prefer. If you had installed [XAMPP](https://www.apachefriends.org/download.html), then you could use **phpmyadmin** to set up your database.

### Step 8:
In the .env file, fill the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created.

### Step 9:
Now you can run migrations and the tables will be generated for you.
```bash
php artisan migrate
```
### Step 10:
The project is ready to be served on your local machine.
```bash
php artisan serve
```

## License
[MIT](https://choosealicense.com/licenses/mit/)
