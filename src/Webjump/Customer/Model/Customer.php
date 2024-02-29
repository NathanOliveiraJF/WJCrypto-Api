<?php 

declare(strict_types=1);

namespace Webjump\Customer\Model;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'customer')]
class Customer  {
  #[Id]
  #[Column(type: Types::INTEGER)]
  #[GeneratedValue()]
  private int $entityId;

  private string $name;

  #[Column(length: 15)]
  private string $taxvat;

  #[Column(length: 50, unique: true)]
  private string $docNumber;

  #[Column(length: 40)]
  private string $telephone;

  #[Column(length: 40)]
  private string $address;

  #[Column(name: 'dob', type: Types::DATETIME_MUTABLE)]
  private DateTime $dob;

  public function __construct(int $entityId, string $name, string $taxvat, string $docnumber, string $telephone, string $address, DateTime $dob) {
    $this->entityId = $entityId;
    $this->name = $name;
    $this->taxvat = $taxvat;
    $this->docNumber = $docnumber;
    $this->telephone = $telephone;
    $this->address = $address;
    $this->dob = $dob;
  }

  public function getEntityId(): int 
  {
    return $this->entityId;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getTaxvat(): string
  {
    return $this->taxvat;
  }

  public function getDocNumber(): string
  {
    return $this->docNumber;
  }

  public function getTelephone(): string
  {
    return $this->telephone;
  }

  public function getAddress(): string
  {
    return $this->address;
  }

  public function getDob(): DateTime 
  {
    return $this->dob;
  }
}
