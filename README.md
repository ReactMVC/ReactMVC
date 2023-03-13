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

## Route Params
In the MVC architecture that you have a link with the address https://test.com/test-param, "test-param" carries a Route Parameter. The Route Parameter specifies which resource (such as a web page) the user's request is for as part of the URL. Here, "test-param" is the value of the Route Parameter that is passed to the Controller.

Additionally, for the PHP framework named ReactMVC, you can create a series of Route Parameters. To do this, simply add a new parameter as a Route Parameter in the routes/web.php file, for example:

```php
<?php

Route::get('/post/{id}', "PostController@index");
```

In the above code, the {id} parameter has been added. This parameter is passed to the Controller so that you can use it in other parts of the code.

Furthermore, in your own Controller (in the above example, PostController), you can retrieve the Route parameter using the `get_route_param()` function as follows:

```php
<?php 
namespace ReactMVC\App\Controllers; 

class PostController{
 public static function index(){ 
    global $request; 
    $id = $request->get_route_param('id'); 
    $data = [ 
        'id' => $id, 
    ]; 
    view('blog.post', $data); 
 }
}
```

In the above code, `get_route_param()` is used to get the value of the Route parameter. Then, a `$data` variable is defined containing the parameter information. Here, only a `$id` variable with the value of the Route parameter is defined.

Finally, the `$data` variable is passed to the `view()` function, which is responsible for sending the required data to the template. In this example, `$data` contains the value of `$id`, which you can use in your template.

## Nano
Nano is an advanced library for building Telegram bots with the easiest methods, specifically designed for ReactMVC. This library has exceptional speed and security, and supports 98% of Telegram's methods.

To get started, add a Route and place the following code inside it:
```php 
<?php
use ReactMVC\App\Utilities\Bot;
Bot::telegram();

$bot = new Nano('token', 'name'); 
$bot->chat('/start', 'Hello Nano');
$bot->run();
```
Here, `token` is your bot's token obtained from BotFather, and `name` is the name of your bot.

Now, after this step, set up and connect your bot to the webhooks.

For a complete Nano tutorial, be sure to join the Nano Telegram channel at: [Join Now](https://t.me/PHPNano)

<hr>

# Utilities in ReactMVC

In the ReactMVC framework, there is a section called "Utilities" that contains several sub-sections including Client, Server, Url, Asset, and Bot. Each of these sub-sections has its own specific function.

## Client

This section can retrieve useful information such as the user's IP address, host, browser information, and more. For example:

```php
Client::ip();
```

## Server

This section provides the ability to retrieve server information. For example:

```php
Server::ip();
```

## Asset

In this section, you can easily access files used in the ReactMVC project. For example:

```php
Asset::get('style.css');
```

## Bot

This section allows you to create your own bot applications using APIs provided by some bot services.

All of these sections are expandable and modifiable, making it easier and faster to develop your website or application.

<hr>

# Middleware in ReactMVC

Middleware are a layer of code in ReactMVC that sit between requests and responses. This layer allows requests to be modified and their corresponding responses to be monitored as they pass through the server.

## Using Middleware in ReactMVC

To use middleware in ReactMVC, first create the desired middleware file in the App/Middleware directory. Then, in the appropriate Route file, add the desired middleware as a third parameter in the form of an array. For example:

```php
<?php
use ReactMVC\App\Middleware\Test;

Route::get('/blog', function(){ 
    return null;
}, [Test::class]);
```

In the above example, Test is being used as middleware. If a user sends a request to the /blog route, the Test code will be executed.

## Structure of Middleware in ReactMVC

The structure of middleware in ReactMVC is in the form of PHP classes. Each middleware must contain a handle() function that includes the necessary code to perform the desired operation. For example:

```php 
<?php
namespace ReactMVC\App\Middleware; 

class Test{ 

    public function handle(){ 
        global $request; 
        view('blog.app'); 
    } 
}
```

In the above example, the Test class contains a handle() function that sends a desired view for display to the user.

## Conclusion

Middleware in ReactMVC allows users to modify requests and monitor corresponding responses as they pass through the server. This provides users with the ability to design and implement more expandable code for their systems.

<hr>

# MysqlBaseModel in ReactMVC

In the ReactMVC framework, you can use the MysqlBaseModel class (Medoo) to communicate with a MySQL database using PHP. This class creates a common base for all models in your application.

## Creating a Model

To create a new model in the App/Models directory, create a class with the desired name. For example, the Users model is created as follows:

```php
<?php 
namespace ReactMVC\App\Models;

use ReactMVC\App\Models\Contracts\MysqlBaseModel; 

class User extends MysqlBaseModel
{
    protected $table = 'users'; 
}
```

In this code, the `User` class inherits from the `MysqlBaseModel` class, and the `$table` value is set for it. This variable is the name of the table for which your model has been created.

## Connecting to the Database

After creating the model, the `.env` file is used to connect to the database. In this file, your database information is placed as follows:

```
DB_HOST=127.0.0.1
DB_TYPE=mysql
DB_PORT=3306
DB_NAME=ReactMVC
DB_USER=root
DB_PASS=
```

## Creating a New Record

To create a new record in the users table, you can consider the following code as an example:

```php
<?php
use ReactMVC\App\Models\User;

$data = [
    'name' => 'Hossein',
    'email' => 'test@gmail.com',
];

$user = new User();

$user->create($data);
```

By running this code, a new record with the values specified in `$data` will be created in the `users` table.

## Retrieving a Full List of Records

To retrieve a full list of records in the users table, you can use the following code:

```php
<?php
use ReactMVC\App\Models\User;

$user = new User();

$result = $user->getAll();

var_dump($result);
```

## More DB Library Documentation

To use the features of the Medoo library, which are also usable in the `MysqlBaseModel` class, you can refer to the documentation of this library.

<hr>

## Social Media Links (dev):
- [Telegram](https://t.me/h3dev)
- [Website](https://dark-dev.eu)
- [G-mail](mailto:h3dev.pira@gmail.com)

To develop using a framework beyond just the basic one, you can install and use the ReactMVC package:
```
composer require reactmvc/reactmvc
```

# Libraries
- [PHPDotEnv](https://github.com/vlucas/phpdotenv)
- [Medoo](https://medoo.in)


# License
The ReactMVC framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
