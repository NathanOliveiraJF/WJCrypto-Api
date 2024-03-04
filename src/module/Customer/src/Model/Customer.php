<?php 

declare(strict_types=1);

namespace module\Customer\src\Model;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model{

  protected $table = "customers";

  protected $fillable = [
    "id",
    "name",
    "taxvat",
    "docNumber",
    "telephone",
    "address",
    "dob"
  ];
}
