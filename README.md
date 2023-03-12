<div align="center">

<img src="/public/ReactMVC.png" width="200">

# ReactMVC
The PHP framework for backend developers

</div>

# About ReactMVC
With the advancement of web technologies and the increasing popularity of the PHP programming language, the use of MVC-based frameworks for developing popular web applications has become widespread. In this context, we will introduce the ReactMVC framework for implementing the MVC architecture using PHP.

ReactMVC is an open-source framework designed for web application development using PHP and the MVC architecture. This framework uses new and advanced features of PHP and helps developers easily and quickly implement their web applications with high speed.

ReactMVC has several different layers of MVC, including the Model layer, View layer, and Controller layer. The Model layer contains information that the programmer needs to process application requests, the View layer is responsible for visualizing information for the user, and the Controller layer is responsible for guiding user requests.

Using this framework, you can quickly and efficiently implement your web applications with high quality. Moreover, ReactMVC benefits from the progress made in the PHP project and is capable of competing with other PHP frameworks due to its performance improvement and speed increase.

In addition, ReactMVC uses the Flux design pattern which is used to manage program data and establish communication between various components. With this pattern, programmers can easily manage program data and implement different parts of the program separately.
<hr>

# Documention
Download ReactMVC: 
```
git clone https://github.com/ReactMVC/ReactMVC.git
```
Go to folder:
```
cd ReactMVC
```
set your php version 8.0 or higher.

Download Libraries:
```
composer install
```
Be sure to run it on the domain or subdomain or localhost + port.

Edit .env File :
```
APP_NAME= Your App Name
APP_URL= Your App URL
```

Run on localhost:
```
php -S localhost:8000
```
## Routing
To define a new route, you need to navigate to the routes directory and open the web.php file with your code editor. Then, we use the Route function to define a new route. ReactMVC has six Route methods which are: get, post, put, patch, options, and delete, used as follows:
```php
<?php

Route::get('/', function(){
    echo "Hello ReactMVC";
});
```

To define a template, you need to create it in the views directory such as app.php and then output it like this:
```php
<?php

Route::get('/', function(){
    view('app');
});
```

You can also use controllers like this:
```php
<?php

Route::get('/', "HomeController@index");
```

This refers to the HomeController.php file in the App/Controllers directory and reads from its index function.

## Controller
In the MVC architecture in PHP, the Controller is one of the three main components responsible for performing necessary tasks to respond to user HTTP requests. 

The main task of the Controller is to receive user requests from the browser and extract the required information from the Model based on the received data. Then, the information is transferred to the View and sent to the user for display.

In general, the Controller is responsible for controlling the program flow and is qualified to manage data and calculations through the Model, as well as displaying information to the user through the View.

To define a new Controller, you need to create a new file in the App/Controllers directory and name it, for example, HomeController.php.
See an example below:
```php
<?php

namespace ReactMVC\App\Controllers;

class HomeController{

    public static function index(){
        view('index');
    }
}
```
Above, the HomeController class is actually your controller class to be used in the framework with the same name as your file.
The index public function performs an operation for you. For example, it is defined here to display index.php in the views folder, which is a template.

<br>

You can send data to a specific page by sending it as an array. At the bottom, there is a sample variable named $data, which is an array that has two parts: appName, which reads the application name from the .env file, and welcome, which is a simple message.
```php
<?php

namespace ReactMVC\App\Controllers;

class HomeController{

    public static function index(){
        $data = [
            'appName' => $_ENV['APP_NAME'],
            'welcome' => 'welcome to Home',
        ];
        view('index', $data);
    }
}
```
The data is displayed in the template as follows:
```php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $appName ?></title>
</head>
<body>
	<p><?= $welcome ?></p>
</body>
</html>
```
Now it's time to introduce the Controller to the Route. Navigate to the web.php file in the routes directory and define the Controller in the route.
```php
<?php

Route::get('/', "HomeController@index");
```

## Custom 404 and 403 pages
To customize the 404 or 403 error pages for ordering templates, navigate to the views/errors directory and edit them.

Additionally, you can edit the 403 error path by modifying the .htaccess file.

In the Router.php file located in the App/Core/Routing directory, you can also customize the 404 error page path.

# Libraries
- [PHPDotEnv](https://github.com/vlucas/phpdotenv)
- [Medoo](https://medoo.in)

