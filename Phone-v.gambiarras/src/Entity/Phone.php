<?php

namespace App\Entity;

use App\Repository\PhoneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhoneRepository::class)]
class Phone
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $Number = null;

    
    #[ORM\JoinColumn(nullable: false)]
    private ?User $UserNumber = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->Number;
    }

    public function setNumber(string $Number): self
    {
        $this->Number = $Number;

        return $this;
    }

    public function getUserNumber(): ?User
    {
        return $this->UserNumber;
    }

    public function setUserNumber(?User $UserNumber): self
    {
        $this->UserNumber = $UserNumber;

        return $this;
    }
}
