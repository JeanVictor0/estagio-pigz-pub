<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 50)]
    private ?string $doc = null;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Phone::class)]
    private Collection $phone;

    public function __construct()
    {
        $this->phone = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDoc(): ?string
    {
        return $this->doc;
    }

    public function setDoc(string $doc): self
    {
        $this->doc = $doc;

        return $this;
    }

    /**
     * @return Collection<int, Phone>
     */
    public function getPhone(): Collection
    {
        return $this->phone;
    }

    public function addPhone(Phone $phone): self
    {
        if (!$this->phone->contains($phone)) {
            $this->phone->add($phone);
            $phone->setClient($this);
        }

        return $this;
    }

    public function removePhone(Phone $phone): self
    {
        if ($this->phone->removeElement($phone)) {
            // set the owning side to null (unless already changed)
            if ($phone->getClient() === $this) {
                $phone->setClient(null);
            }
        }

        return $this;
    }
}
