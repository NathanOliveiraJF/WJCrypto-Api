<?php
use module\Customer\src\Controller\CustomerController;
use Pecee\SimpleRouter\SimpleRouter as Route;

Route::get('/v1/api/users', [CustomerController::class, "getUser"]);
Route::start();
