<?php

//echo "Початок обробки...<br>";
//for ($i = 1; $i <= 10; $i++) {
//    echo "Крок $i<br>";
//    flush();
//    sleep(1);
//}
//
//echo "Завершено";
//ob_start
//ob_get_clean
//ob_end_clean
//ob_get_contents
//
//ob_start();
//
//echo "Hello, World";
//
//$content = ob_get_clean();
//
//$content = str_replace("World", "John", $content);
//echo $content;

//ob_start();
//
//require_once  __DIR__ . '/' . 'views/test.php';
//
//$content = ob_get_clean();
//
//$placeHolders = ['{{title}}', '{{content_title}}', '{{main_content}}'];
//$mainContent = ['Test Page', '<h3>Content Title</h3>', '<p>Content Text</p>'];
//
//$content = str_replace($placeHolders, $mainContent, $content);
//
//echo $content;
//exit;
session_start();

define('APP_URL', 'http://localhost:8080/');
define('APP_DIR', __DIR__ . '/');
define('VIEWS_DIR', APP_DIR . '/views/');
define('CONTROLLER_DIR', APP_DIR . 'app/controllers/');

define('DB_HOST', 'mysql');
define('DB_PORT', '3306');
define('DB_CHARSET', 'utf8');
define('DB_NAME', 'hillel');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');

require_once APP_DIR . 'app/system/database/Connector.php';
require_once APP_DIR . 'app/system/database/SQLQueryBuilder.php';
require_once APP_DIR . 'app/system/database/MySqlQueryBuilder.php';
require_once APP_DIR . 'app/system/database/Models/Model.php';
require_once APP_DIR . 'app/system/database/Models/UserModel.php';
require_once APP_DIR . 'app/system/Cookie.php';
require_once APP_DIR . 'app/system/Session.php';
require_once APP_DIR . 'app/system/Request.php';
require_once APP_DIR . 'app/system/Enums/HttpMethod.php';
require_once APP_DIR . 'app/system/Router/Router.php';
require_once APP_DIR . 'app/system/Router/routes.php';
require_once APP_DIR . 'app/system/Functions.php';
require_once APP_DIR . 'app/system/Validator.php';
require_once APP_DIR . 'app/system/Response.php';
require_once APP_DIR . 'app/system/Auth.php';
require_once APP_DIR . 'app/system/UserFacade.php';
require_once APP_DIR . 'app/system/View.php';

Cookie::set('mycookie', 'lesson is over');

Request::url();
Router::process(HttpMethod::from(Request::method()), Request::url());



////DRY
////KISS
////YAGNI
//
//
//class Discount
//{
//    public int $price = 100;
//    public function calculate(float $amount)
//    {
//        return $amount - $this->price;
//    }
//}
//
//class Delivery
//{
//    public int $price = 100;
//
//    public function calculate(float $amount)
//    {
//        return $amount - $this->price;
//    }
//}
