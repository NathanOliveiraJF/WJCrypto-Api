<?php
use Module\Customer\Controller\CustomerController;
use Pecee\SimpleRouter\SimpleRouter as Route;

Route::post('/v1/api/users', [CustomerController::class, "postCustomer"]);
Route::start();
