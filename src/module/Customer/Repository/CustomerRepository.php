<?php
namespace Module\Customer\Repository;

use Module\Customer\Api\CustomerRepository\CustomerRepositoryInterface;
use Module\Customer\Model\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
  function save(array $data): void
  {
    Customer::create($data);
  }
}
