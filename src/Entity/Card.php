<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CardRepository")
 */
class Card
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="rempli pd");
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Type", mappedBy="cardName")
     */
    private $types;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $health;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reqToAttack;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $attackPts;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $effect;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reward;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    public function __construct()
    {
        $this->types = new ArrayCollection();
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
     * @return Collection|Type[]
     */
    public function getTypes(): Collection
    {
        return $this->types;
    }

    public function addType(Type $type): self
    {
        if (!$this->types->contains($type)) {
            $this->types[] = $type;
            $type->addCardName($this);
        }

        return $this;
    }

    public function removeType(Type $type): self
    {
        if ($this->types->contains($type)) {
            $this->types->removeElement($type);
            $type->removeCardName($this);
        }

        return $this;
    }

    public function getHealth(): ?int
    {
        return $this->health;
    }

    public function setHealth(?int $health): self
    {
        $this->health = $health;

        return $this;
    }

    public function getReqToAttack(): ?int
    {
        return $this->reqToAttack;
    }

    public function setReqToAttack(?int $reqToAttack): self
    {
        $this->reqToAttack = $reqToAttack;

        return $this;
    }

    public function getAttackPts(): ?int
    {
        return $this->attackPts;
    }

    public function setAttackPts(?int $attackPts): self
    {
        $this->attackPts = $attackPts;

        return $this;
    }

    public function getEffect(): ?string
    {
        return $this->effect;
    }

    public function setEffect(?string $effect): self
    {
        $this->effect = $effect;

        return $this;
    }

    public function getReward(): ?string
    {
        return $this->reward;
    }

    public function setReward(?string $reward): self
    {
        $this->reward = $reward;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }
}
