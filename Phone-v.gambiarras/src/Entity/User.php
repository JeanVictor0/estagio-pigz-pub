<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 50)]
    private ?string $Doc = null;

    #[ORM\OneToMany(mappedBy: 'id', targetEntity: Phone::class)]
    private Collection $Phone;

    public function __construct()
    {
        $this->Phone = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDoc(): ?string
    {
        return $this->Doc;
    }

    public function setDoc(string $Doc): self
    {
        $this->Doc = $Doc;

        return $this;
    }

    /**
     * @return Collection<int, Phone>
     */
    public function getPhone(): Collection
    {
        return $this->Phone;
    }

    public function addPhone(Phone $phone): self
    {
        if (!$this->Phone->contains($phone)) {
            $this->Phone->add($phone);
            $phone->setUserNumber($this);
        }

        return $this;
    }

    public function removePhone(Phone $phone): self
    {
        if ($this->Phone->removeElement($phone)) {
            // set the owning side to null (unless already changed)
            if ($phone->getUserNumber() === $this) {
                $phone->setUserNumber(null);
            }
        }

        return $this;
    }
}
