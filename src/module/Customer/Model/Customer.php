<?php 

declare(strict_types=1);

namespace Module\Customer\Model;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $table = "customers";
  public $timestamps = false;

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
