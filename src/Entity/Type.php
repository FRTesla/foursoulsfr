<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeRepository")
 */
class Type
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Card", inversedBy="types")
     */
    private $cardName;

    public function __construct()
    {
        $this->cardName = new ArrayCollection();
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

    /**
     * @return Collection|Card[]
     */
    public function getCardName(): Collection
    {
        return $this->cardName;
    }

    public function addCardName(Card $cardName): self
    {
        if (!$this->cardName->contains($cardName)) {
            $this->cardName[] = $cardName;
        }

        return $this;
    }

    public function removeCardName(Card $cardName): self
    {
        if ($this->cardName->contains($cardName)) {
            $this->cardName->removeElement($cardName);
        }

        return $this;
    }
}
