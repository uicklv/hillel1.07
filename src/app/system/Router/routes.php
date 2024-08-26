<?php

Router::get('/', ['HomeController', 'index']);
Router::get('/login', ['AuthController', 'login']);
Router::post('/login', ['AuthController', 'auth']);
Router::get('/logout', ['AuthController', 'logout']);
Router::get('/register', ['AuthController', 'register']);
Router::post('/register', ['AuthController', 'registerProcess']);
Router::get('/users', ['UsersController', 'index']);
Router::get('/closed', ['ContentController', 'closedPage']);


//[
//    '/login' => ['GET' => ['AuthController', 'login'], 'POST' => ['AuthController', 'auth']],
//]