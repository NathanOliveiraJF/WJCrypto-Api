<?php

declare(strict_types=1);
namespace Module\Customer\Controller;

use Module\Customer\Repository\CustomerRepository;

class CustomerController
{
  protected $customerRepository;
  public function __construct()
  {
    $this->customerRepository = new CustomerRepository();
  }

  public function postCustomer(): void
  {
    $this->customerRepository->save(input()->all());
    response()->httpCode(201)->json(array("statusCode" => 201, "message" => "customer successfully created"));
  }
}
