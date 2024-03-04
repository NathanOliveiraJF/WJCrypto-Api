<?php

declare(strict_types=1);
namespace module\Customer\src\Controller;


class CustomerController {

  public function getUser() {
    response()->json(array("teste" => "ola mundo"));
  }
}
