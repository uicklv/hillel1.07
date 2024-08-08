<?php

Router::get('/', ['HomeController', 'index']);
Router::get('/login', ['AuthController', 'login']);
Router::post('/login', ['AuthController', 'auth']);
Router::get('/users', ['UsersController', 'index']);


//[
//    '/login' => ['GET' => ['AuthController', 'login'], 'POST' => ['AuthController', 'auth']],
//]