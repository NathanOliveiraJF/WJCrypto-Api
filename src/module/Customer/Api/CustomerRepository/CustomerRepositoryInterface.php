<?php
namespace Module\Customer\Api\CustomerRepository;

interface CustomerRepositoryInterface 
{
  /**
   * Save Customer.
   * @param array $data contains data to save Customer.
   */
  function save(array $data): void;
}
