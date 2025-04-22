<?php

return [
  //dashboard
  '/' => 'DashboardController@index',
  //auth
  '/login' => 'AuthController@login',
  '/register' => 'AuthController@register',
  '/logout' => 'AuthController@logout',
  '/authenticate' => 'AuthController@authenticate',
  '/registerUser' => 'AuthController@registerUser',

  //users
  '/users' => 'UsersController@index',
  '/users/show' => 'UsersController@show',
  '/users/edit' => 'UsersController@edit', // Corrected route
  '/users/create' => 'UsersController@create',
  '/users/store' => 'UsersController@store',
  '/users/update' => 'UsersController@update', // Corrected route
  '/users/destroy' => 'UsersController@destroy',

];